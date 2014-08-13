<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends Model
{
    public function getNews($id=NULL)
    {
        $news = array();
        
        $sql = "SELECT id, date, title, description FROM news";
        
        if(isset($id))
        {
            $sql .= " WHERE id=:id";
        }
        else{
            $sql .= " ORDER BY date DESC";
        }
        $res = db::query(Database::SELECT, $sql);
        
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

            db::query(Database::DELETE,$sql)
                    ->param(':id',$id)
                    ->execute();
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }
        return true;
        
    }
    
    
    //удаление или редактирование новости
    public function processNew($title,$desc,$id=NULL){        
        if(isset($id)){
            
            $sql = "UPDATE news SET title = :title, description = :desc WHERE id=:id";
            
            db::query(Database::UPDATE, $sql)                   
                    ->param(':title',$title)
                    ->param(':desc',$desc)
                    ->param(':id',$id)
                    ->execute();
        }
        else
        {        
            $sql = "INSERT INTO news (date,title,description) VALUES(:date,:title,:description)";       

            $res = db::query(Database::INSERT, $sql)
                    ->param(':date',time())
                    ->param(':title',$title)
                    ->param(':description',$desc)       
                    ->execute();
        }
        
    }
    
    
}

