<?php defined('SYSPATH') or die('No direct script access.');

class Model_Gallery extends ORM
{
    protected $_table_name = 'gallery';
    
    public function rules(){
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'category' => array(
                array('not_empty'),
            )
        );
    }
    
    public function filters() {
        return array(
            'title' => array(
                array('trim'),
                
            ), 
            'description' => array(
                array('trim'),
                array('strip_tags'),
                array('htmlspecialchars'),
                
            )
        );
    }
    

}    
   
    
    
    
