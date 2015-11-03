</script>    
<?php if (isset($errors)): ?>
    <?php foreach ($errors as $e): ?>
        <div class="alert alert-danger" role="alert"><?php echo $e; ?></div>        
    <?php endforeach; ?>
<?php endif; ?>


<div class="row">
    <div class="col-md-8">
        <form method="post" class="col-lg-6 form-horizontal" role="form" enctype="multipart/form-data" >
            <fieldset>
                <legend>Контактная информация</legend>
                <div class='form-group'>
                    <?php echo Form::label('phone', 'Контактный телефон:') ?>        
                    <?php echo Form::input('phone', $phone, array('id' => 'phone', 'class' => 'form-control')) ?>       
                </div>

                <div class='form-group'>
                    <?php echo Form::label('mail', 'Контактный email:') ?>
                    <?php echo Form::input('mail', $mail, array('id' => 'mail', 'class' => 'form-control')) ?>       
                </div>
            </fieldset>

            <div class="form-group">
                <?php echo Form::submit('send', 'Сохранить', array('class' => 'btn btn-primary')) ?>
            </div>
        </form>
    </div>

