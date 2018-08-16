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
<!-- окно вывода ошибок -->
<div class="modal fade" id="ajErrorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Ошибка!<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<h4 id="ajErrorTxt"></h4>
			</div>
		</div>
	</div>
</div>
<!-- окно авторизации -->
<div class="modal fade" id="enterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Авторизация<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="?mod=auth" id="fAuth">
					<input type="email" name="email" placeholder="E-mail" required>
					<input type="password" name="pwd" placeholder="Пароль" required>
					<button class="btn btn-success btn-block" name="auth">Авторизоваться</button>
					<a href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#restoreModal">Забыли пароль?</a>
					<hr>
					<a class="btn btn-info btn-block" data-dismiss="modal" data-toggle="modal" data-target="#regModal">Регистрация</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- окно регистрации -->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Регистрация<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="?mod=register" id="fReg">
					<input type="email" name="email" placeholder="E-mail" required>
					<input type="password" name="pwd" placeholder="Пароль" required>
					<input type="password" name="pwdC" placeholder="Подтверждение пароля" required>
					<input type="checkbox" name="rules" checked="" required>&nbsp;Согласен с <a href="#">правилами сайта</a>
					<input type="hidden" name="rid" value="">
					<button class="btn btn-success btn-block" name="reg">Зарегистрироваться</button>
					<hr>
					<a class="btn btn-info btn-block" data-dismiss="modal" data-toggle="modal" data-target="#enterModal">Авторизация</a>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- окно восстановления пароля -->
<div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Восстановить пароль<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="?mod=auth" id="fRestore">
					<input type="email" class="form-control" name="email" placeholder="Введите ваш e-mail"><br/>
					<button class="btn btn-success btn-block" name="auth">Восстановить пароль</button>
					<hr>
					<a class="btn btn-info btn-block" data-dismiss="modal" data-toggle="modal" data-target="#enterModal">Назад</a>
				</form>
			</div>
		</div>
	</div>
</div>
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
					<p><i class="fa fa-check"></i> Вы можете сообщить об ошибке или задать вопрос администрации в форме ниже.</p>
					<p><i class="fa fa-check"></i> Вы получите ответ на указанный вами адрес электронной почты.</p>
					<p><i class="fa fa-check"></i> Чтобы иметь возможность получить ответ в виде личного сообщения в кабинете платформы выполните <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#enterModal">вход/регистрацию</a>.</p>
				</div>
				<p><textarea id="adv-descr" required="required" class="form-control col-xs-12" rows="4" placeholder="Вопрос или обращение к команде Descrow"></textarea><div class="clear"></div></p>
				<p><input type="email" required="required" class="form-control col-xs-12" placeholder="Ваш e-mail для обратной связи"><div class="clear"></div></p>
				<p><button type="button" class="btn btn-success">Отправить</button></p>
				
			</div>
		</div>
	</div>
</div>
<!-- окно справки раздела -->
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Справка по разделу<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<div id="myCarousel" class="carousel slide" data-interval="false">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
					<div class="item active">
					  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Aspect_ratio_-_4x3.svg/2000px-Aspect_ratio_-_4x3.svg.png" alt="">
					</div>

					<div class="item">
					  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Aspect_ratio_-_4x3.svg/2000px-Aspect_ratio_-_4x3.svg.png" alt="">
					</div>

					<div class="item">
					  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Aspect_ratio_-_4x3.svg/2000px-Aspect_ratio_-_4x3.svg.png" alt="">
					</div>
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Далее</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Назад</span>
				  </a>
				</div>
				
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
				  <div class="enterReg darkblue">
					<button type="button" class="btn btn-success noborder" data-toggle="modal" data-target="#enterModal">Вход / Регистрация</button>
					<div class="clear"></div>
				  </div>
				  <!-- /menu prile quick info -->
				  
				  <br />

				  <!-- sidebar menu -->
				  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

					<div class="menu_section">
					  <ul class="nav side-menu">
						<li><a href="ico-list.php"><i class="fa fa-database"></i> Все проекты на ICO <span class="fa"></span></a></li>
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
				<div class="announcement error">
					<h4>Ошибка подключения к базе данных</h4>
					На сайте ведутся технические работы.
				</div>
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
						</div>

						<ul class="nav navbar-nav navbar-right">
						  <li role="presentation" class="msgh">
							<a href="#" class="dropdown-toggle info-number" data-toggle="modal" data-target="#helpModal">
							  <i class="fa fa-question-circle"></i>
							</a>
						  </li>

						</ul>
					  </nav>
					  <div class="clearfix"></div>
					</div>

				  </div>
				  <!-- /top navigation -->