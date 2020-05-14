<?php echo validation_errors(); ?>
<h2 class="text-center my-4"><?= $title; ?></h2>

<?php echo form_open('user/register'); ?>
    
<div class="form-row">
        <div class="form-group col-md-12">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" >Teljes név:</span>
                </div>
                <input type="text" class="form-control"  name="name">
            </div>
        </div>
  </div>
  <div class="form-row">
        <div class="form-group col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" >Email</span>
                </div>
                <input type="email" class="form-control"  name="mail">
            </div>
        </div>
        <div class="form-group col-md-6">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" >Telefonszám:</span>
                    </div>
                    <input type="tel" class="form-control"  name="tel">
            </div>
        </div>
  </div>
  <div class="form-row ">
  <div class="form-group col-md-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" >Jelszó:</span>
        </div>
        <input type="password" class="form-control"  name="password">
    </div>
  </div>
  <div class="form-group col-md-6">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" >Jelszó megerősítése:</span>
        </div>
        <input type="password" class="form-control"  name="password2">
    </div>
  </div>
</div>
<button type="submit" class="btn btn-block btn-outline-primary">Regisztráció</button>

<?php echo form_close(); ?>

