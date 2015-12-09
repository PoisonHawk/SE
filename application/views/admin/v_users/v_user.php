   
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif; ?>


<div class="row">
    <div class="col-md-8">
        <form method="post" class="col-lg-12 form-horizontal" role="form" enctype="multipart/form-data" >

            <div class='form-group'>
                <?php echo Form::label('username', 'Username:') ?>        
                <?php echo Form::input('username', $user->username, array('id' => 'username', 'class' => 'form-control')) ?>       
            </div>
            
            <div class='form-group'>
                <?php echo Form::label('password', 'password:') ?>        
                <?php echo Form::password('password', $user->email, array('id' => 'password', 'class' => 'form-control')) ?>       
            </div>
            
            <div class='form-group'>
                <?php echo Form::label('email', 'Email:') ?>        
                <?php echo Form::input('email', $user->email, array('id' => 'email', 'class' => 'form-control')) ?>       
            </div>
            
            <div class='form-group'>
                <?php echo Form::label('role', 'Role') ?>
                <br>
                <?php echo Form::select('role', array('login'=> 'login', 'admin'=>'admin'), null , array('id' => 'role', 'class' => 'form-control')) ?>

            </div>

            <div class='form-group'>
                <?php echo Form::submit('save', 'Сохранить', array('class' => 'btn btn-primary')) ?>    
            </div>   
        </form>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">Пользователи</div>
            <div class="panel-body">
                <ul>
                <?php foreach ($users as $user):?>
                    <li><a href="/admin/users/user/<?php echo $user->id?>"><?php echo $user->username?></li>
                <?php endforeach?>
                    <li><a href="/admin/users/user/">Добавить</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


