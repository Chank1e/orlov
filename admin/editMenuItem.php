<?php include '../db.php'; ?>
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
                                <a class="nav-link" href="icons/simple-line-icons.html"><i class="icon-star"></i> Т.д. и т.п</a>
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
                        <h1 class="h2 page-title">Изменить материал</h1>
                        <div class="text-muted page-desc">Добро пожаловать в панель управления <strong><?php echo $_SERVER['SERVER_NAME'] ?></strong></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
             
             <?php 
                        $href = $_GET['href'];
                        $sqql = "SELECT * FROM `mainmenu` WHERE `href`='$href'";
                            $res = mysql_query($sqql);
                            while($roww=mysql_fetch_array($res)){
                                $nameOfItem = $roww['name'];
                            }
                ?>
             
              <form method="POST" id="submitThis" action="javascript:void(null);" onsubmit="callUpdate()">
                   <div class="form-group">
                     <label><strong>Привязка к статье:</strong></label>
                      <select multiple class="form-control" name="href">
                            <?php 
                                $sql = "SELECT * FROM `articles`";
                                $result = mysql_query($sql);
                            while($row=mysql_fetch_array($result)){
                                echo '<option>';
                                echo $row['title']."/".$row['id'];
                                echo '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="name_f"><strong>Название:</strong></label>
                      <input type="text" required class="form-control" maxlength="64" id="name_f" name="name" value="<?php echo $nameOfItem; ?>">
                    </div>
                        <div class="btn-group btn-group-lg pull-right">
                            <button type="submit" class="btn btn-primary-outline"><i class="fa fa-dot-circle-o"></i> Сохранить</button>
                            <button type="button" class="btn btn-danger-outline btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-times" aria-hidden="true"></i> Удалить</button>
                        </div>
                        <input type="hidden" value="<?php echo $href;?>" name="oldHref">
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
    
    <!--FORM FOR DELETE -->
    <form style="display:none" id="deleteForm">
        <input type="hidden" value="<?php echo $href;?>" name="href">
    </form>
    
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Подтвердите действие</h4>
      </div>
      <div class="modal-body danger">
        Вы действительно хотите удалить пункт меню?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>
        <button type="button" class="btn btn-danger" onclick="callDelete()" data-dismiss="modal">Удалить</button>
      </div>
    </div>
  </div>
</div>
        
        
         <!-- Bootstrap and necessary plugins -->
                        <script src="assets/js/libs/jquery.min.js"></script>
        <script src="assets/js/libs/bootstrap.min.js"></script>
        <script src="assets/js/libs/pace.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/libs/toastr.min.js"></script>
        <script src="assets/js/libs/jquery.form.min.js"></script>
        <script>
            toastr.options.closeButton = true;
            function callUpdate() {
              var msg   = $('#submitThis').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'editMenuItem_db.php',
                  data: msg,
                  success: function(data) {
                    toastr.success('Пункт меню успешно изменен!', 'Отлично!');
                      window.location.href="menuItems";
                  },
                  error:  function(xhr, str){
                    toastr.error('Пункт меню не изменен=(', 'Ошибочка('+xhr.responseCode+')');
                  }
                });
            }
            function callDelete() {
              var msg   = $('#deleteForm').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'deleteMenuItem_db.php',
                  data: msg,
                  success: function(data) {
                    toastr.success('Пункт меню успешно удален!', 'Отлично!');
                      window.location.href="menuItems";
                  },
                  error:  function(xhr, str){
                    toastr.error('Пункт меню не удален=(', 'Ошибочка('+xhr.responseCode+')');
                  }
                });
            }
        </script>
        
    </body>
</html>