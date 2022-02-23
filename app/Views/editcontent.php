<?php include "_head.php"; ?>

<body>
  <?php include "_header.php"; ?>

  <section>
    <form class=" container mt-5" action=" <?= base_url('home/proseseditcontent/' . $content->id); ?> " method="POST">

      <div class="form-group">
        <label for="name">Judul</label>
        <input type="text" name="judul" class="form-control" id="judul" value="<?= $content->judul ?>" required>
      </div>
      <div class=" form-group">
        <label for=" name">Content</label>
        <textarea rows="20" type="text" name="content" class=" form-control " id="content" required><?php echo $content->content ?></textarea>
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
      selector: '#content'
    });
  </script>