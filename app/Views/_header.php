<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <a href="<?= base_url("home") ?>">
                <img src="<?= base_url("/assets/img/ped logo.png") ?>" alt="" class="img-fluid">
            </a>
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="<?= $menuActive == "home" ? "active" : "" ?>" href="<?= base_url('home'); ?>">Home</a></li>
                <li><a class="<?= $menuActive == "galeri" ? "active" : "" ?>" href=" <?= base_url('home/galeri'); ?>"> Galeri</a></li>
                <li><a class="<?= $menuActive == "lokasi" ? "active" : "" ?>" href="<?= base_url('home/lokasi'); ?>">Lokasi</a></li>

                <li class="dropdown"><a class="<?= $menuActive == "informasi" ? "active" : "" ?>" href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url('informasi/alur') ?>">Alur Persembahyangan</a></li>
                        <li><a href="<?= base_url('informasi/ipp') ?>">Informasi Pelabuhan dan Penginapan</a></li>
                        <li><a href="<?= base_url('informasi/kebudayaan') ?>">Kebudayaan</a></li>
                        <li><a href="<?= base_url('informasi/kesehatan') ?>">Informasi Kesehatan</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="<?= $menuActive == "kontak" ? "active" : "" ?>" href="#"><span>Kontak</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?= base_url('kontak/pemangku') ?>">Pemangku</a></li>
                        <li><a href="<?= base_url('kontak/tokohadat') ?>">Tokoh adat</a></li>
                    </ul>
                </li>
                <?php if (session()->get('logged_in')) : ?>
                    <li class="dropdown dropdown-menu-left"><a href="#" class="bi bi-person"> <?= session()->get('username') ?></a>
                        <ul>
                            <li><a href="<?= base_url('login/userprofile') ?>">profile</a></li>
                            <li><a href="<?= base_url('login/logout') ?>">Logout</a></li>


                        </ul>
                    </li>
                <?php else : ?>
                    <li class="dropdown dropdown-menu-left"><a href="#" class="bi bi-gear"></a>
                        <ul>
                            <li><a href="<?= base_url('login/login') ?>">login</a></li>
                        </ul>
                    </li>
                <?php endif ?>
            </ul>
            <i class="bi mobile-nav-toggle bi-list">
            </i>
        </nav>
    </div>
</header>