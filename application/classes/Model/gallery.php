<?php defined('SYSPATH') or die('No direct script access.');

class Model_Gallery extends ORM
{
    protected $_table_name = 'gallery';
    
    protected  $_table_columns = array(
        'id'            => 'id',
        'title'          =>  'title',        
        'image'     =>  'image',
    );
}    
   
    
    
    
