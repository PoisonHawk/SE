<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/admin/admin_styles.css"/>
    </head>
<body>
<main>    
    <h2>Авторизация</h2>
    <?php if(isset($errors)):?>
    <p><?php echo $errors;?></p>
    <?php endif;?>
    <form id="auth_form" method="POST" >
        <label>
            <input type="text" name="login" id="login" placeholder="login">
        </label></br>
        <label>
            <input type="password" name="password" id="password" placeholder="password">
        </label></br>
        <input type="submit" value="Войти">
    </form>
</main>
</body>
</html>