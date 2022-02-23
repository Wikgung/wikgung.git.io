<?php include "_head.php"; ?>


<body>

    <!-- ======= Header ======= -->
    <?php include "_header.php"; ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Kebudayaan </h1>
            <h2>berisi foto dan keterangan </h2>

        </div>
    </section><!-- End Hero -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                        <a title="add" href="<?= base_url("informasi/addkebudayaan"); ?>" class="btn btn-success">Tambah</a>
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
                <?php foreach ($allkebudayaan as $i => $kebudayaan) : ?>
                    <div class="col-md-3">
                        <div class="card" ">
                            <div class=" card-header">
                            <h5 class=" text-center"><?= $kebudayaan->judul ?></h5>
                        </div>
                        <div class="card-body align-content-center">
                            <figure class=" align-content-center justify-content-center">
                                <center> <img src="<?= base_url('assets/upload/' . $kebudayaan->foto) ?>" height="200" width="200" class=" img-fluid" alt=" Responsive image"></center>
                            </figure>
                        </div>
                        <div class="card-footer">
                            <p><?= $kebudayaan->keterangan ?></p>
                        </div>
                        <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>

                            <div class="card">
                                <a title="Edit" href="<?= base_url("informasi/editkebudayaan/" . $kebudayaan->id); ?>" class="btn-warning text-center">Edit</a></td>
                                <a title="Delete" href="<?= base_url("informasi/deletekeb/" . $kebudayaan->id); ?>" class="btn-danger text-center">Delete</a></td>
                            </div>
                        <?php endif ?>

                    </div>
            </div>
        <?php endforeach  ?>
        </div>
        </div>

    </section>
    <!-- ======= Footer ======= -->
    <?php include "_footer.php" ?>
    <!-- End Footer -->