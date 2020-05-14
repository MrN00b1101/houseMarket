<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('house/add'); ?>
  <div class="form-group">
    <label>Utca, házszám</label>
    <input type="text" class="form-control" name="addres" placeholder="Írd be a címet!">
  </div>
  <div class="form-group">
    <label>Leírás</label>
    <textarea id="" class="form-control" name="description" placeholder="Add meg a ház leírását!"></textarea>
  </div>
  <div class="form-group">
    <label>Méret (négyzetméter)</label>
    <input type="number" id="" class="form-control" name="size" placeholder="Add meg a ház méretét!">
  </div>

  <div class="form-group">
    <label>Szobák száma</label>
    <input type="number" id="" class="form-control" name="rNum" placeholder="Add meg a szobák számát!">
  </div>
  <div class="form-group">
    <label>Emeletek száma</label>
    <input type="number" id="" class="form-control" name="floors" placeholder="Add meg a emeletek számát!">
  </div>
  <div class="form-group">
    <label>Ár (MFt)</label>
    <input type="number" id="" class="form-control" name="price" placeholder="Add meg az árat!">
  </div>
  
  <div class="form-group">
    <label>Település</label>
    <input list="zips" class="form-control" name="city" id="city">
    <datalist id="zips">
      <?php foreach($cities as $city): ?>
        <option value="<?php echo $city['zipcode']; ?>"><?php echo $city['city']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  
  <div class="form-group">
    <label>Kép feltöltése</label><br>
    <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-secondary">Elfogad</button>
</form>