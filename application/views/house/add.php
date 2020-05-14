<h2 class="text-center my-4"><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('house/add'); ?>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text " >Település:</span>
  </div>
  <input list="zips" class="form-control" name="city" id="city" >
    <datalist id="zips">
      <?php foreach($cities as $city): ?>
        <option value="<?php echo $city['zipcode']; ?>"><?php echo $city['city']; ?></option>
      <?php endforeach; ?>
    </select>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Utca, házszám:</span>
  </div>
  <input type="text" class="form-control"  name="addres">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Leírás:</span>
  </div>
    <textarea id="" class="form-control" name="description" ></textarea>
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Mérete:</span>
  </div>
    <input type="number" id="" class="form-control" name="size" >
    <div class="input-group-append">
      <span class="input-group-text">nm</span>
    </div>
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Szobák száma:</span>
  </div>
    <input type="number" id="" class="form-control" name="rNum" >
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Emeletek száma:</span>
  </div>
    <input type="number" id="" class="form-control" name="floors" >
  </div>

  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" >Ár:</span>
  </div>
    <input type="number" id="" class="form-control" name="price" >
    <div class="input-group-append">
      <span class="input-group-text">Mft.</span>
    </div>
  </div>

  
  <div class="form-group">
    <label>Kép feltöltése</label><br>
    <input type="file" name="userfile" size="20">
  </div>

  <button type="submit" class="btn btn-outline-secondary">Elfogad</button>
</form>