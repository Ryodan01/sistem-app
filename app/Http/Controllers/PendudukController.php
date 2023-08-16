<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;

class PendudukController extends Controller
{
    public function user_penduduk(Request $request)
    {
        $search = $request->input('search');
        $query = Penduduk::query();

        if ($query) {
            $query->where('nik', 'like', '%' . $search . '%')
                  ->orWhere('nama', 'like', '%' . $search . '%');
        }
        $penduduks = $query->get();

        if ($penduduks) {
            return view('penduduk.user_penduduk',[
                'penduduk' => $penduduks
            ]);
        }
        
        $penduduk = Penduduk::all(); // Mengambil semua data penduduk
        return view('penduduk.user_penduduk', compact('penduduk'));
    }

    public function create()
    {
        return view('penduduk.create_penduduk');
    }

    public function store(Request $request)
    {
        
        Penduduk::create([
            'nama' => $request->input('nama'),
            'nik' => $request->input('nik'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'kelamin' => $request->input('kelamin'),
            'agama' => $request->input('agama'),
            'no_hp' => $request->input('no_hp'),
            'pekerjaan' => $request->input('pekerjaan'),
            'alamat' => $request->input('alamat'),
            // Tambahkan atribut lain
        ]);
        $notification = array(
            'message' => 'Penduduk  Create Successfully', 
            'alert-type' => 'info'
        );

        return redirect()->route('penduduk.user')->with($notification);
    }

    public function edit($id)
    {
        $penduduk = Penduduk::find($id);
        return view('penduduk.edit_penduduk', compact('penduduk'));
    }

    public function update(Request $request, $id)
    {
        $penduduk = Penduduk::find($id);

        $penduduk->update([
            'nama' => $request->input('nama'),
            'nik' => $request->input('nik'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'kelamin' => $request->input('kelamin'),
            'agama' => $request->input('agama'),
            'no_hp' => $request->input('no_hp'),
            'pekerjaan' => $request->input('pekerjaan'),
            'alamat' => $request->input('alamat'),
            // Update atribut lain jika ada
        ]);

        $notification = array(
            'message' => 'Penduduk  Updated Successfully', 
            'alert-type' => 'info'
        );

        return redirect()->route('penduduk.user')->with($notification);
    }

    public function destroy($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();

        $notification = array(
            'message' => 'Penduduk  Delete Successfully', 
            'alert-type' => 'warning'
        );

        return redirect()->route('penduduk.user')->with($notification);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $penduduks = Penduduk::where('nik', 'like', '%' . $search . '%')
                             ->orWhere('nama', 'like', '%' . $search . '%')
                             ->paginate(10);
        return view('penduduk.user', compact('penduduks'));
    }
}
