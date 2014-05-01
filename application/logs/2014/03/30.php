<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-30 18:57:51 --- CRITICAL: View_Exception [ 0 ]: The requested view views/v_layout.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 18:57:51 --- DEBUG: #0 X:\home\sympulse\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('views/v_layout....')
#1 X:\home\sympulse\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('views/v_layout....', NULL)
#2 X:\home\sympulse\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('views/v_layout....')
#3 X:\home\sympulse\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 X:\home\sympulse\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 18:58:06 --- CRITICAL: View_Exception [ 0 ]: The requested view ../views/v_layout.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 18:58:06 --- DEBUG: #0 X:\home\sympulse\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('../views/v_layo...')
#1 X:\home\sympulse\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('../views/v_layo...', NULL)
#2 X:\home\sympulse\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('../views/v_layo...')
#3 X:\home\sympulse\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 X:\home\sympulse\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 18:58:33 --- CRITICAL: View_Exception [ 0 ]: The requested view ../../views/v_layout.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 18:58:33 --- DEBUG: #0 X:\home\sympulse\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('../../views/v_l...')
#1 X:\home\sympulse\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('../../views/v_l...', NULL)
#2 X:\home\sympulse\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('../../views/v_l...')
#3 X:\home\sympulse\www\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 X:\home\sympulse\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 19:00:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Controller\Base.php [ 5 ] in file:line
2014-03-30 19:00:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-30 19:06:52 --- CRITICAL: View_Exception [ 0 ]: The requested view v_index.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 19:06:52 --- DEBUG: #0 X:\home\sympulse\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('v_index.php')
#1 X:\home\sympulse\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('v_index.php', NULL)
#2 X:\home\sympulse\www\application\classes\Controller\Index.php(7): Kohana_View::factory('v_index.php')
#3 X:\home\sympulse\www\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 X:\home\sympulse\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\www\system\classes\Kohana\View.php:137
2014-03-30 19:07:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_layout.php [ 4 ] in X:\home\sympulse\www\application\views\v_layout.php:4
2014-03-30 19:07:05 --- DEBUG: #0 X:\home\sympulse\www\application\views\v_layout.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 4, Array)
#1 X:\home\sympulse\www\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 X:\home\sympulse\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\www\application\views\v_layout.php:4
2014-03-30 19:36:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: description ~ APPPATH\views\v_index.php [ 8 ] in X:\home\sympulse\www\application\views\v_index.php:8
2014-03-30 19:36:36 --- DEBUG: #0 X:\home\sympulse\www\application\views\v_index.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 8, Array)
#1 X:\home\sympulse\www\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\www\application\views\v_layout.php(19): Kohana_View->__toString()
#5 X:\home\sympulse\www\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\www\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 X:\home\sympulse\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\www\application\views\v_index.php:8