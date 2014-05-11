<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-11 18:12:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_layout.php [ 4 ] in X:\home\sympulse\application\views\v_layout.php:4
2014-05-11 18:12:16 --- DEBUG: #0 X:\home\sympulse\application\views\v_layout.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 4, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\v_layout.php:4
2014-05-11 18:35:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_ISSET, expecting '(' ~ APPPATH\views\admin\v_audio.php [ 2 ] in file:line
2014-05-11 18:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-11 22:20:26 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Admin\audio.php [ 12 ] in X:\home\sympulse\application\classes\Controller\Admin\audio.php:12
2014-05-11 22:20:26 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\audio.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'X:\home\sympuls...', 12, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Audio->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Audio))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\audio.php:12