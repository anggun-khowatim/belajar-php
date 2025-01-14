<?php
session_start();
$_SESSION["username"] = "aszeeek_";
$_SESSION["password"] = "rahasia";

echo "berhasil membuat session";
echo "<br>";

echo "<a href=cek_session.php>
cek session</a>";
?>