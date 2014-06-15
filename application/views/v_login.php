<h2>Авторизация</h2>
<?php if(isset($errors)):?>
<p><?php echo $errors;?></p>
<?php endif;?>
<form method="POST">
    <label>
        <input type="text" name="login" id="login" placeholder="login">
    </label></br>
    <label>
        <input type="password" name="password" id="password" placeholder="password">
    </label></br>
    <input type="submit" value="Войти">
    <label>