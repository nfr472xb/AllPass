



<?php
session_start();
if ($_POST["account"]!=null&&$_POST["password"]!=null)
{
$account = $_POST['account'];
$password = $_POST['password'];
$_SESSION["account"]=$account;
$_SESSION["password"] = $_POST["password"];
header('Location:../');
}

else
{
    header('Location:../login.php?log=帳號密碼錯誤，請重新登入');
}


?>