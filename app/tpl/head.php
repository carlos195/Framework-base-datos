<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
    <script src="<?= APP_W.'pub/js/jquery.min.js'; ?>"></script>
    <script src="<?= APP_W.'pub/js/app.js'; ?>"></script>
</head>
<body>
	<header>
		<div id="title">
			<h1><?= $title; ?></h1>
		</div>
		<div id="form-login">
		<form action="home/login" method="POST" >
			<label for="email">Login </label><input type="text" id="form-email" name="email" /><br/>
			<label for="password">Password </label><input type="password" id="form-password" name="password" /><br/>
			<input type="submit" id="login" value="Enviar" />
		</form>
		</div>
	</header>
	
