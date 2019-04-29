<?php session_start(); /* Starts the session */
/* THIS WAS A ADAPTED FROM A TUTORIAL FROM W3SCHOOLS */
if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>UoD Computing Degree Show</title> <!-- this header displays on the tab-->
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
</head>
<body>

	You have successfully logged in. To access the database then <a href="http://localhost:8888/phpMyAdmin/?lang=en">Click here</a><br>
	<a href="logout.php">Click here</a> to Logout.

</body>
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
</html>
