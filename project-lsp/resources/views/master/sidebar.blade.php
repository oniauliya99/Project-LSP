<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
                            <span data-feather="star"></span>
                            Arsip
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : ''}}" href="/about">
                            <span data-feather="info"></span>
                            About
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
