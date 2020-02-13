


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:#d6d6d6;">
    <h1 class="row justify-content-center p-8">Application</h1>
    <hr>
    <br>
    <h2 class="row justify-content-around p-8">Send a new Advertisement!</h2>
    <div class="container p-5">
    
    <br>
    <div class="row justify-content-between bg-light p-2 rounded-lg">
  
        <div class="col-md-5">
    <form action="insert.php" method="post">
    
        <div class="form-group"> 
    <label for="">Enter your name</label><input  type="text"class="form-control" name="username" placeholder="Full name">
    </div>
    <div class="form-group">
    <label for="">What would you like to sell? </label> <textarea class="form-control" type="text" placeholder='Things you want to sell'  name="ad"></textarea>
    </div>
    <input class="col-6 btn btn-danger" type="submit" value="Submit">
    <?php 
if(isset($_GET['hiba'])){
    echo "<div class='col-6 text-danger'> Fill all fields! </div>";
}

?>
    </div>
    </form>
   
    <div class="col-md-7">
        <div class="container mt-5">
        <div class="row justify-content-around align-items-center">
            <div class="col-9">
            <p>Take a look about the existing advertisements!</p>
            </div>
            <div class="col-3">
            <p>Our users!</p>
</div>
        </div>
        <div class="row justify-content-around align-items-end">
            <div class="col-9">
            <a class=" btn btn-primary" href="advertisement.php">Advertisements</a>
            </div>
            <div class="col-3">
            <a class=" btn btn-primary" href="users.php">Users</a>
            </div>
        </div>
        </div>
    
    </div>
    </div>
    </div>
    </body>
</html>