<?php
session_start();
include('includes/config.php');

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header('Location: register.php');
}
?>

<!DOCTYPE html>
<html >
<head>
<title>Проспект </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="assets/css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="assets/css/images/favicon.ico" />
<script type="text/javascript" src="assets/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="assets/js/func.js"></script>
</head>
<body>
<div class="shell">
  <div class="border">
    <div id="header">
      <h1 id="logo">Агентство недвижимости "Проспект"</a></h1>
      <div class="socials right">
        <ul>
          <li>Телефон:+79025682020, +7(3955)650945</a></li>
          <li>Адрес: г.Ангарск, мкр-н 7, дом 1, офис 2 (по ул.Коминтерна)</li>
          <li class="last">e-mail: an_prospekt_2011@mail.ru</li>
        </ul>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div id="navigation">
      <ul>
       <li><a href="index.php" class="active">Главная</a></li>
        <li><a href="compan.php">О компании</a></li>
        <li><a href="yslygi.php">Услуги</a></li>
        <li><a href="onbject.php">Каталог объектов</a></li>
        <li><a href="sotryd.php">Сотрудники</a></li>
        <li><a href="partner.php">Партнеры</a></li>
      </ul>
      <div class="cl">&nbsp;</div>
    </div>