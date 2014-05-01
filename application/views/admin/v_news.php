
<div id="news">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Title</th>
            </tr>
         </thead>
         <tbody>
            <?php if(isset($news)):?>
                <?php foreach($news as $new):?>
                <tr>
                    <td> 
                        <?php echo $new['id'];?> 
                    </td>
                    <td>
                        <?php echo date("d.m.Y",$new['date']);?>   
                    </td>
                    <td>
                        <a href=""><?php echo $new['title'];?></a>    
                    </td>
                    <td>
                        <a class="btn btn-warning" href="/admin/news/processnew/<?php echo $new['id'];?>"><i class="icon-edit"></i>Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/admin/news/delete/<?php echo $new['id'];?>">Delete</a>
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
    <a class="btn btn-success" href="/admin/news/processnew">Добавить новость</a>
</div>    




