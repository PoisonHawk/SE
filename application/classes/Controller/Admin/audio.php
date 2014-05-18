<?php

class Controller_Admin_Audio extends Controller_Admin_Base{
    
    public function action_index(){
        
        $a = new Model_Albums();
        $albums = $a->getAlbums();
      
        $content = View::factory('admin/v_audio');
        
        $content->albums = $albums;
        $this->template->content = $content;
    }
    
    public function action_albums(){
        
        $view = new View('admin/v_albums');
        if($this->request->method() === Request::POST and isset($_POST['upload'])){
       
            if (isset($_FILES['image_album']))
            {
                $filename = $this->_save_image($_FILES['image_album']);
                $view->filename = $filename;
            }
            
            if ( ! $filename)
            {
                $error_message = 'There was a problem while uploading the image.
                    Make sure it is uploaded and must be JPG/PNG/GIF file.';
                $view->errors = $error_message;
            }
        }
        
        if($this->request->method() === Request::POST and isset($_POST['save'])){
            
            $title = arr::get($_POST,'title_album');
            $year = arr::get($_POST,'year');
            $img = isset($filename) ? $filename : '';
            
            $album = new Model_Albums();            
            $res = $album->setAlbum($title,$year,$img);
            
            $id=$res[0];
            
           
            $count = arr::get($_POST,'count');
            
            for($i=1;$i<$count;$i++){
                 $audio = new Model_Audio();
                $audio->name = arr::get($_POST,'title_track_'.$i);
                $audio->album_id =$id;
                $audio->save();
            }   
            
        }
        
        
        
        $this->template->content = $view;
        
    }
    
    protected function _save_image($image){
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'uploads/';
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = strtolower(Text::random('alnum', 20)).'.jpg';
 
            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
 
            return $filename;
        }
 
        return FALSE;
    }
    
}

