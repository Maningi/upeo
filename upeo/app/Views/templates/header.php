<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen" href="main.css" />

    <!--added for icons-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!-- pop up modals-->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--end for addded for icons-->
    
    <script src="main.js"></script>


</head>
<body>
  <?php
    $uri = service('uri');
  ?>
<nav class="navbar navbar-expand-lg gradient-custom-2  ">
  <a class="navbar-brand text-white" href="/"><b>UPEO CHAMA</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
  <?php if (session()->get('isLoggedIn')): ?>

  <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= ($uri->getSegment(1) == 'dashboard' ? 'active' : null) ?>">
        <a class="nav-link text-white" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item" <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>>
        <a class="nav-link text-white" href="/profile">Profile</a>
      </li>

    </ul>
      
    <ul class="navbar-nav my-2 my-lg-0">
    <li class="nav-item">
          <h6 class="nav-link text-white">Welcome <?= $user['firstname']?></h6>
        </li>
      <li class="nav-item">
          <a class="nav-link text-white" href="/logout">Logout</a>
        </li>
    </ul>
 </nav>   
</div>
<br>
<br>
	
					  
					  

  <?php else: ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<nav class="navbar navbar-expand-lg">
	  
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
			<a class="nav-link text-white" href="/">Login</a>
		  </li>
		  <li class="nav-item" <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>>
			<a class="nav-link text-white" href="/register">Register</a>
		  </li>

		</ul>
		<?php endif;  ?>
	  </div>
	</nav>    
