<?php include '../db.php';
include 'isLogin.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <script src="ckeditor/ckeditor.js"></script>
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
                        <h1 class="h2 page-title">Изменить материал</h1>
                        <div class="text-muted page-desc">Добро пожаловать в панель управления <strong><?php echo $_SERVER['SERVER_NAME'] ?></strong></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
             
             <?php 
                        $idOfArticle = $_GET['id'];
                        $sql = 'SELECT * FROM `articles` WHERE `id`='.$idOfArticle.'';
                        $query = mysql_query($sql);
                        while($row = mysql_fetch_array($query))
                            {
                                $mainText =$row['mainText'];
                                $shortText = $row['shortText'];
                                $title = $row['title'];
                            }
                ?>
             
              <form method="POST" id="submitThis" action="javascript:void(null);" onsubmit="CKupdate();callUpdate()">
                   <div class="form-group">
                      <label for="title_f"><strong>Заговолок:</strong></label>
                      <input type="text" required class="form-control" maxlength="64" id="title_f" name="title" value="<?php echo $title; ?>">
                    </div>
                    <div class="form-group">
                      <label for="shortText_f"><strong>Краткое описание:</strong></label>
                      <textarea name="shortText" class="form-control" maxlength="128" rows="3" id="shortText_f"><?php echo $shortText;?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="mainText_f"><strong>Полное описание:</strong></label>
                      <textarea name="mainText" class="form-control" maxlength="2056" required rows="10" id="editor1"><?php echo $mainText;?></textarea>
                      
                    </div>
                    <input type="hidden" name ="id" value="<?php echo $idOfArticle; ?>">
                        <div class="btn-group btn-group-lg pull-right">
                            <button type="submit" class="btn btn-primary-outline"><i class="fa fa-dot-circle-o"></i> Сохранить</button>
                            <button type="button" class="btn btn-danger-outline btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-times" aria-hidden="true"></i> Удалить</button>
                        </div>
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
        <input type="hidden" value="<?php echo $idOfArticle;?>" name="id">
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
        Вы действительно хотите удалить материал?
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
            CKEDITOR.replace( 'editor1' );
            function CKupdate(){
                for ( instance in CKEDITOR.instances )
                    CKEDITOR.instances[instance].updateElement();
                }
            toastr.options.closeButton = true;
            function callUpdate() {
                var data = CKEDITOR.instances.editor1.getData();
              var msg   = $('#submitThis').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'editArticle_db.php',
                  data: msg,
                  success: function(data) {
                    toastr.success('Статья успешно изменена!', 'Отлично!');
                      window.location.href="allArticles";
                  },
                  error:  function(xhr, str){
                    toastr.error('Статья не изменена=(', 'Ошибочка('+xhr.responseCode+')');
                  }
                });
            }
            function callDelete() {
              var msg   = $('#deleteForm').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'deleteArticle_db.php',
                  data: msg,
                  success: function(data) {
                    toastr.success('Статья успешно удалена!', 'Отлично!');
                      window.location.href="allArticles";
                  },
                  error:  function(xhr, str){
                    toastr.error('Статья не удалена=(', 'Ошибочка('+xhr.responseCode+')');
                  }
                });
            }
        </script>
        
    </body>
</html>