
<div id="news" class="container">
    <table class="table table-striped">
        <thead>
            <tr>                
                <th><span class="glyphicon glyphicon-calendar"></span> Date</th>
                <th>Title</th>
            </tr>
         </thead>
         <tbody>
            <?php if(isset($news)):?>
                <?php foreach($news as $new):?>
                <tr>                    
                    <td>
                        <?php echo date("d.m.Y",$new->date);?>   
                    </td>
                    <td>
                        <a href=""><?php echo $new->title;?></a>    
                    </td>
                    <td>
                        <a class="" href="/admin/news/processnew/<?php echo $new->id;?>" title="edit"><span class="glyphicon glyphicon-pencil"></span></a>
                        
                        <a class="text-danger" href="/admin/news/delete/<?php echo $new->id;?>" title="delete"><span class="glyphicon glyphicon-trash"></a>
                    </td>
                </tr>    
                <?php endforeach;?>
            <?php else:?>
                <p>Новостей нет</p>
            <?php endif;?>
        </tbody>     
    </table>    
        <br/>
        <br/>
    <?php echo $pagination; ?>
        <br>
        <br>
        
    <a class="btn btn-success" href="/admin/news/processnew">Добавить новость</a>
    
</div>    




