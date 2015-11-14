
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
                        <?php echo $tour['city'];?>    
                    </td>
                    <td>
                        <?php echo $tour['fest'];?>   
                    </td>
                    <td>
                        <?php echo $tour['club'];?> 
                    </td>
                    <td>
                        <a class="" href="/admin/tours/processtour/<?php echo $tour['id'];?>"><i class="icon-edit"></i>Редактировать</a>
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
    <a class="btn btn-primary" href="/admin/tours/processtour">Добавить концерт</a>
</div> 
