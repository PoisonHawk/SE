<!Doctype html>
<html>
    <head>
        <title><?php echo $title;?></title>
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/jquery-2.1.0.min.js"></script>
        
        <?php foreach($styles as $style):?>
            <?php echo html::style($style);?>
        <?php endforeach;?>
        <?php foreach($scripts as $script):?>
            <?php echo html::style($script);?>
        <?php endforeach;?>
    </head>
    <body>
        <div class="row-fluid">
            <div class="span12">
                <header class="">
                    <h1>Админка</h1>
                    <div class="navbar navbar-inverse ">
                        <ul class="nav nav-pills container">
                            <li><a href="/admin/news">Новости</a><li>
                            <li><a href="/admin/new">Туры</a><li>
                        </ul>    
                    </div>    
                </header>
                <div id="content">
                    <?php echo $content;?>
                </div>
                <footer id="footer">
                     <div id="container">
                        <span>&copy; sympuls-e</span>
                     </div>   
                </footer>
             </div>   
        </div>    
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>

