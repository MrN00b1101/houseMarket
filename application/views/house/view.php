<h2 class="my-4"><?php echo $house['addres']; ?></h2>

<div class="row">
        <div class="col-md-3">
            
                <img style="height: 100%; width: 100%;" src="<?php echo site_url(); ?>/assets/<?php echo $house['images']; ?>">
            
        </div>  
            <ul>
               <li><h4>Méret: <small><?php echo $house['size']; ?>  nm</small></h4>
               <li><h4>Szobák száma: <small><?php echo $house['Rnum']; ?> </small></h4>
               <li><h4>Emeletek száma: <small><?php echo $house['floors']; ?> </small></h4>
               <li><h4>Város: <small><?php echo $house['city']; ?> </small></h4>
               <li><h4>Ára: <small><?php echo $house['price']; ?> MFt</small></h4>
               <li><h4>Eladó: 
                <?php if($this->session->userdata('logged_in')): ?>
                    <a href="/user/profile/<?php echo $house['seller']; ?>">
                <?php endif; ?>  
                <small><?php echo $house['name']; ?> </small>
                <?php if($this->session->userdata('logged_in')): ?>
                    </a>
                <?php endif; ?>  
                </h4>
            </ul>      
            
            <div class="col-md-9">
            <div class="post-body">
                <?php echo $house['description']; ?>
            </div>  
            <?php if($this->session->userdata('logged_in')): ?>
            <hr>
            <div class="row mx-md-n5">
                <?php if($this->session->userdata('user_id') == $house['seller']): ?>
                    <?php echo form_open('house/delete/'.$house['house_id']); ?>
                        <input class="px-md-3 btn btn-danger ml-2" type="submit" value="Törlés">
                    </form>
                    <?php echo form_open('house/edit/'.$house['house_id']); ?>
                        <input class="px-md-3 btn btn-danger ml-2" type="submit" value="Módosítás">
                    </form>
                <?php endif; ?>

                <a href="<?php echo site_url('/download/'.$house['images']); ?>" class="btn btn-primary ml-2">Kép letöltés</a>
                </form>
            </div>
            <?php endif; ?>
        </div>