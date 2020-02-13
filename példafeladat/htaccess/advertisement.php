<?php 
include 'dbconnection.php';
include 'datafromdb.php';
?>

<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color:#D6D6D6;">
  <a class="navbar-brand" href="advertisement.php">Advertisements</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a class="nav-link btn btn-primary text-white" href="app.php">Back to the Main page<span class=></span></a>
      </li>
    </ul>
  </div>
</nav>
<br>
        <div class="container mt-5 text-center">
            <div class="row">
            <div class="col-8 align-center">
                <div class="row text-center justify-content-around">
                    <div class="col-3 p-3 mb-2 bg-info text-white"><p>UserID</p></div>
                    <div class="col-7 p-3 mb-2 bg-success text-white"><p>Advertisement</p></div>
                </div>
            </div>
            <div class="col-4 align-center ">
                <div class="row text-center justify-content-around">
                    
                    <div class="col-6 p-3 mb-2 bg-danger text-white"><p>Ad's User</p></div>
                </div>
            </div>
            <div class="col-8 align-center">
            
        <?php
        $ads = new ViewAds();
        $ads->showAllAds();
        ?>
        </div>
        <div class="col-4 align-center">
        <?php
        $users = new ViewUser();
        $users->showAllUsers();
        ?>
        </div>
        </div>
        </div>
		
		<script src="" async defer></script>
    </body>
    
</html>