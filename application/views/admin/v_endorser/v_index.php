<?php if (isset($error)):?>
<div class="alert-danger">
    <?php echo $error?>
</div>
<?php  endif;?>

<?php if (isset($message)):?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $message?>
</div>
<?php  endif;?>

<?php if (isset($error_message)):?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $error_message?>
</div>
<?php  endif;?>
<div id="tours">
    <?php if (count($endorsers) > 0): ?>
        <table class="table table-striped">        
            <tbody>
                <?php foreach ($endorsers as $e): ?>
                    <tr>
                        <td> 
                            <img src="/uploads/<?php echo $e->image; ?>"> 
                        </td> 
                        <td> 
                            <?php echo $e->name; ?> 
                        </td>                    
                        <td>
                            <a class="" href="/admin/endorsers/item/<?php echo $e->id; ?>" title="edit">
                                <span class="glyphicon glyphicon-pencil">                                                           
                            </a>                      
                            <a class="text-danger" href="/admin/endorsers/delete/<?php echo $e->id; ?>" title="delete">
                                <span class="glyphicon glyphicon-trash">                                                          
                            </a>
                        </td>
                    </tr>    
                <?php endforeach; ?>
            </tbody>     
        </table>    
    <?php else: ?>
        <p>Еще ничего не добавлено.</p>
    <?php endif; ?>

    <br/>
    <br/>
    <a class="btn btn-primary" href="/admin/endorsers/item">Добавить</a>
</div> 
