<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UoD Computing Degree Show</title>
    <!-- linking the style sheets for bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <header>
    <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.html">UoD Computing Degree Show 2019</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="students.html">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projects.html">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
    </div>
  </nav>
  </header>

  <body>
    <?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>
    <form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>


<!-- scripts for jquery and javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
  <!-- Footer -->
<footer class="page-footer">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> Iain MacDonald</a>
  </div>
  <!-- Copyright -->
</html>
