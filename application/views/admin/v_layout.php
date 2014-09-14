<!Doctype html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/jquery-ui-1.10.4.custom.css">
        <script src="/js/jquery-2.1.0.min.js"></script>        
        <!--<script src="/js/jquery-1.10.2.js"></script>-->       
       
        <?php foreach($styles as $style):?>
            <?php echo html::style($style);?>
        <?php endforeach;?>
        <?php foreach($scripts as $script):?>
            <?php echo html::script($script);?>
        <?php endforeach;?>
    </head>
    <body>
        <div id="admin_panel">
            <span class='left'><a href="/">Сайт</a></span>
            <div class='right' style="float:right">
                <span><?php echo $username;?></span>
                <span><a href="/login/logout">Выйти</a></span>
            </div>
        </div>    
        <div class="row-fluid">
            <div class="span12">
                <header class="">
                    
                    <div class="navbar navbar-inverse ">
                        <ul class="nav nav-pills container">
                            <li><a href="/admin/news">Новости</a></li>
                            <li><a href="/admin/tours">Туры</a></li>
                            <li><a href="/admin/audio">Аудио</a></li>
                            <li><a href="/admin/gallery">Галлерея</a></li>    
                        </ul>    
                    </div>    
                </header>
                <div id="content" class='container'>
                    <?php echo $content;?>
                </div>
                <footer id="footer" class="navbar-fixed-bottom">
                     <div id="container" class="container">
                        <span>&copy; sympuls-e</span>
                     </div>   
                </footer>
             </div>   
        </div>    
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/jquery-ui-1.10.4.custom.js"></script>
    </body>
</html>

