<!Doctype html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <!--
        --><link href="/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/jquery-ui-1.10.4.custom.css">
        <script src="/js/jquery-2.1.0.min.js"></script>     
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <!--<script src="/js/jquery-1.10.2.js"></script>-->       
        
        
        <script type="text/javascript" src="http://vk.com/js/api/share.js?93" charset="windows-1251"></script>
        
        <?php foreach ($styles as $style): ?>
            <?php echo HTML::style($style); ?>
        <?php endforeach; ?>
        <?php foreach ($scripts as $script): ?>
            <?php echo HTML::script($script); ?>
        <?php endforeach; ?>
    </head>
    <body>
        <div id="admin_panel">
            <!--<span class='left'><a href="/">Сайт</a></span>-->
            <div class='right' style="float:right">
                <span><?php echo $username; ?></span>
                <span><a href="/login/logout">Выйти</a></span>
            </div>
        </div>    
        <div class="row-fluid">
            <div class="span12">
                <header class="">

                    <div class="navbar navbar-default">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="/">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a href="/admin/news">Новости</a></li>
                            <li><a href="/admin/tours">Туры</a></li>
                            <li class="dropdown">
                                <a  class="dropdown-toggle" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Медиа <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/admin/audio">Аудио</a></li>
                                    <li><a href="/admin/video">Видео</a></li> 
                                    <li><a href="/admin/gallery">Галлерея</a></li>           
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/admin/band" class="dropdown-toggle" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Группа <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/admin/band">Инфо</a></li>
                                    <li><a href='/admin/band/members'>Участники</a></li>                      
                                </ul>
                            </li>
                            <li><a href="/admin/settings">Настройки</a></li>
                            <?php if (Auth::instance()->logged_in('sa')):?>
                                <li><a href="/admin/users">Пользователи</a></li>
                            <?php endif;?>

                        </ul> 
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"><?php echo $username; ?></span></a></li>
                            <li><a href="/login/logout" alt="Выйти"><span class="glyphicon glyphicon-log-out"></span></a></li>

                        </ul>

                    </div>    
                </header>
                <div id="content" class='container'>
                    <?php echo $content; ?>
                </div>
                <footer id="footer" class="navbar-fixed-bottom">
                    <div id="container" class="container">
                        <span>&copy; sympuls-e</span>
                    </div>   
                </footer>
            </div>   
        </div>    
        <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
        <!--<script src="/js/bootstrap.min.js"></script>-->
        <script src="/js/bootstrap.js"></script>
        <script src="/js/jquery-ui-1.10.4.custom.js"></script>
    </body>
</html>

