<div id="audio" class="container1">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>

            <?php if (isset($albums)): ?>
                <?php foreach ($albums as $album): ?>
                    <tr>
                        <td> 
                            <?php echo $album['id']; ?> 
                        </td>
                        <td>
                            <img src="/uploads/<?php echo $album['image'] ?>" width="100" class="img-rounded">
                        </td>
                        <td>
                            <?php echo $album['name']; ?>   
                        </td>
                        <td>
                            <a class="btn btn-warning" href="/admin/audio/albums/<?php echo $album['id']; ?>"><i class="icon-edit"></i>Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="/admin/audio/delete/<?php echo $album['id']; ?>">Delete</a>
                        </td>
                    </tr> 

                <?php endforeach; ?>    
            <?php else: ?>
            </tbody>
        </table>    
        <p>Альбомов нет</p>
    <?php endif; ?>
    <br/>
    <br/>
    <a class="btn btn-success" href="/admin/audio/albums">Добавить альбом</a>
</div>
