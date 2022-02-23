<?php include "_head.php"; ?>

<body>
    <?php include "_header.php"; ?>
    <section>
        <form class=" container mt-5" action=" <?= base_url('informasi/proseseditpenginapan/' . $penginapan->id); ?> " method="POST">

            <div class="form-group">
                <label for="name">Nama Penginapan</label>
                <input type="text" name="nama_penginapan" class="form-control" id="nama_penginapan" value=" <?= $penginapan->nama_penginapan ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $penginapan->alamat ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Kontak</label>
                <input type="text" name="kontak" class="form-control" id="kontak" value="<?= $penginapan->kontak ?>" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" href="<?= base_url("informasi/ipp") ?>">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>
    <?php include "_footer.php"; ?>