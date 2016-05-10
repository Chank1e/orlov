<?php include 'db.php';
$getArticle = $_GET['id'];
$sql = 'SELECT * FROM `articles` WHERE `id`='.$getArticle;
$res = mysql_query($sql);
$rowss=mysql_num_rows($res);
if($rowss==0){
    echo '<script>window.location="/404";</script>';exit;
}else {
              while($row = mysql_fetch_array($res)){
                  $title = $row['title'];
                  $shortText = $row['shortText'];
                  $mainText = $row['mainText'];
                }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <title><?php echo $title; ?></title>
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
			<br><br>
			<div class="col-lg-12">
				<p>
                  
                  
                   <?php echo '<h1>'.$title.'</h1><br />';
                    echo $mainText;
                    ?>
                    
                    
    </p>
			<p><br/><br/></p>
			</div>
			<div class="col-lg-2"></div>
		</div><!-- row -->
	</div><!-- container -->
    
    
    
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
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="admin/assets/js/libs/bootstrap.min.js"></script>
</body>
</html>