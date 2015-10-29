<?php

class Model_Page extends ORM{
    
    public function rules(){
        return array(
            'title' => array(
                array('max_length', array(':value', 255)),
                array('not_empty'),
            ),
            'alias' => array(
                array('regex', array(':value', '/[a-zA-Z-_]*/')),
                array('not_empty'),
                
            )
        );
    }
    
    public function filters() {
        return array(
            'title' => array(
                array('trim'),
                
            ),
            'alias' => array(
                array('trim'),
               
            )
        );
    }
    
}

