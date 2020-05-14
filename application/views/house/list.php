<h2 class="text-center my-4"><?= $title ?></h2>

<?php foreach($houses as $house) : ?>


    <div class="card  my-3 offset-3" style="width: 35rem;">
        <a href="<?php echo base_url('/house/'.$house['house_id']); ?>">
            <img src="<?php echo site_url(); ?>/assets/<?php echo $house['images']; ?>" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?php echo $house['city'].", ";  echo $house['addres']; ?></li>
            <li class="list-group-item">Ár:<?php echo $house['price']; ?> MFt.</li>
            <li class="list-group-item">Méret: <?php echo $house['size']; ?> nm</li>
            <li class="list-group-item"><?php echo  word_limiter($house['description'], 30); ?></li>
        </ul>
            
        </div>
    </div>
    
    
<?php endforeach; ?>