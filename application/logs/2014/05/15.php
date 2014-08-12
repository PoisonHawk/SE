<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-15 00:07:44 --- CRITICAL: Exception [ 0 ]: ОШИБКА:  неверное значение для целого числа: ""
LINE 1: INSERT INTO albums (name, year, image) VALUES ('', '', '')
                                                           ^ [ INSERT INTO albums (name, year, image) VALUES ('', '', '') ] ~ APPPATH\classes\Model\albums.php [ 38 ] in X:\home\sympulse\application\classes\Controller\Admin\audio.php:42
2014-05-15 00:07:44 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\audio.php(42): Model_Albums->setAlbum('', '', '')
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Audio->action_albums()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Audio))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\audio.php:42
2014-05-15 23:37:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: image ~ APPPATH\classes\Controller\audio.php [ 20 ] in X:\home\sympulse\application\classes\Controller\audio.php:20
2014-05-15 23:37:12 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\audio.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 20, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Audio->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\audio.php:20
2014-05-15 23:46:30 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_audio.php [ 26 ] in X:\home\sympulse\application\views\v_audio.php:26
2014-05-15 23:46:30 --- DEBUG: #0 X:\home\sympulse\application\views\v_audio.php(26): Kohana_Core::error_handler(2, 'Invalid argumen...', 'X:\home\sympuls...', 26, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\application\views\v_layout.php(120): Kohana_View->__toString()
#5 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#11 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\application\views\v_audio.php:26
2014-05-15 23:47:38 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_audio.php [ 26 ] in X:\home\sympulse\application\views\v_audio.php:26
2014-05-15 23:47:38 --- DEBUG: #0 X:\home\sympulse\application\views\v_audio.php(26): Kohana_Core::error_handler(2, 'Invalid argumen...', 'X:\home\sympuls...', 26, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\application\views\v_layout.php(120): Kohana_View->__toString()
#5 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#11 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\application\views\v_audio.php:26
2014-05-15 23:48:34 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_audio.php [ 26 ] in X:\home\sympulse\application\views\v_audio.php:26
2014-05-15 23:48:34 --- DEBUG: #0 X:\home\sympulse\application\views\v_audio.php(26): Kohana_Core::error_handler(2, 'Invalid argumen...', 'X:\home\sympuls...', 26, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\application\views\v_layout.php(120): Kohana_View->__toString()
#5 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#11 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\application\views\v_audio.php:26
2014-05-15 23:49:21 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_audio.php [ 27 ] in X:\home\sympulse\application\views\v_audio.php:27
2014-05-15 23:49:21 --- DEBUG: #0 X:\home\sympulse\application\views\v_audio.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', 'X:\home\sympuls...', 27, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\application\views\v_layout.php(120): Kohana_View->__toString()
#5 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Audio))
#11 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\application\views\v_audio.php:27
2014-05-15 23:51:31 --- CRITICAL: ErrorException [ 1 ]: Cannot use string offset as an array ~ APPPATH\classes\Controller\audio.php [ 25 ] in file:line
2014-05-15 23:51:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line