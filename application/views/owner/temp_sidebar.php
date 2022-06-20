<div style="height: 100vh;" class="container-fluid">
    <div class="row">

        <!-- sidebar -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar-bg sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li>
                        <h4>Restaurant</h4>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('Owners/home') ?>">
                            <span data-feather="home"></span>
                            <i class="fa-solid fa-shop"></i>
                            Profile Resto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('Owners/listmenu') ?>">
                            <span data-feather="home"></span>
                            <i class="fa-solid fa-burger"></i>
                            Menu Resto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Owners/perfoma') ?>">
                            <span data-feather="file"></span>
                            <i class="fa-solid fa-chart-simple"></i>
                            Performa Resto
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Owners/reservasi') ?>">
                            <span data-feather="shopping-cart"></span>
                            <i class="fa-solid fa-calendar-check"></i>
                            Reservasi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Landing/logout') ?>">
                            <span data-feather="shopping-cart"></span>
                            <i class="fa-solid fa-right-from-bracket"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>