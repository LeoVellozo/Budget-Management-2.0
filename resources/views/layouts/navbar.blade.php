
<nav>
    <div class="container">
        <img src="{{ url('assets/img/logo.png') }}" class="logo">
        <!-- <div class="search-bar">
            <span class="material-icons-sharp">search</span>
            <input type="search" placeholder="Search">
        </div> -->
        <div class="d-flex justify-content-between align-items-center w-10">
            <div class="profile-area">
                <div class="theme-btn">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
            </div>
            <div class="profilePhoto ms-4">
                <img src="{{ url('assets/img/profile-2.jpg') }}">
            </div>
            <div class="dropdown ms-4">
                <div class="profile">
                    <!-- <span class="profile-name"><h5>Rafael</h5></span>
                    <span class="material-icons-sharp">expand_more</span> -->
                </div>
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <span>{{ Auth::user()->name }}</span>
              </button>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
            
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </li>
              </ul>
            </div>
        </div>
    </div>
</nav>



<!-- END OF NAVBAR-->
