<h2 class="text-center my-4"><?= $title; ?></h2>
<?php echo form_open('user/login'); ?>
    <div class="row">
        <div class="col-md-4 offset-4">
            <h1 class="text-center"><?php echo $title; ?></h2>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" >Email</span>
                </div>
                <input type="email" class="form-control" aria-describedby="basic-addon1" name="mail">
            </div>

            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" >Jelszó:</span>
                    </div>
                    <input type="password" class="form-control" aria-describedby="basic-addon1" name="password">
            </div>

            <button type="submit" class="btn btn-outline-primary btn-block">Bejelentkezés</button>
        </div>
    </div>

<?php echo form_close(); ?>