<?php
include "templates/header.php"
?>
  <div id="content">

<div class=products>
   
    <?php 
    include "../config/config.php";
    
    ?>     

    <?
    if(!isset($_SESSION['login']) and !isset($SESSION['password'])){
        echo "<div class='forms'>
                <div id='authorization' >
                    <form action='auth.php' method='POST'>Форма авторизации:<br><br>
                        <label for='login'>Ваш логин</label><br>
                        <input type='text' name='login' required><br>
                        <label for='password'>Ваш пароль</label><br>
                        <input type='pass' name='password' required><br>
                        <input type='submit' name='submitenter' value='Войти!''>
                    </form>
                </div>

                <h3>Для входа в магазин необходимо авторизоваться</h3>

                <div id='registartion'>
                    <form  action='registration.php' method='POST'>Форма регистрации:<br><br>
                        <label for='login'>Ваш логин</label><br>
                        <input type='text' name='login' require><br>
                        <label for='password'>Ваш пароль</label><br>
                        <input type='password' name='password' required><br>
                        <label for='email'>Ваш email</label><br>
                        <input type='email' name='email' required><br>
                        <input type='submit' name='submitreg' value='Зарегистрироваться'>
                    </form>
                </div>
            </div>";
    }else{
        echo "<h3 class='welcome' style='text-align:center;width:100%;'>Добро пожаловать в наш интернет-магазин</h3>";

    }
    include "product.php";
    ?>
    </div>
</div> 
<?php
include"templates/footer.php"
?>