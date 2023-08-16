<div class="dlabnav">
    <div class="dlabnav-scroll mm-active ps ps--active-y">
        <ul class="metismenu mm-show" id="menu">
            <li class="mm-active"><a href="{{route('dashboard')}}" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="fas fa-user-check"></i>
                    <span class="nav-text">User</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse left">
                    <li><a href="{{route('user.admin')}}">User Admin</a></li>
                    <li><a href="{{route('penduduk.user')}}">User Penduduk</a></li>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Charts</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse left">
                    <li><a href="chart-flot.html">Flot</a></li>
                    <li><a href="chart-morris.html">Morris</a></li>
                    <li><a href="chart-chartjs.html">Chartjs</a></li>
                    <li><a href="chart-chartist.html">Chartist</a></li>
                    <li><a href="chart-sparkline.html">Sparkline</a></li>
                    <li><a href="chart-peity.html">Peity</a></li>
                </ul>
            </li>
        </ul>        
        {{-- <div class="copyright">
            <p><strong>Fillow Saas Admin</strong> © 2021 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLabs</p>
        </div> --}}
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 557px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 426px;"></div></div></div>
</div>