<!DOCTYPE html>
<html>
<head>
  <title>School Hack and Programers</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/icomoon/style.css">

</head>
<body >
 
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Hack and Programers</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link  " href="<?php  echo base_url(); ?> "><span class="icon-home"></span> Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link  " href="<?php  echo base_url(); ?> "><span class="icon-home"></span> Sobre S.P.H<span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Pentesting</a>
          <a class="dropdown-item" href="#">Capacitaci&oacuten</a>
          <a class="dropdown-item" href="#">Dise&ntildeo Web</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Libros</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Soluciones de Seguridad
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">F-Secure</a>
          <a class="dropdown-item" href="#">EndPoint Protecter</a>
        </li>

       <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>contacto"><span class="icon-mail-envelope-closed"></span>Contactanos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>usuarios/login"><span class="icon-lock-stripes"></span>Inicio Sesion</a>
      </li>

      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="icon-search1"></span></button>
    </form>
  </div>

</nav>
	