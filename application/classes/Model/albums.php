<?php defined('SYSPATH') or die('No direct scripts access.');

class Model_Albums extends Model{
    
    public function getAlbums(){
        
        $sql = "SELECT id, name, year, image FROM albums";
        
        try{
            $res = db::query(DATABASE::SELECT,$sql)
                    ->execute()
                    ->as_array();
                    
            return $res;
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage());
        }
        
        
    }
    
    
    public function setAlbum($name,$year,$image){
        
        $sql = "INSERT INTO albums (name, year, image) VALUES (:name, :year, :image)";
        
        try{
            
            return $res = db::query(Database::INSERT,$sql)
                        ->param(':name', $name)
                        ->param(':year', $year)
                        ->param(':image', $image)
                        ->execute();            
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage());
        }
        
        
    }
    
}

