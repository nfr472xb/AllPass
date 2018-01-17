      <?php include("part/header.php"); ?>

      
      <body >
    <div id="main">
      <div class="wrapper">
        <?php include("part/sidebar.php"); ?> 
     


        <div class="row login-box">

        <div class="row login-content">

<form action="./function/do-login.php" method="post">
<h6 class="center-align" style="color:red" >

<?php
if(isset($_GET['log']))
{
  echo $_GET['log'] ;
}
?>

</h5>
    <div class="row">
      <div class="input-field">
       <i class="material-icons prefix">account_circle</i>
       <input type="text" name="account"id="icon_prefix" class="validate" >
       <label for="icon_prefix">帳號</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
       <i class="material-icons prefix">lock</i>
       <input type="password" name="password"id="icon_prefix" class="validate" >
       <label for="icon_prefix">密碼</label>
      </div>
    </div>

     
    <a href=".\register.php">   
    <div class="left grey-text text-darken-1 " > 忘記密碼</div>
    </a>
    　<input type="submit" class=" waves-light btn right cyan lighten-2"  value="登入"/>

    



    </form>
  </div>

  </div>
    </div>
</body>

      
      <?php include("part/footer.php"); ?> 
