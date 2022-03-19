<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_SESSION['id']; ?></title>
    <link href="/Projetsactuels/router/views/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI Pro -->
    <link href="/Projetsactuels/router/views/css/flat-ui-pro.css" rel="stylesheet">
</head>
<style>

</style>
<body>

<?php include 'navbar.php'; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<div class="container" align="center">


<h1>Bienvenue <span class="text-danger"><?php echo $_SESSION['id']; ?> </span></h1>
<hr>
<a href="modifyprofile" class="btn btn-primary btn-hg">Modifier son profil</a>
<a href="logout" class="btn btn-danger btn-hg">Déconnexion</a>



</div>


</body>
</html>