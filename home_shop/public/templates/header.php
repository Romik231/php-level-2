<?php
session_start();
include "../models/functions.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="styles/site.css">
    <link rel="stylesheet" href="styles/style.css">
    
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="index.php">
                Главная
            </a>
            <a href="index.php?page=product">
                Магазин
            </a>
            <a href="basket.php">
                Корзина:
                <span class="basket">Корзина пуста</span>
            </a>
            <?php
            //Если существуют логин и пароль, то добавляем кнопку выход
                if(isset($_SESSION['login']) and isset($_SESSION['password'])){?>
                     <a href='index.php?action=exit' id='exit'><?php 
                     //Если перехватывается нажатие кнопки Выход, выходим из магазина
                    if($_GET['action'] == 'exit'){session_unset();}
                      ?>Выйти</a>;
                    }
            <?}?>
            
        </div>
    </div>
</header>
