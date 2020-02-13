<?php
// adatbázis elérés
$con = mysqli_connect('localhost', 'berci', 'berci');

if(!$con) {
    echo 'Not connected to the server';
}

if(!mysqli_select_db($con, 'application')){
    echo 'Database not selected';
}
$username = $_POST['username'];
$ad = $_POST['ad'];
$modified = preg_replace('/\s+/', '', $username);

$title = $modified;
$search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
$replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");
$urlTitle = str_replace($search, $replace, $title);
$userid = strtolower($urlTitle);

if(!empty($username) && !empty($ad)) {




//adatbázis feltöltés
$sql1 = "INSERT INTO advertisement (userid, title) VALUE ('$userid','$ad')"; 
$sql2 = "INSERT INTO users (name) VALUE ('$username')"; 

if ($con->query($sql1) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
if ($con->query($sql2) === TRUE) {
    echo "<h1 style='text-align: center'>  Successful! New advertisement has been sent!</h2>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
} else {
    echo "<h1 style='text-align: center'> Fill all the input fields!</h2>";
    header('Location: ./app.php?hiba=1');
}
header("refresh:1; url=app.php");