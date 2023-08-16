<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function destroy(Request $request){

        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function userAdmin(){
        $userAdmin = User::all();
        return view('admin.user_admin',[
            'user'=>$userAdmin,
        ]);
    }

    // public function userPenduduk(){
    //     $id = Auth::user()->id;
    //     $userPenduduk = User::find($id);
    //     return view('admin.user_penduduk',compact('userPenduduk'));
    // }

    public function profile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }

    public function editprofile(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.admin_profile_edit',compact('editData'));
    }

    public function storeprofile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->no_hp = $request->no_hp;
        $data->alamat = $request->alamat;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
        }
        $data->save();
        
        $notification = array(
            'message' => 'Admin Profile Updated Successfully', 
            'alert-type' => 'info'
        );

        return redirect()->route('admin.profile')->with($notification);
    }

    public function ChangePassword () {

        return view('admin.admin_change_password');
        
    }

    public function UpdatePassword(Request $request){

            $validateData = $request->validate([
                'oldpassword'=> 'required',
                'newpassword'=> 'required',
                'confirm_password'=> 'required | same:newpassword',
            ]);

            $hashedPassword = Auth::user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword)){
                $users = user::find(Auth::id());
                $users->password = bcrypt($request->newpassword);
                $users->save();
                
                session()->flash('message','Password Update Succesfully');
                return redirect()->back();
            }else{
                session()->flash('message','Old Password is not match');
                return redirect()->back();
            }
            $notification = array(
                'message' => 'Admin Profile Updated Successfully', 
                'alert-type' => 'info'
            );

    }

}
