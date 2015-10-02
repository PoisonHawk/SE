<?php defined('SYSPATH') or die('No direct scripts access.');

class Model_Albums extends ORM{
    
    protected $_table_name = 'albums';
    
    protected  $_table_columns = array(
        'id'        => 'id',
        'name'      =>  'name',
        'year'      =>  'year',
        'image'     =>  'image',
        'created'   =>  'created',
    );
    
    /*
     * Получает список альбомов
     */
    public function getAlbums(){
        
        $sql = "SELECT id, name, year, image FROM albums order by created desc";
        
        try{
            $res = DB::query(DATABASE::SELECT,$sql)
                    ->execute()
                    ->as_array();                  
            
        }
        catch(Exception $e)
        {
            throw new Exception($e->getMessage());
        }
        
        return $res;
    }
    
    
    public function setAlbum($name,$year,$image){
        
//        $sql = "INSERT INTO albums (name, year, image, created) VALUES (:name, :year, :image, :time)";
//        
//        try{
//            
//            return $res = DB::query(Database::INSERT,$sql)
//                        ->param(':name', $name)
//                        ->param(':year', $year)
//                        ->param(':image', $image)
//                        ->parma(':time', time())
//                        ->execute();            
//        }
//        catch(Exception $e)
//        {
//            throw new Exception($e->getMessage());
//        }
        
        
        $this->model->name = $name;
        $this->model->year = $year;
        $this->model->image = $image;
        $this->model->created = time();
        $this->model->save();
        
    }
    
}

