<h2 class="text-center my-4"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('message/write'); ?>
  <div class="form-group">
    <label>Üzenet</label>
    <textarea class="form-control" name="message" placeholder="Írd ide az üzented"></textarea>
    <input type="hidden" name="reciever" value="<?= $reciever ?>">
  </div>
  <button type="submit" class="btn btn-outline-primary">Elküld</button>
</form>