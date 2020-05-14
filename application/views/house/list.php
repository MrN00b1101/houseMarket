<h1 class="text-center my-3"><?= $title ?></h1>
<br>
<?php foreach($houses as $house) : ?>
    <a class="btn btn-secondary" href="<?php echo base_url('/house/'.$house['house_id']); ?>">
        <h3><?php echo $house['city'].", ";  echo $house['addres']; ?></h3>
    </a>
    
    <h4>Ár (MFt): <small><?php echo $house['price']; ?> </small></h4>
    <h5>Méret (négyzetméter): <small><?php echo $house['size']; ?> </small></h5>
    <h5>Eladó: <small><?php echo $house['name']; ?></small></h5>
    <h5><small><?php echo  word_limiter($house['description'], 30); ?></small></h5>
    
    <br>
<?php endforeach; ?>