<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>SPOT - Free Bootstrap 3 Theme</title>

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
  </head>

  <body style="font-family:'Verdana'">

      <?php include 'db.php'; ?>
      
      
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="font-family:'Verdana';font-weight:100;">Санаторий <i class="fa fa-circle"></i>рловского</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" sytle="font-weight:200;">
            <!--<li class="active"><a href="index.html">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
            <li><a href="services.html">SERVICES</a></li>
            <li><a href="works.html">WORKS</a></li>-->
            <?php 
              $sql = "SELECT * FROM `mainmenu`";
              $res = mysql_query($sql);
              while($row = mysql_fetch_array($res))
                {
                  if ($row["href"]=='index'){
                      $endHref='index';
                  } else {
                      $endHref='article?id='.$row["href"];
                  }
                  echo '<li><a href="'.$endHref.'">';
                  echo $row['name'];
                echo '</a></li>';
                }
              ?>
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal">Контакты</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2" >
				<h1 >Здесь будет <b>Какой-то</b><br /> девиз или <br />
                    <b>Что-то похожее</b></h1>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- headerwrap -->

	<div class="container w">
		<div class="row centered">
			<br><br>
			<div class="col-lg-4">
				<i class="fa fa-tree" aria-hidden="true"></i>
				<h4>ПРИРОДА</h4>
				<p>Санаторий им. К. П. Орловского расположен в живописном парке на месте бывшего панского имения фон Гойера в г. Кировске Могилевской области и представляет собой прекрасный уютный уголок для отдыха и оздоровления.</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-thumbs-up" aria-hidden="true"></i>
				<h4>ОТДЫХ</h4>
				<p>В санатории им. К. П. Орловского созданы все условия для полноценного отдыха. К услугам отдыхающих клуб, библиотека и т.д. Для любителей активного отдыха оборудованы: тренажерный зал, настольный теннис, бильярд.</p>
			</div><!-- col-lg-4 -->

			<div class="col-lg-4">
				<i class="fa fa-plus-square" aria-hidden="true"></i>
				<h4>ПРОЦЕДУРЫ</h4>
				<p>Профиль санатория – заболевания опорно-двигательного аппарата, желудочно-кишечного тракта, сердечнососудистой системы и урологические. На территории имеется две скважины с минеральной водой.</p>
			</div><!-- col-lg-4 -->
		</div><!-- row -->
		<br>
		<br>
	</div><!-- container -->

	<!-- FEATURE SECTION -->
		<div id="dg">
	<div class="container wb">
		<div class="row centered">
			<br><br>
			<div class="col-lg-8 col-lg-offset-2">
				<h4>WE CREATE FIRST CLASS DESIGN</h4>
				<p>By being true to the brand we represent, we elevate the audiences’ relationship to it. Like becomes love becomes a passion. Passion becomes advocacy. And we see the brand blossom from within, creating a whole story the audience embraces. That’s when the brand can truly flex its muscles.</p>
			<p><br/><br/></p>
			</div>
			<div class="col-lg-2"></div>
			<div class="col-lg-10 col-lg-offset-1">
				<img class="img-responsive" src="assets/img/munter.png" alt="">
			</div>
		</div><!-- row -->
	</div><!-- container -->
		</div><!-- DG -->
	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h4>WE ARE STORYTELLERS. BRANDS ARE OUR SUBJECTS. DESIGN IS OUR VOICE.</h4>
					<p>We believe ideas come from everyone, everywhere. At BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths drive us, motivate us, and ultimately help us redefine the power of design.</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><! -- r wrap -->
	
	
	<!-- FOOTER -->
	<div id="f">
		<div class="container">
			<div class="row centered">
				<a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
		
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
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
