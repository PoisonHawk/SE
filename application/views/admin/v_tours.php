
<div id="tours">
    <?php if(isset($tours)):?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Дата</th>
                <th>Город</th>
                <th>Фестиваль</th>
                <th>Клуб</th>
            </tr>
         </thead>
         <tbody>
            
                <?php foreach($tours as $tour):?>
                <tr>
                    <td> 
                        <?php echo $tour['id'];?> 
                    </td>
                    <td>
                        <?php echo date("d.m.Y",$tour['date']);?>   
                    </td>
                    <td>
                        <a href=""><?php echo $tour['city'];?></a>    
                    </td>
                    <td>
                        <a href=""><?php echo $tour['fest'];?></a>    
                    </td>
                    <td>
                        <a href=""><?php echo $tour['club'];?></a>    
                    </td>
                    <td>
                        <a class="btn btn-warning" href="/admin/tours/processtour/<?php echo $tour['id'];?>"><i class="icon-edit"></i>Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/admin/tours/delete/<?php echo $tour['id'];?>">Delete</a>
                    </td>
                </tr>    
                <?php endforeach;?>
            <?php else:?>
                <p>Нет предстоящих концертов</p>
            <?php endif;?>
        </tbody>     
    </table>    
        <br/>
        <br/>
    <a class="btn btn-success" href="/admin/tours/processtour">Добавить концерт</a>
</div> 
<?php if(isset($errors)):?>
    <?php foreach($errors as $e):?>
        <p><?php echo $e; ?></p>
    <?php endforeach; ?>
<?php endif ;?>
