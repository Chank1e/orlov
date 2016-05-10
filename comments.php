<?php include 'db.php';?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>Отзывы</title>
</head>
<body style="font-family:'Verdana'">
  
  <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index" style="font-family:'Verdana';font-weight:100;">Санаторий <i class="fa fa-circle"></i>рловского</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" sytle="font-weight:200;">
            <li><a href="index">Главная</a></li>
            <?php 
              $sql_menu = "SELECT * FROM `mainmenu`";
              $res_menu = mysql_query($sql_menu);
              while($row_menu = mysql_fetch_array($res_menu))
                {
                  echo '<li><a href="'.$row_menu["href"].'">';
                  echo $row_menu['name'];
                echo '</a></li>';
                }
              ?>
              <li><a href="comments">Отзывы</a></li>
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal">Контакты</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
   
   <!-- FEATURE SECTION -->
	<div class="container wb">
		<div class="row">
				<p>
                  
                  
                   <?php 
                    $sql = "SELECT * FROM `comments` WHERE `accept`=1";
                    $res = mysql_query($sql);
                    $numRows = mysql_num_rows($res);
                    if($numRows==0){
                        echo '<div class="center-block"><h1>Отзывов пока нету. Оставьте первый отзыв!</h1></div>';
                    } else {
                        echo '<h1 class="text-center">Отзывы:</h1>';
                        while($row=mysql_fetch_array($res)){
                                echo '<blockquote>';                                
                            echo $row['comment'];
                            echo '<footer><i>- ';
                            echo $row['name'];
                            echo '</i></footer>';
                            echo '</blockquote>';                        }
                    }
                    ?>
                    
                    
                </p>
		</div><!-- row -->
	</div><!-- container -->
      <br><br>
       <div class="container">
           <div class="row centered">
                       <div class="col-lg-10 col-lg-offset-1">
                        <form method="POST" id="submitThis" action="javascript:void(null);" onsubmit="callUpdate()">
                       <div class="form-group">
                          <label><strong>Ваше имя:</strong></label>
                          <input type="text" required class="form-control" maxlength="64" name="name">
                        </div>
                        <div class="form-group">
                          <label><strong>Отзыв:</strong></label>
                          <textarea name="comment" class="form-control" maxlength="512" required rows="5"></textarea>
                        </div>
                                <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-dot-circle-o"></i> Отправить</button>
                  </form>
               </div>
            </div>
        </div><br><br>
    
    
    
    <!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				<a href="#"><i class="fa fa-facebook"></i></a>
		
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Footer -->


	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Контакты</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
		        	<p>
		        		Беларусь, Могилёвская область, г.Кировск<br/>
						+375 2237 27376<br/>
						<a href="mailto:sanorlov@list.ru">sanorlov@list.ru</a>
		        	</p>
		        	<div id="mapwrap">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=10viPAKHnv6ltOAjFJL70RSUkw697dE7&width=100%&height=300&lang=ru_RU&sourceType=constructor&scroll=true"></script>
					</div>	
		        </div>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="admin/assets/js/libs/jquery.min.js"></script>
    <script src="admin/assets/js/libs/bootstrap.min.js"></script>
    <script src="admin/assets/js/libs/toastr.min.js"></script>
    <script src="admin/assets/js/libs/jquery.form.min.js"></script>
<script>
    toastr.success('Ваш комментарий отправлен на проверку!', 'Отлично!');
            function callUpdate() {
              var msg   = $('#submitThis').serialize();
                $.ajax({
                  type: 'POST',
                  url: 'newComment_db.php',
                  data: msg,
                  success: function(data) {
                    toastr.success('Ваш комментарий отправлен на проверку!', 'Отлично!');
                      window.location.href="comments";
                  },
                  error:  function(xhr, str){
                    toastr.error('Комментарий не отправлен=(', 'Ошибочка('+xhr.responseCode+')');
                  }
                });
            }
        </script>
</body>
</html>