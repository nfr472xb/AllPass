<?php  
if(isset($_SESSION["account"]))
{
  include("part/sidebar-login.php");
}
else {
  include("part/sidebar-nologin.php");
}
?>  