<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-26 00:34:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\admin\v_news.php [ 15 ] in X:\home\sympulse\application\views\admin\v_news.php:15
2014-04-26 00:34:44 --- DEBUG: #0 X:\home\sympulse\application\views\admin\v_news.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 15, Array)
#1 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#2 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#3 X:\home\sympulse\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 X:\home\sympulse\application\views\admin\v_layout.php(27): Kohana_View->__toString()
#5 X:\home\sympulse\system\classes\Kohana\View.php(61): include('X:\home\sympuls...')
#6 X:\home\sympulse\system\classes\Kohana\View.php(348): Kohana_View::capture('X:\home\sympuls...', Array)
#7 X:\home\sympulse\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 X:\home\sympulse\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#11 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#14 {main} in X:\home\sympulse\application\views\admin\v_news.php:15
2014-04-26 23:42:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Admin\news.php [ 21 ] in X:\home\sympulse\application\classes\Controller\Admin\news.php:21
2014-04-26 23:42:25 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\news.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'X:\home\sympuls...', 21, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\news.php:21
2014-04-26 23:49:58 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "=")
LINE 1: SELECT id, date, title, description FROM newsWHERE id='3'
                                                             ^ [ SELECT id, date, title, description FROM newsWHERE id='3' ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-26 23:49:58 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(1, 'SELECT id, date...', false, Array)
#1 X:\home\sympulse\application\classes\Model\news.php(23): Kohana_Database_Query->execute()
#2 X:\home\sympulse\application\classes\Controller\Admin\news.php(31): Model_News->getNews('3')
#3 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-26 23:52:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: desc ~ APPPATH\classes\Controller\Admin\news.php [ 34 ] in X:\home\sympulse\application\classes\Controller\Admin\news.php:34
2014-04-26 23:52:56 --- DEBUG: #0 X:\home\sympulse\application\classes\Controller\Admin\news.php(34): Kohana_Core::error_handler(8, 'Undefined index...', 'X:\home\sympuls...', 34, Array)
#1 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#2 [internal function]: Kohana_Controller->execute()
#3 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#4 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#7 {main} in X:\home\sympulse\application\classes\Controller\Admin\news.php:34
2014-04-26 23:58:37 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "WHERE")
LINE 1: ...42317,'Первая новость!!!','Текст первой новости') WHERE id='...
                                                             ^ [ INSERT INTO news (date,title,description) VALUES(1398542317,'Первая новость!!!','Текст первой новости') WHERE id='7' ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-26 23:58:37 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Model\news.php(75): Kohana_Database_Query->execute()
#2 X:\home\sympulse\application\classes\Controller\Admin\news.php(54): Model_News->processNew('???????????? ??...', '?????????? ????...', '7')
#3 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#4 [internal function]: Kohana_Controller->execute()
#5 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#6 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#9 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251