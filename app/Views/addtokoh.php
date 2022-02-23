<?php include "_head.php"; ?>

<body>
    <?php include "_header.php"; ?>
    <section>
        <form class=" container mt-5" action=" <?= base_url('kontak/prosesaddtokoh'); ?> " method="POST">

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Contact Name" required>
            </div>
            <div class="form-group">
                <label for="phone">Kontak</label>
                <input type="text" name="kontak" class="form-control" id="kontak" placeholder="Contact Number" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>
    <?php include "_footer.php"; ?>