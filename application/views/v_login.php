<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/admin/admin_styles.css"/>
        <link href="/css/bootstrap.css" rel="stylesheet">
    </head>
<body>

<div class="container">    
    
    
    <form id="auth_form" method="POST" class="form-signin">
        <h2 class="form-signin-heading">Авторизация</h2>
        <?php if(isset($errors)):?>
            <p class="text-error"><?php echo $errors;?></p>
        <?php endif;?>
        <label>Login
            <input type="text" name="login" id="login" class="input-block-level form-control" placeholder="Enter your login">
        </label></br>
        <label>Password
            <input type="password" name="password" id="password" class="input-block-level form-control" placeholder="Enter your password">
        </label></br>
        <input class="btn btn-large btn-primary span-3" type="submit" value="Войти">
    </form>
</div>    
<script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery-ui-1.10.4.custom.js"></script>
</body>
</html>