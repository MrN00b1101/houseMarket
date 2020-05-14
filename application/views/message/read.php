<h2 class="text-center my-4"><?= $message['name'] ?></h2>
<?php if($this->session->userdata('logged_in')): ?>
    <div class="row">   
        <div class="post-body">
            <?php echo $message['message']; ?>
        </div>        
    </div>
    <hr>
    <div class="row">
        <?php echo form_open('message/write/'.$message['sender']); ?>
            <input class="px-md-3 btn btn-outline-primary ml-2" type="submit" value="Válasz">
            <?php echo form_close(); ?>
        </div>
<?php endif; ?>