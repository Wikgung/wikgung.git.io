<?php include "_head.php"; ?>

<body>
    <?php include "_header.php"; ?>
    <section>
        <form class=" container mt-5" action=" <?= base_url('informasi/prosesaddpel'); ?> " method="POST">

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder=" Nama" required>
            </div>
            <div class="form-group">
                <label for="name">Tujuan</label>
                <input type="text" name="tujuan" class="form-control" id="nama" placeholder=" tujuan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="phone">Kontak</label>
                <input type="text" name="kontak" class="form-control" id="kontak" placeholder="Contact Number" required>
            </div>
            <div class="form-group mt-3">
                <textarea class="form-control" name="jadwal" id="jadwal" rows="5" placeholder="Jadwal" required=""></textarea>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="<?= base_url('informasi/ipp'); ?>">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>
    <?php include "_footer.php"; ?>
    <script src="<?php echo base_url() ?>/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#jadwal'
        });
    </script>