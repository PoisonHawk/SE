<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-27 00:02:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH\classes\Model\news.php [ 64 ] in file:line
2014-04-27 00:02:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-27 00:03:16 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: ":")
LINE 1: ...ws SET title = 'Первая новость!!!', description = :desc WHER...
                                                             ^ [ UPDATE news SET title = 'Первая новость!!!', description = :desc WHERE id='7' ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-27 00:03:16 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(3, 'UPDATE news SET...', false, Array)
#1 X:\home\sympulse\application\classes\Model\news.php(65): Kohana_Database_Query->execute()
#2 X:\home\sympulse\application\classes\Controller\Admin\news.php(54): Model_News->processNew('???????????? ??...', '?????????? ????...', '7')
#3 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-27 00:13:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\v_layout.php [ 28 ] in X:\home\sympulse\application\views\admin\v_layout.php:28
2014-04-27 00:13:10 --- DEBUG: #0 X:\home\sympulse\application\views\admin\v_layout.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 28, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#7 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#10 {main} in X:\home\sympulse\application\views\admin\v_layout.php:28
2014-04-27 01:10:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\v_index.php [ 135 ] in file:line
2014-04-27 01:10:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line