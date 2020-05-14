<!DOCTYPE html>
    <head>
        <title>EladLak</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css">
      </head> 
    
    <body>  
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class=" navbar-collapse" id="navbarColor02">
    <a class="navbar-brand mr-auto" href="<?php echo base_url(); ?>">EladLak</a>
    <ul class="nav navbar-nav navbar-right">
      <?php if(!$this->session->userdata('logged_in')): ?>

        <li> <a class="nav-link" href="<?php echo base_url(); ?>user/login">Bejelentkezés</a></li>
        <li> <a class="nav-link" href="<?php echo base_url(); ?>user/register">Regisztráció</a></li>
  
      <?php endif; ?>
      <?php if($this->session->userdata('logged_in')): ?>

      <li><a class="nav-link" href="<?php echo base_url(); ?>house/add">Ház hozzáadása </a></li>
      <li> <a class="nav-link" href="<?php echo base_url(); ?>user/profile">Adataim</a></li>
      <li> <a class="nav-link" href="<?php echo base_url(); ?>message/list">Üzeneteim</a></li>
      <li> <a class="nav-link" href="<?php echo base_url(); ?>user/logout">Kijelentkezés</a></li>

      <?php endif; ?>

    </ul>
  </div>
</nav>
<br>


<div class="container">
<?php if($this->session->flashdata('user_registered')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('character_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('character_created').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('character_updated')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('character_updated').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('race_created')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('race_created').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('character_deleted')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('character_deleted').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('race_deleted')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('race_deleted').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedin')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('login_failed')): ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('user_loggedout')): ?>
  <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
<?php endif; ?>