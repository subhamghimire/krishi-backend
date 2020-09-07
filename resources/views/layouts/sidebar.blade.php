<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a class="nav-link pr-0 text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="block m-t-xs font-bold">{{ Auth::user()->name }}</span>
                    </a>
                </div>
            </li>
            <li {{ (Request::is('/') ? 'class=active' : '') }}>
                <a href=""><i class="fa fa-home"></i> <span
                        class="nav-label">Dashboard</span></a>
            </li>
            <li {{ (Request::is('/one') ? 'class=active' : '') }}>
                <a href=""><i class="fa fa-newspaper"></i> <span
                        class="nav-label">One</span></a>
            </li>
            <li {{ (Request::is('/two') ? 'class=active' : '') }}>
                <a href=""><i class="fa fa-users"></i> <span
                        class="nav-label">Two</span></a>
            </li>
            <li class="/nav-item">
                <a href="#"
                   onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                   class="nav-label d-flex align-items-center">
                    <i class="fas fa-sign-out-alt"></i> &nbsp;&nbsp;
                    <span>Logout</span>
                </a>
                @include('forms.logout')
            </li>
        </ul>
    </div>
</nav>
