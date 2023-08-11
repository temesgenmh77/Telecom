<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="bgimage.png">
<div class="container">
<header>
  <img src="logo.png" height="100" width="100%">
</header>
 <menu>
  <ul>
      
          <h1>Login and go to home page!</h1>
  </ul>
 </menu> 
<nav>
  <ul>
    Additional Links
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 1</a></li>
  </ul>
</nav>
<article>
  <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>User
                            Login</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Username</td>
                            <td width="6">:</td>
                            <td width="294"><input id="username" name="username" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="password" type="password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value="Login"> <input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <?php
    if (isset($_POST['submit']))
        {     
    include("connect.php");
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password =md5($password);
    $_SESSION['login_user']=$username;
    $query = mysql_query("SELECT * FROM user_account WHERE Username='$username' and password='$password'");
     if (mysql_num_rows($query) != 0)
    {
      while($res = mysql_fetch_array($query, MYSQL_ASSOC)){
        $_SESSION['handler'] = $res['Full_name'];
        $_SESSION['role'] = $res['role'];
        $role =$res['status'];
        if ($role=="Enable"){ 
          header('location: homme.php'); 
        }
        else{
          echo "<script type='text/javascript'>alert('We are sorry your account is disabled contact Adminstrator!')</script>";
          header('location :index.php');        
        }
      } 
    }
      else
      {
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
      }
    }
    ?>
  </article>
<footer>Copyright &copy; ethiotelecom.et</footer>
</div>
</body>
</html>
