<?php include "_head.php"; ?>


<body>

    <!-- ======= Header ======= -->
    <?php include "_header.php"; ?>
    <!-- End Header -->
    <!---====Informasi Pelabuhan dan Penginapan ===--->
    <section class="card d-flex mt-5">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <h1>Informasi Penginapan dan Pelabuhan </h1>
                    </li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                    <li class="breadcrumb-item" ">Informasi </li>
                    <li class=" breadcrumb-item active" aria-current="page">Informasi Penginapan dan Pelabuhan</li>
                </ol>
            </nav>
        </div>
    </section><!-- End Kontak -->
    <div>
        <div class=" container mt-5">
            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                <p> <a title="add" href="<?= base_url("informasi/addpel"); ?>" class="btn  btn-success">Tambah</a></p>
            <?php endif ?>
            <div class=" table-responsive-sm">
                <table class="table table-hover table-bordered">
                    <tr class=" align-content-center">
                        <th>No</th>
                        <th>Nama Pelabuhan</th>
                        <th>Tujuan</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Jadwal Keberangkatan</th>
                        <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                            <th class=" border-2">Action</th>
                        <?php endif ?>
                    </tr>

                    <?php
                    foreach ($allpelabuhan as $i => $pelabuhan) : ?>
                        <tr>
                            <td> <?php echo $i + 1 ?></td>
                            <td><?= $pelabuhan->nama ?></td>
                            <td><?= $pelabuhan->tujuan ?></td>
                            <td><?= $pelabuhan->alamat ?></td>
                            <td><?= $pelabuhan->kontak ?></td>
                            <td><?= $pelabuhan->jadwal ?></td>
                            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                                <td class=" border-2"><a title="Edit" href="<?= base_url("informasi/editpel/" . $pelabuhan->id); ?>" class="btn btn-warning">Edit</a></td>


                            <?php endif ?>
                        </tr>
                    <?php endforeach  ?>
                </table>
            </div>
        </div>
        <div class=" container mt-5">
            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                <p> <a title="add" href="<?= base_url("informasi/addpenginapan"); ?>" class="btn btn-success">Tambah</a></p>
            <?php endif ?>
            <div class=" table-responsive-sm">
                <table class="table table-hover table-bordered">
                    <tr class=" align-content-center">
                        <th>No</th>
                        <th>Nama Penginapan</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                            <th class=" border-2">Action</th>
                        <?php endif ?>
                    </tr>

                    <?php
                    foreach ($allpenginapan as $i => $penginapan) : ?>
                        <tr>
                            <td> <?php echo $i + 1 ?></td>
                            <td><?= $penginapan->nama_penginapan ?></td>
                            <td><?= $penginapan->alamat ?></td>
                            <td><?= $penginapan->kontak ?></td>
                            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                                <td class=" border-2"><a title="Edit" href="<?= base_url("informasi/editpenginapan/" . $penginapan->id); ?>" class="btn btn-warning">Edit</a></td>


                            <?php endif ?>
                        </tr>
                    <?php endforeach  ?>
                </table>
            </div>
        </div>

    </div>


    <!-- ======= Footer ======= -->
    <?php include "_footer.php" ?>
    <!-- End Footer -->