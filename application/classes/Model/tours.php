<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tours extends Model
{
    public function getTours($id=NULL){
        
        $tours = array();
        
        $sql = "SELECT id, date, city, fest, club, image FROM tours";
        
        if($id){
            $sql .=' WHERE id=:id';
        }
        
        
        $res = db::query(Database::SELECT,$sql);
        
        if($id){
            
            $res->param(':id',$id);
        }
        
        
        $res = $res->execute();
        
        if(!empty($res)){
            foreach ($res as $r)
            {
                $tours[] = $r;
            }
        }
        
        return $tours;
                
    }
    
    public function processTour($date,$city,$fest,$club,$image,$id=NULL){
        
        try {          
            
            $d = explode('-',$date);
            
            if(isset($id)){
               
                $sql = "UPDATE tours SET date=:date, city=:city, fest=:fest, club=:club, image=:image WHERE id= :id";
                
                db::query(Database::UPDATE, $sql)
                         ->param(':date',mktime(0,0,0,$d[1],$d[0],$d[2]))
                        ->param(':city',$city)
                        ->param(':fest',$fest)
                        ->param(':club',$club)
                        ->param(':id',$id)
                        ->param(':image',$image)
                        ->execute();
                
            }
            else
            {    
                 
                $sql = "INSERT INTO tours (date, city, fest, club, image) VALUES (:date, :city, :fest, :club, :image)";
            
                db::query(Database::INSERT, $sql)
                        ->param(':date',mktime(0,0,0,$d[1],$d[0],$d[2]))
                        ->param(':city',$city)
                        ->param(':fest',$fest)
                        ->param(':club',$club)
                        ->param(':image', $image)
                        ->execute();
            } 
        } catch (Exception $e) {
             throw new Exception ($e->getMessage());
        }
    }
    
    
    //удаление новости
    public function delTour($id){       
        
        try{
            $sql = "DELETE FROM tours WHERE id=:id";

            db::query(Database::DELETE,$sql)
                    ->param(':id',$id)
                    ->execute();
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }
        return true;
        
    }
}



