<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tours extends ORM
{
    protected $_table_name = 'tours';
    
    public function getTours($id=NULL){
        
        $tours = array();
        
        $sql = "SELECT id, date, city, fest, club, event_link, image FROM tours";
        
        if($id){
            $sql .=' WHERE id=:id';
        }
        
        $sql .= ' order by date';
        
        
        $res = DB::query(Database::SELECT,$sql);
        
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
    
    public function processTour($date,$city,$fest,$club,$event_link,$image,$id=NULL){
        
        try {          
            
            $d = explode('-',$date);
            
            if(isset($id)){
               
                $sql = "UPDATE tours SET date=:date, city=:city, fest=:fest, club=:club, event_link=:event_link, image=:image WHERE id= :id";
                
                DB::query(Database::UPDATE, $sql)
                         ->param(':date',mktime(0,0,0,$d[1],$d[0],$d[2]))
                        ->param(':city',$city)
                        ->param(':fest',$fest)
                        ->param(':club',$club)
                        ->param(':event_link', $event_link)
                        ->param(':id',$id)
                        ->param(':image',$image)
                        ->execute();
                
            }
            else
            {    
                 
                $sql = "INSERT INTO tours (date, city, fest, club, event_link, image) VALUES (:date, :city, :fest, :club, :event_link, :image)";
            
                DB::query(Database::INSERT, $sql)
                        ->param(':date',mktime(0,0,0,$d[1],$d[0],$d[2]))
                        ->param(':city',$city)
                        ->param(':fest',$fest)
                        ->param(':club',$club)
                        ->param(':event_link', $event_link)
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

            DB::query(Database::DELETE,$sql)
                    ->param(':id',$id)
                    ->execute();
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }
        return true;
        
    }
}



