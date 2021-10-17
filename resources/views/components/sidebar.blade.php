<div class="vertical-menu">
    @php
    $curr_url = Route::currentRouteName();
    @endphp
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li class=" {{ in_array($curr_url,['index'])?'mm-active':'' }}">
                    <a href="{{ route('index') }}" class="waves-effect {{ in_array($curr_url,['index'])?'active':'' }}">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                </li>


                <li class="menu-title" key="t-apps">Management</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">Users</span>
                    </a>
                </li>

                <li class="menu-title">Settings</li>
                <li class=" {{ in_array($curr_url,['profile.show'])?'mm-active':'' }}">
                    <a href="{{ route('profile.show') }}"
                        class="waves-effect {{ in_array($curr_url,['profile.show'])?'active':'' }}">
                        <i class='bx bx-user-pin'></i>
                        <span>Profile</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
