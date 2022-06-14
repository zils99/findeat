<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar-bg sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li>
                <div style="font-size: 12px;" class="border-bottom border-dark row d-flex mx-auto pb-2">
                    <div class="col-lg-2 m-auto">
                        <i style="font-size: 200%;" class="fa-regular fa-user"></i>
                    </div>
                    <div class="col">
                        <b><?= $user['user_nama']; ?></b><br>
                        <?= $user['user_role']; ?>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/home') ?>">
                    <span data-feather="shopping-cart"></span>
                    <i class="fa-solid fa-user-shield"></i>
                    Owner
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/listuser') ?>">
                    <span data-feather="shopping-cart"></span>
                    <i class="fa-solid fa-user-gear"></i>
                    User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/listcollection') ?>">
                    <span data-feather="shopping-cart"></span>
                    <i class="fa-solid fa-layer-group"></i>
                    Collection
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('Admin/listlokasi') ?>">
                    <span data-feather="shopping-cart"></span>
                    <i class="fa-solid fa-location-dot"></i>
                    Locallities
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