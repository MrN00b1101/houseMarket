<h1 class="text-center my-4"><?= $title ?></h1>
<br>
<?php foreach($messages as $message) : ?>
<a href="<?php echo base_url('/message/read/'.$message['message_id']); ?>">
    <div class="card">
        <div class="card-header">
            <?php echo $message['name']; ?>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p><?php echo  word_limiter($message['message'], 10); ?></p>
                <footer class="blockquote-footer"><?php echo $message['sendTime']; ?></footer>
            </blockquote>
        </div>
    </div>
</a>
    <br>
<?php endforeach; ?>