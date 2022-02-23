<?php include "_head.php"; ?>

<body>
    <?php include "_header.php"; ?>

    <section>
        <form class=" container mt-5" action=" <?= base_url('home/proseseditgaleri/' . $galeri->id); ?> " method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="name">Gambar</label>
                <div class="col-md-8 col-lg-9">
                    <img src=" <?= base_url('assets/upload/' . '/' . $galeri->foto); ?>" alt="Profile" class="rounded-circle" width="100px" height="100px">
                    <div class="pt-2">
                        <input type="file" name="foto" accept=".png,.jpg,.jpeg">
                    </div>
                </div>
            </div>
            <div class=" form-group">
                <label for=" name">keterangan</label>
                <textarea rows="20" type="text" name="keterangan" class=" form-control " id="keterangan" required><?php echo $galeri->keterangan ?></textarea>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="<?= base_url("home") ?>">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>

    <?php include "_footer.php"; ?>
    <script src="<?php echo base_url() ?>/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#keterangan'
        });
    </script>