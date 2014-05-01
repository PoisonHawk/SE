<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-10 23:31:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Cntroller_Admin_Base' not found ~ APPPATH\classes\Controller\Admin\index.php [ 3 ] in file:line
2014-04-10 23:31:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 23:31:26 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in X:\home\sympulse\system\classes\Kohana\View.php:137
2014-04-10 23:31:26 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 X:\home\sympulse\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 X:\home\sympulse\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\system\classes\Kohana\View.php:137
2014-04-10 23:32:08 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Admin_Index does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php:94
2014-04-10 23:32:08 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#4 {main} in X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php:94
2014-04-10 23:32:37 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Admin_Index does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php:94
2014-04-10 23:32:37 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#4 {main} in X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php:94
2014-04-10 23:32:39 --- CRITICAL: ReflectionException [ 0 ]: Class Controller_Admin_Index does not have a constructor, so you cannot pass any constructor arguments ~ SYSPATH\classes\Kohana\Request\Client\Internal.php [ 94 ] in X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php:94
2014-04-10 23:32:39 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(94): ReflectionClass->newInstance(Object(Request), Object(Response))
#1 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#2 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#4 {main} in X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php:94
2014-04-10 23:43:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\v_layout.php [ 4 ] in X:\home\sympulse\application\views\v_layout.php:4
2014-04-10 23:43:08 --- DEBUG: #0 X:\home\sympulse\application\views\v_layout.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 4, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\v_layout.php:4
2014-04-10 23:43:21 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in X:\home\sympulse\system\classes\Kohana\View.php:137
2014-04-10 23:43:21 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 X:\home\sympulse\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 X:\home\sympulse\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#6 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\system\classes\Kohana\View.php:137
2014-04-10 23:46:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR, expecting ',' or ';' ~ APPPATH\classes\Controller\Admin\index.php [ 5 ] in file:line
2014-04-10 23:46:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 23:46:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\admin\v_layout.php [ 4 ] in X:\home\sympulse\application\views\admin\v_layout.php:4
2014-04-10 23:46:47 --- DEBUG: #0 X:\home\sympulse\application\views\admin\v_layout.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 4, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Index))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\admin\v_layout.php:4