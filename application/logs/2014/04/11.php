<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-11 00:01:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\admin\v_layout.php [ 4 ] in X:\home\sympulse\application\views\admin\v_layout.php:4
2014-04-11 00:01:50 --- DEBUG: #0 X:\home\sympulse\application\views\admin\v_layout.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 4, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_New))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\admin\v_layout.php:4
2014-04-11 00:03:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Admin\Base.php [ 11 ] in X:\home\sympulse\application\classes\Controller\Admin\Base.php:11
2014-04-11 00:03:17 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\Base.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 11, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(69): Controller_Admin_Base->before()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_New))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\Base.php:11