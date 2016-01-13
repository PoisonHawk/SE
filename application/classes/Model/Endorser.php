<?php

class Model_Endorser extends ORM{
    
     public function filters(){
        return array(
            'name' => array(
                array('trim'),
            ),
            'link' => array(
                array('trim'),
            )
        );
    }
    
}

