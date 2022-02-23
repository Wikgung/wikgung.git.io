<?php include "_head.php"; ?>


<body>

  <!-- ======= Header ======= -->
  <?php include "_header.php"; ?>
  <!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <center>
        <h1>Pura Penataran Agung Dalem Ped</h1>
      </center>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Sejarah ======= -->
    <section id="Sejarah" class="Sejarah">
      <div class="container" data-aos="fade-up">
        <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
          <a title="add" href="<?= base_url("home/addcontent"); ?>" class="btn btn-success">Tambah</a>
        <?php endif ?>
        <div class="row">
          <?php
          foreach ($allcontent as $i => $content) : ?>
            <tr>
              <td>
                <strong>
                  <h1 class=" mt-3"><?= $content->judul ?></h1>
                </strong>
              </td>
              <td class=" justify-content-center"> <?= $content->content ?>
              </td>
              <td> <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                  <div class="d-flex justify-content-center">

                    <a class="btn btn-warning " title="Edit" href="<?= base_url("home/editcontent/" . $content->id); ?>">Edit</a>

                  </div>
                <?php endif ?>
              </td>

            </tr>

          <?php endforeach  ?>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- Busana adat  -->
    <div class=" container justify-content-center">
      <label><strong>
          <h1>TATA BUSANA</h1>
        </strong></label>
      <figure class=" align-content-center">
        <center><img src=" <?= base_url('/assets/img/busanadat.png'); ?>" width="100%"></center>
      </figure>

    </div>
    <!-- ======= Counts Section ======= -->
    <?php if (session()->get('logged_in')) : ?>
      <div class=" mt-10">
        <?php include "penghitung.php"; ?>
      </div>
    <?php endif ?>
  </main><!-- End #main -->
  <!--=========form komentar test======----->


  <?php if (session()->get('logged_in')) : ?>
    <div class="container mt-5 justify-content-center">

      <div class=" col-lg-8 mt-5 mt-lg-0">
        <form action="<?= base_url('home/komentarin') ?>" method="post" class=" justify-content-center">
          <div class=" row justify-content-end ">
            <div class="col-md-6 form-group">
              <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required="">

            </div>
          </div>
          <div class=" row justify-content-end">
            <div class="col-md-6 form-group mt-3 mt-md-3">

              <textarea class="form-control" name="isi" rows="5" placeholder="Message" required=""></textarea>
            </div>
            <div class=" text-end mt-3"><button class="btn btn-primary" type="submit">Send Message</button></div>
          </div>
        </form>
      </div>
    <?php endif ?>

    <section class="pt-3">
      <div class="container">

        <p><strong class=" align-content-center justify-justify-content-md-end">komentar </strong></p>
        <table class="table table-hover table-bordered">
          <?php
          foreach ($allkomentar as $i => $komentar) : ?>
            <tr>

              <td class=" border-2">
                <h2><?= $komentar->nama ?></h2>
                <?= $komentar->isi ?>
              </td>
              <?php if (session()->get('id') && session()->get('level') == 'admin') : ?>
                <td class=" border-2"><a title="Delete" href="<?= base_url("home/delete/" . $komentar->id); ?>" class="btn btn-danger justify-content-end">Delete</a>
                <?php endif ?></td>
            </tr>
          <?php endforeach  ?>
        </table>
      </div>
      <?php if (!session()->get('id')) : ?>
        <div class=" text-center mt-3"><a href="<?= base_url('login/login') ?>"><button class="btn btn-primary" type="submit">Tambahkan Komentar</button></a></div>
    </div>
  <?php endif ?>
  </section>
  </div>

  <!-- ======= Footer ======= -->
  <?php include "_footer.php" ?>
  <!-- End Footer -->