<!--
* GenesisUI Bootstrap 4 Admin Template built as framework!
* Version 1.4.0
* https://GenesisUI.com
* Copyright 2016 creativeLabs Łukasz Holeczek
* License : https://GenesisUI.com/license.html
-->
<?php include '../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>Админка</title>
        <!-- Main styles for this application -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <!-- BODY options, add following classes to body to change options
		1. 'compact-nav'     	  - Switch sidebar to minified version (width 50px)
		2. 'sidebar-nav'		  - Navigation on the left
			2.1. 'sidebar-off-canvas'	- Off-Canvas
				2.1.1 'sidebar-off-canvas-push'	- Off-Canvas which move content
				2.1.2 'sidebar-off-canvas-with-shadow'	- Add shadow to body elements
		3. 'fixed-nav'			  - Fixed navigation
		4. 'navbar-fixed'		  - Fixed navbar
	-->
    <body class="navbar-fixed sidebar-nav fixed-nav">
        <header class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
                <a class="navbar-brand" href="#"></a>
                <ul class="nav navbar-nav pull-right hidden-md-down">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/avatars/6.jpg" class="img-avatar">
                            <span class="hidden-md-down">Администратор</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-xs-center">
                                <strong>Аккаунт</strong>
                            </div>
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Профиль</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Настройки</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Выйти</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">
                        Панель управления
                    </li>
                   <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> ICONS</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="icons/font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="icons/simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forms.html"><i class="icon-docs"></i> Статьи <span class="label label-danger">NEW</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="forms.html"><i class="icon-options-vertical"></i> Меню <span class="label label-info">NEW</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- Main content -->
        <main class="main">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h2 page-title">Главная</h1>
                        <div class="text-muted page-desc">Добро пожаловать в панель управления <strong><?php echo $_SERVER['SERVER_NAME'] ?></strong></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <form method="post" action="newArticle_db.php">
                   <div class="form-group">
                      <label for="title_f">Заголовок:</label>
                      <input type="text" class="form-control" id="title_f" name="title">
                    </div>
                    <div class="form-group">
                      <label for="shortText_f">Краткое описание:</label>
                      <textarea class="form-control" rows="3" id="shortText_f"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="mainText_f">Краткое описание:</label>
                      <textarea class="form-control" rows="10" id="main_f"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Обновить</button>
              </form>
            </div>
        </main>
        <footer class="footer">
            <span class="text-left">
                Копирайты тут...
            </span>
        </footer>
        <!-- Bootstrap and necessary plugins -->
        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/libs/tether.min.js"></script>
        <script src="assets/js/libs/bootstrap.min.js"></script>
        <script src="assets/js/libs/pace.min.js"></script>
        <!-- Plugins and scripts required by all views -->
        <script src="assets/js/libs/Chart.min.js"></script>
        <script src="assets/js/views/shared.js"></script>
        <!-- GenesisUI main scripts -->
        <script src="assets/js/app.js"></script>
        
        
    </body>
</html>