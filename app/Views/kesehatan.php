<?php include "_head.php"; ?>

<body>

    <!-- ======= Header ======= -->
    <?php include "_header.php"; ?>
    <!-- End Header -->


    <!-- ======= Kontak ======= -->
    <section class="card d-flex mt-5">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <h1>Kesehatan</h1>
                    </li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                    <li class="breadcrumb-item" ">Informasi </li>
                    <li class=" breadcrumb-item active" aria-current="page">Kesehatan</li>
                </ol>
            </nav>

        </div>
    </section><!-- End Kontak -->

    <main>
        <div class="container py-3">
            <div class=" container justify-content-center">
                <div>
                    <label class=" justify-content-center">
                        <h1> Protokol Kesehatan </h1>
                    </label>
                </div>
                <div class=" justify-content-end">
                    <img src="<?= base_url('assets/img/prokes_3m.jpg'); ?> " width="100%" class=" justify-content-center img-fluid py-5" alt=" Responsive Image">
                    <p> Berikut ini Protokol kesehatan yang wajib dipatuhi oleh pengunjung Pura Penataran Agung Dalem Ped </p>

                    <p>1. Memakai masker</p>
                    <p>Pengunjung yang ingin tangkil ke pura harus mengenakan masker dengan benar </p>
                    <p>2. Menjaga jarak </p>
                    <p>Saat berada di pura pengunjung diwajibkan menjaga jarak 1 meter dan mengikuti tanda yang sudah di siapkan </p>
                    <p>3. Mencuci tangan</p>
                    <p> Pengunjung diwajibkan untuk mencuci tangan sebelum memasuki pura dan setelah memasuki pura di tempat yang sudah disediakan </p>
                </div>
            </div>
        </div>

        <!-- Edit kesehatan  -->

        <?php include "penghitung.php"; ?>

        <div class=" container mt-3">
            <div class=" table-responsive-sm">
                <table class="table table hover " width="100%">
                    <thead>
                        <tr>
                            <th class=" border-2">No</th>
                            <th class=" border-2">Desa</th>
                            <th class=" border-2">Positif</th>
                            <th class=" border-2">Dalam Perawatan </th>
                            <th class=" border-2">Sembuh</th>
                            <th class=" border-2">Meninggal</th>
                            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                                <th class=" border-2">Action</th>
                            <?php endif ?>
                        </tr>
                        <?php
                        foreach ($allkesehatan as $i => $kesehatan) : ?>
                            <tr>
                                <td class=" border-2"> <?php echo $i + 1 ?></td>
                                <td class=" border-2"><?= $kesehatan->desa ?></td>
                                <td class=" border-2"><?= $kesehatan->positif ?></td>
                                <td class=" border-2"><?= $kesehatan->dalam_perawatan ?></td>
                                <td class=" border-2"><?= $kesehatan->sembuh ?></td>
                                <td class=" border-2"> <?= $kesehatan->meninggal ?></td>
                                <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                                    <td class=" border-2"><a title="Edit" href="<?= base_url("informasi/editkes/" . $kesehatan->id); ?>" class="btn btn-warning">Edit</a></td>
                                <?php endif ?>
                            </tr>
                        <?php endforeach  ?>
                    </thead>
                </table>
            </div>
        </div>
    </main>
    <!-- ======= Footer ======= -->
    <?php include "_footer.php" ?>
    <!-- End Footer -->