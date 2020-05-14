<h2 class="my-4"><?php echo $user['name']; ?></h2>

<div class="row">
            <ul>
               <li><h4>Mail: <small><?php echo $user['mail']; ?>  nm</small></h4>
               <li><h4>Telefonszám: <small><?php echo $user['tel']; ?> </small></h4>  
            </ul>   
            <?php if($this->session->userdata('logged_in')): ?>
            <hr>
            <div class="row">
                    <?php echo form_open('message/write/'.$user['user_id']); ?>
                        <input class="px-md-3 btn btn-danger ml-2" type="submit" value="Üzenet írása">
                    </form>
                </form>
            </div>
            <?php endif; ?>   
</div>