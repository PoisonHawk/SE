<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-22 00:00:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function pg_connect() ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 79 ] in file:line
2014-04-22 00:00:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-22 22:27:48 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "date")
LINE 1: INSERT INTO news date,title,description) VALUES('$','$','$')
                         ^ [ INSERT INTO news date,title,description) VALUES('$','$','$') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:27:48 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(34): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:28:41 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "date")
LINE 1: INSERT INTO news date,title,description) VALUES('$','$','$')
                         ^ [ INSERT INTO news date,title,description) VALUES('$','$','$') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:28:41 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(36): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:29:04 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "date")
LINE 1: INSERT INTO news date,title,description) VALUES('$','$','$')
                         ^ [ INSERT INTO news date,title,description) VALUES('$','$','$') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:29:04 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(36): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:30:27 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  ошибка синтаксиса (примерное положение: "date")
LINE 1: INSERT INTO news date,title,description) VALUES('фыв','фыв',...
                         ^ [ INSERT INTO news date,title,description) VALUES('фыв','фыв','фыв') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:30:27 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(36): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:31:27 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  неверное значение для целого числа: "фыв"
LINE 1: INSERT INTO news (date,title,description) VALUES('фыв','фыв'...
                                                         ^ [ INSERT INTO news (date,title,description) VALUES('фыв','фыв','фыв') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:31:27 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(36): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:31:50 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  нулевое значение в колонке "id" нарушает ограничение NOT NULL
DETAIL:  Ошибочная строка содержит (null, 1, фыв, фыв, null). [ INSERT INTO news (date,title,description) VALUES('1','фыв','фыв') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:31:50 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(36): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:38:29 --- CRITICAL: Database_Exception [ 0 ]: ОШИБКА:  нулевое значение в колонке "id" нарушает ограничение NOT NULL
DETAIL:  Ошибочная строка содержит (null, 1, фыв, фыв, null). [ INSERT INTO news (date,title,description) VALUES('1','фыв','фыв') ] ~ MODPATH\database\classes\Kohana\Database\PostgreSQL.php [ 178 ] in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251
2014-04-22 22:38:29 --- DEBUG: #0 X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_PostgreSQL->query(2, 'INSERT INTO new...', false, Array)
#1 X:\home\sympulse\application\classes\Controller\Admin\news.php(36): Kohana_Database_Query->execute()
#2 X:\home\sympulse\system\classes\Kohana\Controller.php(84): Controller_Admin_News->action_processnew()
#3 [internal function]: Kohana_Controller->execute()
#4 X:\home\sympulse\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_News))
#5 X:\home\sympulse\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 X:\home\sympulse\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 X:\home\sympulse\www\index.php(118): Kohana_Request->execute()
#8 {main} in X:\home\sympulse\modules\database\classes\Kohana\Database\Query.php:251