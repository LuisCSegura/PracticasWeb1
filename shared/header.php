<?php 

  $menu =[["name"=>"P1","url"=>"/page_1.php"],["name"=>"P2","url"=>"/page_2.php"],["name"=>"P3","url"=>"/page_3.php"],
  ["name"=>"P4","url"=>"/page_4.php"],["name"=>"P5","url"=>"/page_5.php"]];

  $limit=4;

 ?>


<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="./imgs/logo.png" >
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">

      

     <?php if(sizeof($menu)>$limit) {?>

      <?php for ($i=0; $i < $limit; $i++) { 
            $op=$menu[$i];?>
        <a class="navbar-item" href="<?= $op['url']?>">
        <?= $op['name']?>
        </a>
      <?php } ?>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          
          <?php for ($i=$limit; $i < sizeof($menu); $i++) { 
            $op=$menu[$i];?>
          <a class="navbar-item" href="<?= $op['url']?>">
            <?= $op['name']?>
          </a>
        <?php }?>

        </div>
      </div>
    <?php } else{?>

      <?php for ($i=0; $i < sizeof($menu); $i++) { 
            $op=$menu[$i];?>
        <a class="navbar-item" href="<?= $op['url']?>">
        <?= $op['name']?>
        </a>
      <?php } ?>

    <?php }?>


    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>