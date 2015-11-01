<?php

class Model_Video extends ORM{

    
    public function rules(){
        return array(
            'title' => array(
                array('not_empty'),
            ),
            'link' => array(
                array('not_empty'),
                array('regex', array(':value', '/^https:\/\/youtu.be\/[a-zA-z0-9-]*$/')),
//                array('Model_Video::check', ':value'),
            )
        );
    }
    
    public function filters(){
        return array(
            'title' => array(
                array('trim'),
            ),
            'link' => array(
                array('trim'),
            )
        );
    }
    
    
    public static function checkUrl($value){
        
        return true;
    }
    
}

