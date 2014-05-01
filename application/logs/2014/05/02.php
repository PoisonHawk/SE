<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-05-02 00:00:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\classes\Model\tours.php [ 31 ] in file:line
2014-05-02 00:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 00:03:43 --- CRITICAL: Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: ":")
LINE 1: ..., city, fest, club) VALUES (1428177600, 'Рязань', :fest, 'Ар...
                                                             ^ [ INSERT INTO tours (date, city, fest, club) VALUES (1428177600, 'Рязань', :fest, 'Арт клуб Планетарий') ] ~ APPPATH\classes\Model\tours.php [ 41 ] in X:\home\sympulse\application\classes\Controller\Admin\tours.php:31
2014-05-02 00:03:43 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\tours.php(31): Model_Tours->addTour('05/16/2014', '????????????', 'Dancing Death F...', '?????? ????????...')
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\tours.php:31
2014-05-02 00:04:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: new ~ APPPATH\views\admin\v_tours.php [ 34 ] in X:\home\sympulse\application\views\admin\v_tours.php:34
2014-05-02 00:04:56 --- DEBUG: #0 X:\home\sympulse\application\views\admin\v_tours.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 34, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\application\views\admin\v_layout.php(30): Kohana_View->__toString()
#5 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#11 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\application\views\admin\v_tours.php:34
2014-05-02 00:06:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Admin\news.php [ 33 ] in X:\home\sympulse\application\classes\Controller\Admin\news.php:33
2014-05-02 00:06:56 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\news.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'X:\home\sympuls...', 33, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\news.php:33
2014-05-02 00:22:25 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Admin\news.php [ 33 ] in X:\home\sympulse\application\classes\Controller\Admin\news.php:33
2014-05-02 00:22:25 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\news.php(33): Kohana_Core::error_handler(8, 'Undefined offse...', 'X:\home\sympuls...', 33, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\news.php:33
2014-05-02 00:55:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\v_layout.php [ 30 ] in X:\home\sympulse\application\views\admin\v_layout.php:30
2014-05-02 00:55:58 --- DEBUG: #0 X:\home\sympulse\application\views\admin\v_layout.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 30, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\admin\v_layout.php:30
2014-05-02 00:57:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 00:57:27 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 495, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\tours.php(42): Kohana_Validation->errors('comments')
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 00:57:38 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 00:57:38 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 495, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\tours.php(42): Kohana_Validation->errors('comments')
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 00:59:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\Controller\Admin\tours.php [ 53 ] in X:\home\sympulse\application\classes\Controller\Admin\tours.php:53
2014-05-02 00:59:09 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\tours.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 53, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\tours.php:53
2014-05-02 00:59:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\classes\Controller\Admin\tours.php [ 53 ] in X:\home\sympulse\application\classes\Controller\Admin\tours.php:53
2014-05-02 00:59:14 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\tours.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 53, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\tours.php:53
2014-05-02 01:00:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 01:00:15 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 495, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\tours.php(44): Kohana_Validation->errors('comments')
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 01:02:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Tours::addTour() ~ APPPATH\classes\Controller\Admin\tours.php [ 39 ] in file:line
2014-05-02 01:02:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-05-02 01:06:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ SYSPATH\classes\Kohana\Validation.php [ 495 ] in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 01:06:36 --- DEBUG: #0 X:\home\sympulse\system\classes\Kohana\Validation.php(495): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 495, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\tours.php(44): Kohana_Validation->errors('comments')
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\system\classes\Kohana\Validation.php:495
2014-05-02 01:08:41 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Admin\tours.php [ 48 ] in X:\home\sympulse\application\classes\Controller\Admin\tours.php:48
2014-05-02 01:08:41 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\tours.php(48): Kohana_Core::error_handler(2048, 'Creating defaul...', 'X:\home\sympuls...', 48, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\tours.php:48
2014-05-02 01:09:55 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Admin\tours.php [ 49 ] in X:\home\sympulse\application\classes\Controller\Admin\tours.php:49
2014-05-02 01:09:55 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\tours.php(49): Kohana_Core::error_handler(2048, 'Creating defaul...', 'X:\home\sympuls...', 49, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\tours.php:49
2014-05-02 01:25:00 --- CRITICAL: ErrorException [ 8 ]: Undefined index: date ~ APPPATH\classes\Controller\Admin\tours.php [ 33 ] in X:\home\sympulse\application\classes\Controller\Admin\tours.php:33
2014-05-02 01:25:00 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\tours.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 33, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_Tours->action_processtour()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Tours))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\tours.php:33
2014-05-02 01:34:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function vardump() ~ APPPATH\classes\Model\tours.php [ 44 ] in file:line
2014-05-02 01:34:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line