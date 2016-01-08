<?php

class HTTP_Exception_404 extends Kohana_HTTP_Exception_404 {
 
    /**
     * Generate a Response for the 404 Exception.
     *
     * The user should be shown a nice 404 page.
     * 
     * @return Response
     */
    public function get_response()
    {
        if (Kohana::$environment >= Kohana::DEVELOPMENT){
            return parent::get_response();            
        } else {

            $view = View::factory('errors/404');
            
            //social
        //vk
        $sql = 'select value from settings where name = \'social_vk\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_vk = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_vk = $social_vk;
        
        //fb
        $sql = 'select value from settings where name = \'social_fb\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_fb = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_fb = $social_fb;
        
        //tw
        $sql = 'select value from settings where name = \'social_tw\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_tw = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_tw = $social_tw;
        
        //yt
        $sql = 'select value from settings where name = \'social_yt\'';

        $res = DB::query(1, $sql)->execute()->as_array();

        $social_yt = isset($res[0]['value']) ? $res[0]['value'] : '';
        $view->social_yt = $social_yt;
            
            
            // Remembering that `$this` is an instance of HTTP_Exception_404
            $view->message = $this->getMessage();

            $response = Response::factory()
                ->status(404)
                ->body($view->render());

            return $response;
        }
    }
}
