<?php

class Model_Audio extends ORM{
    
    protected $_table_name = 'audio';
    
    protected  $_table_columns = array(
        'id'        =>  'id',
        'name'      =>  'name',
        'album_id'  =>  'album_id',
        'num'       =>  'num'
    );
    
    
    public function getAudio($id){
        
        try{
            $sql = "SELECT name, num FROM audio WHERE album_id =:id";

            return db::query(Database::SELECT, $sql)
                    ->param(':id',$id)
                    ->execute();
                
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }
    
    public function saveAudio(){
        
    }
    
    
}
