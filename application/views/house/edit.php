<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('house/update/'.$house['house_id']); ?>
  <div class="form-group">
    <label>Utca, házszám</label>
    <input type="text" class="form-control" name="addres" value="<?php echo $house['addres']; ?>">
  </div>
  <div class="form-group">
    <label>Leírás</label>
    <textarea id="" class="form-control" name="description" ><?php echo $house['description']; ?></textarea>
  </div>
  <div class="form-group">
    <label>Méret (négyzetméter)</label>
    <input type="number" id="" class="form-control" name="size" value="<?php echo $house['size']; ?>">
  </div>

  <div class="form-group">
    <label>Szobák száma</label>
    <input type="number" id="" class="form-control" name="rNum" value="<?php echo $house['Rnum']; ?>">
  </div>
  <div class="form-group">
    <label>Emeletek száma</label>
    <input type="number" id="" class="form-control" name="floors" value="<?php echo $house['floors']; ?>">
  </div>
  <div class="form-group">
    <label>Ár (MFt)</label>
    <input type="number" id="" class="form-control" name="price" value="<?php echo $house['price']; ?>">
  </div>
  
  <div class="form-group">
    <label>Település</label>
    <input list="zips" class="form-control" name="city" id="city" value="<?php echo $house['city']; ?>">
    <datalist id="zips">
    <?php foreach($cities as $city): ?>
      <option  value="<?php echo $city['zipcode']; ?>"><?php echo $city['city']; ?></option>
    <?php endforeach; ?>
    </select>
  </div>
  
  <div class="form-group">
    <label>Kép feltöltése</label><br>
    <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-secondary">Módosítás</button>
</form>