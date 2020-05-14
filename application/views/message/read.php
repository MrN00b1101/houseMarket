<h2 class="my-4"><?= $message['name'] ?></h2>

<div class="row">
    <?php if($this->session->userdata('logged_in')): ?>
        <div class="post-body">
            <?php echo $message['message']; ?>
        </div>          
        <hr>
        <div class="row mx-md-n5">
            <?php echo form_open('message/write/'.$message['sender']); ?>
                <input class="px-md-3 btn btn-danger ml-2" type="submit" value="Válasz">
            </form>
        </div>
    <?php endif; ?>
</div>