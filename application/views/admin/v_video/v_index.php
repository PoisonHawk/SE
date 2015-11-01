
<div id="news" class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>                
                <th>Title</th>
                <!--<th>Date</th>-->
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($videos) > 0): ?>
                <?php foreach ($videos as $video): ?>
                    <tr>
                        <td> 
                            <?php echo $video->id; ?> 
                        </td>
                        <td>
                            <a href=""><?php echo $video->title; ?></a>    
                        </td>
<!--                        <td>
                            <?php echo $video->created ?>   
                        </td>-->
                        <td>
                            <?php echo $video->category ?>   
                        </td>
                        <td>
                            <a class="btn btn-warning" href="/admin/video/item/<?php echo $video->id; ?>"><i class="icon-edit"></i>Edit</a>
                        </td>
<!--                        <td>
                            <a class="btn btn-danger" href="/admin/vidoe/delete/<?php echo $video->id; ?>">Delete</a>
                        </td>-->
                    </tr>    
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align: center">Еще не добавлено ни одного видео</td>
                </tr>
            <?php endif; ?>
        </tbody>     
    </table>    
    <br/>
    <?php echo $pagination; ?>
    <br>

    <a class="btn btn-success" href="/admin/video/item">Добавить видео</a>

</div>    




