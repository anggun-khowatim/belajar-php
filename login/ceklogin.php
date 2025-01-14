<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

$user = $_SESSION['username'];
$pass = $_SESSION['password'];

if($user == "azriel_" and $pass = "R4h4514"){
echo "Anda Berhasil Login";
echo "<br>";
echo "username : ". $user;
echo "<br>";
echo "password : ". $pass;
echo "<br>";

echo "<a href='logout.php'>logout</a>";

}else{
    echo "maaf, username dan kata sandi anda tidak cocok";
    echo "<meta http-equiv='refresh' content='2; url=index.php'>";
}
// echo "Anda Berhasil Login";
// echo "<br>";
// echo "username : ". $_SESSION['username'];
// echo "<br>";
// echo "password : ". $_SESSION['password'];
// echo "<br>";

?>