
<div id="news" class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Last Login</th>
            </tr>
         </thead>
         <tbody>
            <?php if(isset($users)):?>
                <?php foreach($users as $user):?>
                <tr>
                    <td><?php echo $user->username;?></td>
                    <td><?php echo $user->email;?></td>
                    <td>
                        <?php 
                        
                            $roles = array();
                        
                            foreach($user->roles->find_all() as $role) {
                                $roles[] = $role->name;
                            }                        
                            
                            echo implode(', ', $roles);
                        ?>  
                    </td>
                    <td><?php echo date('d.m.Y H:i:s', $user->last_login);?></td>
<!--                    <td>
                        <a class="btn btn-warning" href="/admin/users/item/<?php //echo $user->id;?>"><i class="icon-edit"></i>Edit</a>
                    </td>-->
                    <td>
                        <a class="btn btn-danger" href="/admin/users/remove/<?php echo $user->id;?>">Delete</a>
                    </td>
                </tr>    
                <?php endforeach;?>
            <?php else:?>
                <p>нет пользователей</p>
            <?php endif;?>
        </tbody>     
    </table> 
        
    <a class="btn btn-success" href="/admin/users/user">Создать пользователя</a>
    
</div>    




