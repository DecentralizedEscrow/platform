<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Descrow | </title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet" />
  <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/nprogress.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">
<!-- окно вопроса поддержке -->
<div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Техническая поддержка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<div class="notice">
					<p><i class="fa fa-check"></i> Задать вопрос проекту или сообщить о найденных ошибках или неточностях вы можете в форме ниже.</p>
					<p><i class="fa fa-check"></i> Вы получите ответ в виде личного сообщения в кабинете платформы.</p>
				</div>
				<p><textarea id="adv-descr" required="required" class="form-control col-xs-12" rows="4" placeholder="Вопрос или обращение к команде Descrow"></textarea></p>
				<p><button type="button" class="btn btn-success">Отправить</button></p>
				
			</div>
		</div>
	</div>
</div>

  <div class="container body">


    <div class="main_container">
	  
	  <!-- page content -->
      <div class="right_col row" role="main">

        <div class="col-xs-12" style="text-align: center; padding-left: 0;">
          <div class="" style="max-width: 1240px; margin: 0 auto;"><div class="leftFix">
			<!-- основной блок -->
			  <div class="leftCol col-fixed left_col">
				<div class="left_col scroll-view">

				  <div class="navbar nav_title" style="border: 0;">
					<a href="index.html" class="site_title"><img src="images/des/des-logo-icon.png" alt="" /><span><img src="images/des/des-logo-text.png" alt="" /></span></a>
				  </div>
				  <div class="clearfix"></div>
				  
				  <!-- menu prile quick info -->
				  <div class="profile darkblue">
					<div class="profile_pic">
					  <img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img">
					</div>
					<div class="profile_info">
					  <span>Приветствую!</span>
					  <h2>Сергей Беседин</h2>
					</div>
					<div class="clearfix"></div>
				  </div>
				  <!-- /menu prile quick info -->

				  <div class="accMode">
					<div class="inner">
						<a id="dropMode" href="javascript:;" onclick="$('#menuMode').slideToggle(); $('.accMode button').toggleClass('active');"><button class="btn-success"><i class="fa fa-rocket"></i><span class="cap">&nbsp; Стартап </span><span class="caret"></span></button></a>
						<div id="menuMode">
						  <div><a href="dashboard-invest.php"><div><i class="fa fa-briefcase"></i><span class="cap"> &nbsp; В режим инвестора</span></div></a></div>
						  <div><a href="expert-offers.php"><div><i class="fa fa-graduation-cap"></i><span class="cap"> &nbsp; В режим эксперта</span></div></a></div>
						  <div><a href="dashboard-admin.php"><div><i class="fa fa-gear"></i><span class="cap"> &nbsp; В режим администратора</span></div></a></div>
						</div>
					</div>
				  </div>
				  
				  <br />

				  <!-- sidebar menu -->
				  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

					<div class="menu_section">
					  <ul class="nav side-menu">
						<li><a href="dashboard-startup.php"><i class="fa fa-dashboard"></i> Главная <span class="fa"></span></a></li>
						<li><a href="ico-list.php"><i class="fa fa-database"></i> Все проекты на ICO <span class="fa"></span></a></li>
						<!-- пункты стартапа -->
						<li><a href="my-startup-all.php"><i class="fa fa-file-text-o"></i> Мои проекты <span class="fa"></span></a></li>
						<li><a href="startup-refer.php"><i class="fa fa-group"></i> Реферальная программа <span class="fa"></span></a></li>
						<!--<li><a href="exchange - main.php"><i class="fa fa-area-chart"></i> Биржа токенов <span class="fa"></span></a></li>-->
						<li><a href="startup-experts.php"><i class="fa fa-wrench"></i> Найти эксперта <span class="fa"></span></a></li>
					  </ul>
					  <div class="menu_section support">
						  <ul class="nav side-menu">
							<li data-toggle="modal" data-target="#supportModal"><a><i class="fa fa-question-circle"></i> Техническая поддержка</a></li>
						  </ul>
					  </div>
					</div>

				  </div>
				  <!-- /sidebar menu -->

				  <!-- /menu footer buttons -->
				  <div class="sidebar-footer hidden-small">
					&copy; 2018 Descrow
				  </div>
				  <!-- /menu footer buttons -->
				</div>
			  </div>
			  
			  <div class="col-xs-12 col-md-12 right col-offset">
				  <!-- top navigation -->
				  <div class="top_nav">

					<div class="nav_menu" style="position: relative;">
					  <div class="burger-bg"></div>
					  <nav class="" role="navigation">
						<div class="nav toggle">
						  <a class="page-name hidden"><i class="fa"><span>RU</span></i> <i class="fa fa-angle-down"></i></a>
						  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
						  <li class="dropdown lang">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">RU <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
							  <li><a href="#">ENGLISH</a></li>
							</ul>
						  </li>
						  <!--<li class="dropdown currency">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" title="Суммы отображаются в USD"><i class="fa fa-dollar"></i> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
							  <li><a href="#" title="Отображать суммы в ETH"><img src="images/des/eth.svg" height="16" style="position: relative; top: -2px;"> ETH</a></li>
							</ul>
						  </li>-->
						</div>

						<ul class="nav navbar-nav navbar-right">
						  <li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							  <span class="uico fa fa-user"></span>
							  <span class="mail">test@descrow.com</span>
							  <span class="fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
							  <li><a href="user - info.php"><i class="fa fa-key"></i> Личные данные</a></li>
							  <li><a href="user - wallet.php"><i class="fa fa-dollar"></i> Кошелек</a></li>
							  <li><a href="javascript:;"><i class="fa fa-sign-out"></i> Выйти</a></li>
							</ul>
						  </li>

						  <li role="presentation" class="msgh">
							<a href="user - mail - list.php" class="dropdown-toggle info-number">
							  <i class="fa fa-envelope-o"></i>
							  <span class="badge bg-red">6</span>
							</a>
						  </li>

						</ul>
					  </nav>
					  <div class="clearfix"></div>
					</div>

				  </div>
				  <!-- /top navigation -->