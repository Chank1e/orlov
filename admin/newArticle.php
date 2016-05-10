<?php include '../db.php';
include 'isLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
        <title>Добавить статью</title>
        <!-- Main styles for this application -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body class="navbar-fixed sidebar-nav fixed-nav">
        <header class="navbar">
            <div class="container-fluid">
                <button class="navbar-toggler mobile-toggler hidden-lg-up" type="button">&#9776;</button>
                <a class="navbar-brand" href="index"></a>
                <ul class="nav navbar-nav pull-right hidden-md-down">
                    <li class="nav-item">
                        <a class="nav-link" href="newArticle"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/avatars/ava.png" class="img-avatar">
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
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Плагины</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="icons/font-awesome.html"><i class="icon-star"></i> Галерея</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="allComments"><i class="icon-star"></i> Отзывы</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Статьи</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="newArticle"><i class="fa fa-plus-square" aria-hidden="true"></i> Добавить</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="allArticles"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Редактировать</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-server" aria-hidden="true"></i> Меню</a>
                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a class="nav-link" href="newMenuItem"><i class="fa fa-plus-square" aria-hidden="true"></i> Добавить</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="menuItems"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Редактировать</a>
                            </li>
                        </ul>
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
                        <h1 class="h2 page-title">Новый материал</h1>
                        <div class="text-muted page-desc">Добро пожаловать в панель управления <strong><?php echo $_SERVER['SERVER_NAME'] ?></strong></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
              <form method="POST" id="submitThis" action="javascript:void(null);" onsubmit="call()">
                   <div class="form-group">
                      <label for="title_f"><strong>Заговолок:</strong></label>
                      <input type="text" required class="form-control" maxlength="64" id="title_f" name="title">
                    </div>
                    <div class="form-group">
                      <label for="shortText_f"><strong>Краткое описание:</strong></label>
                      <textarea name="shortText" class="form-control" maxlength="128" rows="3" id="shortText_f"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="mainText_f"><strong>Полное описание:</strong></label>
                      <textarea name="mainText" class="form-control" maxlength="2056" required rows="10" id="mainText_f"></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg btn-primary-outline btn-block"><i class="fa fa-dot-circle-o"></i> Добавить</button>
              </form>
            </div>
        </main>
        <footer class="footer container-fluid">
            <span class="text-left">
                <a href="mailto:ankell.game@gmail.com"><i class="fa fa-question" aria-hidden="true"></i> Сообщить об ошибке</a>
            </span>
            <span class="pull-right">
                <strong>@Chank1e</strong>
            </span>
        </footer>
         <!-- Bootstrap and necessary plugins -->
                        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/libs/bootstrap.min.js"></script>
        <script src="assets/js/libs/pace.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/libs/toastr.min.js"></script>
        <script src="assets/js/libs/jquery.form.min.js"></script>
        <script>
            toastr.options.closeButton = true;
            function call() {
              var msg   = $('#submitThis').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'newArticle_db.php',
                  data: msg,
                  success: function(data) {
                    toastr.success('Статья успешно добавлена!', 'Отлично!');
                      window.location.href="allArticles";
                  },
                  error:  function(xhr, str){
                    toastr.error('Статья не добавлена=(', 'Ошибочка('+xhr.responseCode+')');
                  }
                });

            }
        </script>
        
    </body>
</html>