<?php include "_head.php"; ?>

<body>

    <!-- ======= Header ======= -->
    <?php include "_header.php"; ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <center>
                <h1>Galeri </h1>
            </center>
        </div>
    </section><!-- End Hero -->
    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                        <a title="add" href="<?= base_url("home/addgaleri"); ?>" class="btn btn-success">Tambah</a>
                    <?php endif ?>
                </div>
            </div>
            <div class="row">
                <?php foreach ($allgaleri as $i => $galeri) : ?>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <figure>
                                    <img src="<?= base_url('assets/upload/' . $galeri->foto) ?>" width="100%" height="200px" class=" img-fluid border-dark" alt=" Responsive image">
                                </figure>
                            </div>

                            <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                                <div class="card-footer">
                                    <?= $galeri->keterangan ?>
                                </div>
                                <div class="card">
                                    <a title="Edit" href="<?= base_url("home/editgalcon/" . $galeri->id); ?>" class="btn-warning text-center">Edit</a></td>
                                    <a title="Delete" href="<?= base_url("home/deletegal/" . $galeri->id); ?>" class="btn-danger text-center">Delete</a></td>
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