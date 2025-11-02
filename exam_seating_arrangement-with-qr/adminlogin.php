<?php
session_start();
include("include/dbconnect.php");
extract($_POST);
$msg="";
if(isset($login))
{
 if(trim($uname=="")) { $msg = "Enter the Username"; }
 else if(trim($pwd=="")) { $msg = "Enter the Password"; }
	 else
	 {
	$qry = "select * from admin where username='$uname' && password='$pwd' && type='admin'";
	$exe=mysql_query($qry);
	$num=mysql_num_rows($exe);
    if ($num == 1) {
        $_SESSION['uname'] = $uname;
        echo "<script>
                alert('Login successfull!..');
                window.location.href='admin/index.php';
              </script>";
    } else {
        $msg = "Login Incorrect!";
    }
    
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include("include/title.php"); ?></title>
    <link rel="stylesheet" type="text/css" href="assets/css/adminlogin.css">

</head>
<body>
<div class="container">

    <h2 class="login-title">Admin</h2>

    <form acttion="" class="login-form" method="post">
      <div>
        <label for="name">Username </label>
        <input
               id="name"
               type="text"
               placeholder="Username"
               name="uname"
               required
               />
      </div>

      
      <div>
        <label for="password">Password </label>
        <input
               id="password"
               type="password"
               placeholder="Password"
               name="pwd"
               required
               />
      </div>

      <button class="btn btn--form" name="login" type="submit" value="Log in">
        Log in
      </button>
    </form>
    <br>
    <span style="color:red"><?php echo $msg;?></span>

</div>
</body>
</html>