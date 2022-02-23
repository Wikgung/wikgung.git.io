<?php include "_head.php"; ?>

<>
    <?php include "_header.php"; ?>

    <section class=" container justify-content-center">
        <h5><?= $kesehatan->desa ?></h5>

        <form class=" container justify-content-center " action="<?= base_url('informasi/proseseditkes/' . $kesehatan->id) ?>" method="post">

            <div class="modal-body">
                <div class="form-group mb-3">
                    <label>Positif</label>
                    <input type="text" name="positif" class="form-control" id="positif" value="<?= $kesehatan->positif ?>" placeholder="Positif" required>
                </div>
                <div class="form-group mb-3">
                    <label>Dalam Perawatan</label>
                    <input type="text" name="dalam_perawatan" class="form-control" id="dalam_perawtan" value="<?= $kesehatan->dalam_perawatan ?>" placeholder="kesehatan Email" required>
                </div>
                <div class="form-group mb-3">
                    <label>Sembuh</label>
                    <input type="text" name="sembuh" class="form-control" id="sembuh" value="<?= $kesehatan->sembuh ?>" placeholder="kesehatan " required>
                </div>
                <div class="form-group form-control-range mb-3 ">
                    <label>Meninggal</label>
                    <input type="text" name="meninggal" class="form-control" id="meninggal" value="<?= $kesehatan->meninggal ?>" width="50%" required>
                </div>
            </div>

            <div class=" modal-footer border-white">
                <a class="btn btn-secondary  " href="<?= base_url("informasi/kesehatan") ?>">Close</a>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>

    </section>

    <?php include "_footer.php"; ?>