<?php
    // start app
    require_once 'app\App.php';
    App::start();
    // start обработчик формы
    require_once 'app\Router.php';
?>




<div class="profile">
    <?php
        if($_SESSION['is_auth'] == 1){
            echo $_SESSION['name'];
        }
    ?>
</div>
<a href="logout.php" class="leave">
    <?php
        if($_SESSION['is_auth'] == 1){
            echo 'Выйти';
        }
    ?>
</a>
<!-- form -->
<?php
    if($_SESSION['is_auth'] == 0){
        ?>
        <form class="form" method="POST">
            <input type="text" class="form__input" name="name" placeholder="Введите имя" value="<?php echo $_SESSION['name']; ?>">
            <input type="text" class="form__input" name="password" placeholder="Введите пароль" value="<?php echo $_SESSION['password']; ?>">
            <input type="submit" class="type" value="Войти">
            <div>
                Нет аккаунта? <a href="register_page.php">Зарегистрироваться?</a>
            </div>
        </form>
    <?php }
?>








<style>
    .profile, .leave{
        text-align: right;
        display: block;
    }
</style>