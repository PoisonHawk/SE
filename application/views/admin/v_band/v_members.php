

<table class="table">
    <thead>
    <th>#</th>
    <th>Название</th>
    <th>Алиас</th>
    <th>Вес</th>
    <th>Активен</th>
    </thead>
    <tbody>
    <?php $count = 1?>
    <?php if($members->count()>0):?>
        <?php foreach($members as $member):?>
        <tr>
            <td><?php echo $count++?></td>
            <td><?php echo $member->title?></td>
            <td><?php echo $member->alias?></td>
            <td><?php echo $member->weight?></td>
            <td><?php echo $member->active?></td>
            <td><a href="/admin/band/member/<?php echo $member->id?>">Редактировать</a></td>
        </tr>
        <?php endforeach;?>
    <?php else: ?>
    <td>Нет записей</td>
    <?php endif;?>
    </tbody>
    
</table>
<a href="/admin/band/member" class="btn btn-primary">Добавить</a>



