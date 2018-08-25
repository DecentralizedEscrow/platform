<?php require_once('_top.php'); ?>
			<section class="dashboard">
				<div class="row">
					<div class="topStat col-md-12 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
							  <div class="col-md-4 col-sm-4 col-xs-4 tsc">
								  <span class="count_top">Баланс - токены</span>
								  <div class="count">25 500</div>
							  </div>
							  <div class="col-md-4 col-sm-4 col-xs-4 tsc">
								  <span class="count_top">Баланс - Eth</span>
								  <div class="count">3.055</div>
							  </div>
							  <div class="col-md-4 col-sm-4 col-xs-4 tsc">
								  <span class="count_top">Доход от ДУ</span>
								  <div class="count">+6%</div>
							  </div>
							</div>
							<div class="notice col-md-6 col-sm-12 col-xs-12"><div>
								Ожидается подтверждение двухфакторной авторизации
							</div></div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel addWidget" data-toggle="modal" data-target="#addWModal"><i class="fa fa-plus-circle"></i> Добавить виджет</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="x_panel tile">
						  <div class="x_title">
							<h2>Участвую в проектах</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							<!-- пример вывода проектов -->
							<!--<table class="table table-striped valign-m">
								<tbody>
								  <tr>
									<td><a href="startup.php">Test project 1</a></td>
									<td>10 000 т = $ 1 450</td>
								  </tr>
								  <tr>
									<td><a href="startup.php">Test project 6</a></td>
									<td>12 500 т = $ 1 800</td>
								  </tr>
								</tbody>
							</table>
							<div class="clearfix"></div>-->
							
							<!-- пример вывода, когда в блоке нечего отображать -->
							<div class="widget-ph">
								Вы еще не приняли участия ни в одном проекте<br/>
								<a href="ico-list.php"><i class="fa fa-plus-circle"></i><br/>Посмотреть все проекты</a>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="x_panel tile">
						  <div class="x_title">
							<h2>Избранные проекты</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							<!-- пример вывода избранных проектов -->
							<!--<table class="table table-striped valign-m">
								<tbody>
								  <tr>
									<td><a href="startup.php">Test project 4</a></td>
									<td>
										<div>
											<div class="pLabel">
												<div class="pull-left">Прогресс 67%</div>
												<div class="pull-right">Ост: 25 дней</div>
												<div class="clearfix"></div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="67" style="width: 67%;" aria-valuenow="67"></div></div>
										</div>
									</td>
								  </tr>
								  <tr>
									<td><a href="startup.php">Test project 2</a></td>
									<td>
										<div>
											<div class="pLabel">
												<div class="pull-left">Прогресс 45%</div>
												<div class="pull-right">Ост: 35 дней</div>
												<div class="clearfix"></div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div></div>
										</div>
									</td>
								  </tr>
								  <tr>
									<td><a href="startup.php">Test project 5</a></td>
									<td>
										<div>
											<div class="pLabel">
												<div class="pull-left">Прогресс 12%</div>
												<div class="pull-right">Ост: 58 дней</div>
												<div class="clearfix"></div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="12" style="width: 12%;" aria-valuenow="12"></div></div>
										</div>
									</td>
								  </tr>
								</tbody>
							</table>
							<div class="clearfix"></div>-->
							
							<!-- пример вывода, когда в блоке нечего отображать -->
							<div class="widget-ph">
								Вы еще не добавили ни одного проекта в избранное<br/>
								<a href="ico-list.php"><i class="fa fa-plus-circle"></i><br/>Посмотреть все проекты</a>
							</div>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12">
						<div class="x_panel tile">
						  <div class="x_title">
							<h2>Биржа токенов</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="exchange x_content">
							<table class="table table-striped valign-m">
								<tbody>
								  <tr>
									<td>22.04.2018 21:35</td>
									<td><span class="sell">Sell</span></td>
									<td><a href="#">XMPST</a></td>
									<td>3800 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 21:22</td>
									<td><span class="buy">Buy</span></td>
									<td><a href="#">TST1</a></td>
									<td>1000 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 21:19</td>
									<td><span class="buy">Buy</span></td>
									<td><a href="#">TST2</a></td>
									<td>2400 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 16:34</td>
									<td><span class="sell">Sell</span></td>
									<td><a href="#">XMPST</a></td>
									<td>1100 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 16:28</td>
									<td><span class="sell">Sell</span></td>
									<td><a href="#">XMPST</a></td>
									<td>1000 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 16:11</td>
									<td><span class="sell">Sell</span></td>
									<td><a href="#">XMPST</a></td>
									<td>1000 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 10:57</td>
									<td><span class="sell">Sell</span></td>
									<td><a href="#">XMPST</a></td>
									<td>1000 USD</td>
								  </tr>
								  <tr>
									<td>22.04.2018 10:35</td>
									<td><span class="sell">Sell</span></td>
									<td><a href="#">XMPST</a></td>
									<td>1000 USD</td>
								  </tr>
								</tbody>
							</table>
							<div class="gotoEx"><a href="exchange - main.php"><button class="btn btn-warning btn-xs noborder">Перейти на биржу</button></a></div>
							<div class="clearfix"></div>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="x_panel tile">
						  <div class="x_title">
							<h2>Рефералы</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="ref x_content">
							<div>
								<div>Ваша реферальная ссылка:</div>
								<div id="lnk" onclick="copyToClipboard(document.getElementById('lnk'));">https://descrow.com/reg?rid=2</div>
							</div>
							<div>
								<div>Рефералов за сегодня: 2</div>
								<div>Рефералов за месяц: 14</div>
								<div>Рефералов за год: 18</div>
								<div>Рефералов всего: 18</div>
							</div>
							<div>Участие в бонусных программах: 4</div>
							<a href="user - refer.php"><button type="button" class="btn btn-info noborder">Подробнее</button></a>
							<div class="clearfix"></div>
						  </div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="x_panel tile">
						  <div class="x_title">
							<h2>Tweets</h2>
							<ul class="nav navbar-right panel_toolbox">
							  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							  </li>
							  
							  <li><a class="close-link"><i class="fa fa-close"></i></a>
							  </li>
							</ul>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							
							<div class="clearfix"></div>
						  </div>
						</div>
					</div>
				</div>
			</section>
		  </div>
		</div>
		</div>
	  </div>
	  <div class="clearfix"></div>
	</div>

  </div>
  <!-- /page content -->
</div>

<!-- окно добавления виджета -->
<div class="modal fade" id="addWModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавить виджет<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<div class="wList">
					<div>Название виджета</div>
					<div>Название виджета</div>
					<div>Название виджета</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>
  
  <script>
	$(document).ready(function () {
		$(".notice").fadeTo('slow', 0.5).fadeTo('slow', 1).fadeTo('slow', 0.5).fadeTo('slow', 1);
	});
  </script>

</body>

</html>
