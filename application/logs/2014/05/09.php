<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-09 23:20:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Konaha' not found ~ APPPATH\classes\Controller\Base.php [ 12 ] in file:line
2014-05-09 23:20:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-09 23:20:34 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_layout.php [ 78 ] in X:\home\sympulse\application\views\v_layout.php:78
2014-05-09 23:20:34 --- DEBUG: #0 X:\home\sympulse\application\views\v_layout.php(78): Kohana_Core::error_handler(2, 'Invalid argumen...', 'X:\home\sympuls...', 78, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_index))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\v_layout.php:78