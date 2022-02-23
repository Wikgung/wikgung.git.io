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
                        <h1>Kontak</h1>
                    </li>
                </ol>
            </nav>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Kontak</li>
                    <li class="breadcrumb-item active" aria-current="page">Pemangku</li>
                </ol>
            </nav>

        </div>
    </section><!-- End Kontak -->


    <section class="pt-3">
        <div class="container">
            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                <p> <a title="add" href="<?= base_url("kontak/add"); ?>" class="btn btn-success">Tambah</a></p>
            <?php endif ?>
            <table class="table table-hover table-bordered">
                <tr class=" align-content-center">
                    <th>id</th>
                    <th>nama</th>
                    <th>kontak</th>
                    <th>alamat</th>
                    <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                        <th class=" border-2">Action</th>
                    <?php endif ?>
                </tr>

                <?php
                foreach ($allpemangku as $i => $pemangku) : ?>
                    <tr>
                        <td> <?php echo $i + 1 ?></td>
                        <td><?= $pemangku->nama ?></td>
                        <td><?= $pemangku->kontak ?></td>
                        <td><?= $pemangku->alamat ?></td>
                        <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                            <td class=" border-2"><a title="Edit" href="<?= base_url("kontak/editpemangku/" . $pemangku->id); ?>" class="btn btn-warning">Edit</a>
                                <a title="Delete" href="<?= base_url("kontak/delete/" . $pemangku->id); ?>" class="btn btn-danger">Delete</a>
                            </td>


                        <?php endif ?>
                    </tr>
                <?php endforeach  ?>
            </table>


        </div>
    </section>
    <!-- ======= Footer ======= -->
    <?php include "_footer.php" ?>
    <!-- End Footer -->