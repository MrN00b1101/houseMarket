<h1 class="text-center my-3"><?= $title ?></h1>
<br>
<?php foreach($messages as $message) : ?>
    <a class="btn btn-secondary" href="<?php echo base_url('/message/read/'.$message['message_id']); ?>">
        <h3><?php echo $message['sender']; ?></h3>
        <h4><small><?php echo  word_limiter($message['message'], 30); ?></small></h4>
        <h5><small><?php echo $message['sendTime']; ?></small></h5>
    </a>
    <br>
<?php endforeach; ?>