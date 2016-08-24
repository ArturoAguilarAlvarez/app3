	<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
	  <title>Sistema de Gestión</title>
    <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>reset.css" media="screen,projection" charset="utf-8">
    <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>trunk.css" media="screen,projection" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <script type="text/javascript">
  if (typeof jQuery == 'undefined')
    document.write(unescape("%3Cscript src='<?php echo APP_URL_JS; ?>jquery-1.9.js'" + 
                              "type='text/javascript'%3E%3C/script%3E"))
</script>
<script type="text/javascript" language="javascript" src="<?php echo APP_URL_JS; ?>trunk.js"></script>

</head>
<body>
	<header class="slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
			<li></li><li></li><li></li>
		</ul>
		<h1>Trunk.js</h1>
	</header>

	<nav class="slide">
		<ul>
      <li><a href="<?php echo APP_URL; ?>transactions">Transacciones</a></li>
			<li><a href="<?php echo APP_URL; ?>categories">Categorias </a></li>
      <li><a href="<?php echo APP_URL; ?>accounts">Cuentas</a></li>
      <li><a href="<?php echo APP_URL; ?>users">Usuario</a></li>
      <li class="col l2"><a href="<?php echo APP_URL; ?>users/logout">Cierra sesión<i></i></a></li>
		</ul>
	</nav>
        <br><br><p>HOLA MUNDO</p>
  <div class="content slide">     <!--  Add "slideRight" class to items that move right when viewing Nav Drawer  -->
    <ul class="responsive">
      <li class="body-section">
