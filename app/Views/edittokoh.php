<?php include "_head.php"; ?>

<body>
    
    <?php include "_header.php"; ?>
    <section>
        <form class=" container mt-5" action=" <?= base_url('kontak/prosesedittokohadat/'.$tokohadat->id); ?> " method="POST">

            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $tokohadat->nama?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Kontak</label>
                <input type="text" name="kontak" class="form-control" id="kontak" value="<?= $tokohadat->kontak?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat"value="<?= $tokohadat->alamat?>" required>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </section>
    <?php include "_footer.php"; ?>