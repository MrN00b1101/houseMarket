<?php echo form_open('user/login'); ?>
    <div class="row">
        <div class="col-md-4 offset-4">
            <h1 class="text-center"><?php echo $title; ?></h2>
            <div class="form-group">
                <input type="text" name="mail" class="form-control" placeholder="Írd be a email címed!" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Írd be a jelszavad!" required autofocus>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Bejelentkezés</button>
        </div>
    </div>

<?php echo form_close(); ?>