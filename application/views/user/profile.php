<h2 class="text-center my-4"><?php echo $user['name']; ?></h2>


            
              <h4>Mail:<?php echo $user['mail']; ?></h4>
               <h4>Telefonszám:<?php echo $user['tel']; ?></h4>
               
            <?php if($this->session->userdata('logged_in')): ?>
                <hr>
                <?php if($this->session->userdata('user_id') != $user['user_id'] ): ?>
                    <?php echo form_open('message/write/'.$user['user_id']); ?>
                        <input class="px-md-3 btn btn-outline-primary ml-2" type="submit" value="Üzenet írása">
                    <?php echo form_close(); ?>   
                <?php endif; ?>   
            <?php endif; ?>   
