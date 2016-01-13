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
            
            <fieldset>
                <legend>Главная страница</legend>
                <div class='form-group'>
                    <?php echo Form::label('count_news', 'Количество новостей:') ?>        
                    <?php echo Form::select('count_news', $counts, $count_news, array('id' => 'count_news', 'class' => 'form-control')) ?>       
                </div>
            </fieldset>
            
            <fieldset>
                <legend>Cоциальные сети</legend>
                <div class='form-group'>
                    <?php echo Form::label('social_vk', 'Вконтакте:') ?>        
                    <?php echo Form::input('social_vk', $social_vk, array('id' => 'social_vk', 'class' => 'form-control')) ?>       
                </div>
                <div class='form-group'>
                    <?php echo Form::label('social_fb', 'Facebook:') ?>        
                    <?php echo Form::input('social_fb', $social_fb, array('id' => 'social_fb', 'class' => 'form-control')) ?>       
                </div>
                <div class='form-group'>
                    <?php echo Form::label('social_tw', 'Twitter:') ?>        
                    <?php echo Form::input('social_tw', $social_tw, array('id' => 'social_tw', 'class' => 'form-control')) ?>       
                </div>
                <div class='form-group'>
                    <?php echo Form::label('social_yt', 'Youtube:') ?>        
                    <?php echo Form::input('social_yt', $social_yt, array('id' => 'social_yt', 'class' => 'form-control')) ?>       
                </div>
            </fieldset>

            <div class="form-group">
                <?php echo Form::submit('send', 'Сохранить', array('class' => 'btn btn-primary')) ?>
            </div>
        </form>        
    </div>

