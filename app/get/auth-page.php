<form class="form" method="POST" action="auth">
    <input type="text" class="form__input" name="name" placeholder="Введите имя" value="<?php echo $_SESSION['name']; ?>">
    <input type="text" class="form__input" name="password" placeholder="Введите пароль" value="<?php echo $_SESSION['password']; ?>">
    <input type="submit" class="type" value="Войти">
    <div>
        Нет аккаунта? <a href="register_page.php">Зарегистрироваться?</a>
    </div>
</form>