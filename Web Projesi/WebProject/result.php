<?php
session_start();
require "routing.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$email=$_POST["email"];
$password=$_POST["password"];
$databaseUser="g221210048@gmail.com";
$databasePass="7c88d32bf18818d040a063c0832d09b9";
if(empty($email) && empty($password)){
    echo ("Lütfen formda boş veri bırakmayın.");
    comeBack(4);
}
else{
    $password=md5($password);
    if($databaseUser!=$email || $databasePass!=$password){
        echo("Email veya şifre hatalı.");
        comeBack(3);
    }
    else{
        echo("Hoşgeldin g221210048.");
        comeBack(3);
        go("index3hakkımda.html");
        
    }
}

}
else{
    go("phplogin.php",4);
    exit("Bu sayfayı görüntüleyemezsiniz.");
}
?>