<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends ORM
{
    protected $_table_name = 'news';
    
    public function getNews($id=NULL)
    {
        $news = array();
        
        $sql = "SELECT id, date, title, description, image FROM news";
        
        if(isset($id))
        {
            $sql .= " WHERE id=:id";
        }
        else{
            $sql .= " ORDER BY date DESC";
        }
        $res = DB::query(Database::SELECT, $sql);
        
        if(isset($id))
        {
            $res = $res->param(':id',$id);
        }
                
        
        $res = $res->execute();
        
        if(!empty($res)){
            foreach ($res as $r)
            {
                $news[] = $r;
            }
        } 
        
        return $news;
    }
    
    
    //удаление новости
    public function delNew($id){       
        
        try{
            $sql = "DELETE FROM news WHERE id=:id";

            DB::query(Database::DELETE,$sql)
                    ->param(':id',$id)
                    ->execute();
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }
        return true;
        
    }
    
    
    //удаление или редактирование новости
    public function processNew($title,$desc, $image=NULL, $id=NULL){        
        if(isset($id)){
            
            $sql = "UPDATE news SET title = :title, description = :desc";
            if($image) {
                $sql .= ", image=:image";
            }
            
            $sql .= "WHERE id=:id";
            
            DB::query(Database::UPDATE, $sql)                   
                    ->param(':title',$title)
                    ->param(':desc',$desc)
                    ->param(':image', $image)
                    ->param(':id',$id)
                    ->execute();
        }
        else
        {        
            $sql = "INSERT INTO news (date,title,description) VALUES(:date,:title,:description)";       

            $res = DB::query(Database::INSERT, $sql)
                    ->param(':date',time())
                    ->param(':title',$title)
                    ->param(':description',$desc)       
                    ->execute();
        }
        
    }
    
    
}

