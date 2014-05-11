<?php defined('SYSPATH') or die('No direct scripts access.');

class Model_Albums extends Model{
    
    public function getAlbums(){
        
        $sql = "SELECT id, name, year FROM albums";
        
        try{
            $res = db::query(DATABASE::SELECT,$sql);
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage());
        }
    }
    
}

