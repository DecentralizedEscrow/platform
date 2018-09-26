<?php require_once('_top-startup.php'); ?>
				<section class="dashboard">
					<div class="startupNo x_panel">
						<div class="x_title">
						  <h2>Регистрация стартапа</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<p>У вас еще нет своего стартапа. Чтобы добавить свой стартап на платформу, заполните форму заявки. После проверки и одобрения заявки нашей командой, вы получите доступ к расширенной функцильности: сможете дополнить информацию о проекте, добавить RoadMap и создать smart-contract.</p>
							<div class="add">
								<a href="startup-reg.php" class=""><button type="button" class="btn btn-success"><i class="fa fa-plus-square"></i> Добавить свой стартап</button></a>
								<!-- уведомление о проверке заявки -->
								<div class="notice hidden">Анкета вашего стартапа находится на модерации.</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel addWidget" data-toggle="modal" data-target="#addWModal"><i class="fa fa-plus-circle"></i> Добавить виджет</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel current tile">
								<div class="x_title">
									<h2>Текущий проект</h2>
									<ul class="nav navbar-right panel_toolbox">
									  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
									  <li><a class="close-link"><i class="fa fa-close"></i></a></li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content myStartup">
									<div class="icoCard col-sm-4 col-xs-12"><div>
									<div class="img"><img src="http://www.thebohoguide.com/wp-content/uploads/job-manager-uploads/main_image/2016/09/Panorama-Fraser-Island.jpg" alt=""></div>
									<div class="summary">
										<div class="name">Завод стеклянных пылесосов</div>
										<div class="status"><span class="text-success">Одобрен</span> | <span class="text-danger">требуется наполнение</span></div>
										<div class="notice">Для запуска проекта необходимо: <span class=""><a href="#">заполнить RoadMap</a>, <a href="startup-add-smart.php">создать смарт-контракт</a></span></div>
										<!--<div class="descr">Описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis.</div>
										<div class="">
											<div class="pull-left">Прогресс 45%</div>
											<div class="pull-right">Осталось: 35 дней</div>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div></div>
										<div class="money">
											Собрано: $ 1 583 354<br>
											Цель: $ 3 518 564
										</div>-->
									</div>
									<div class="btns"><div>
										<div>
											<button type="button" class="btn btn-success noborder btn-sm"> Запустить ICO</button> <!-- отображается в случае, если выбран ручной запуск ICO и оно еще не было запущено -->
											<button type="button" class="btn btn-danger noborder btn-sm"> Завершить ICO</button> <!-- отображается в случае, если выбрано ручное завершение ICO и оно уже было запущено но не было завершено -->
											<a href="startup.php"><button type="button" class="btn btn-info noborder btn-sm"> Страница стартапа</button></a>
											<a href="startup-edit.php"><button type="button" class="btn btn-warning noborder btn-sm"> Изменить информацию</button></a>
										</div>
									</div></div>
								</div></div>
								</div>
							</div>
						</div>
						<!-- Виджет отображается для проекта на стадии идеи вместо виджета статистики голосований -->
						<!-- <div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Интерес к проекту</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="interest x_content">
								<h4>Ваш проект: &laquo;Децентрализованный молочный завод&raquo;</h1>
								<p class="text-muted">Добавлен 12 дней назад</p><br/>
								<p>Количество инвесторов, заинтересованных проектом: <b><span class="text-success">24</span></b></p>
								<p>Готовность выделения средств на проект: <b><span class="text-success">$ 375 000</span></b></p>
								<p>Задано вопросов проекту: <b>17</b></p><br/>
								<button class="btn btn-success">Управление проектом</button>
							  </div>
							</div>
						</div>-->
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Последнее голосование</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="vote x_content">
								<div class="col-md-5">
									<div class="voteChart" style="width:140px; margin-top: 10px;"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe><canvas id="canvasDoughnut" height="140" width="140"></canvas></div>
								</div>
								<div class="col-md-7">
									<div class="percentage" style="min-width: 200px;">
										<p style="font-size: 15px;">Голосование за 3 этап<br/>- завершено</p>
										<p><i class="fa fa-square green"></i> 60% (4 холд.) - ЗА</p>
										<p><i class="fa fa-square blue"></i> 15% (1 холд.) - МОЛЧУНЫ</p>
										<p><i class="fa fa-square red"></i> 30% (2 холд.) - ПРОТИВ</p>
									</div>
								</div>
								<div class="clearfix"></div>
								<div class="status">Положительно завершено 5 дней назад</div>
								<div class="clearfix"></div>
							  </div>
							</div>
							<!-- charts -->
							<script src="js/chartjs/chart.min.js"></script>
							<script>
							  Chart.defaults.global.legend = {
								  enabled: false
								};

								  // Doughnut chart
									var ctx = document.getElementById("canvasDoughnut");
									var data = {
									  labels: [
										"ЗА",
										"МОЛЧУНЫ",
										"ПРОТИВ"
									  ],
									  datasets: [{
										data: [4, 1, 2],
										backgroundColor: [
										  "#1ABB9C",
										  "#3498DB",
										  "#E74C3C"
										],
										hoverBackgroundColor: [
										  "#4ACBAC",
										  "#64B8DB",
										  "#F75C5C"
										]

									  }]
									};

									var canvasDoughnut = new Chart(ctx, {
									  type: 'doughnut',
									  tooltipFillColor: "rgba(51, 51, 51, 0.55)",
									  data: data,
									  responsive: true,
									maintainAspectRatio: false,
									scales: {
										yAxes: [{
											ticks: {
												beginAtZero:true
											}
										}]
									}
									});
							  </script>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Последние вопросы</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="questions x_content">
								<div class="msg">
									<div class="txt">
										<span class="name">Арсений мамонт</span>
										<span class="time">- 12.05.2018 14:15</span>
									</div>
									<div class="message">Как ваш проект поможет справиться с безработицей в среде опытных пчеловодов?</div>
									<div class="clearfix"></div>
								</div>
								<div class="msg">
									<div class="txt">
										<span class="name">Jack Smith</span>
										<span class="time">- 12.05.2018 10:48</span>
									</div>
									<div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ex tortor, porta vitae sem non, pretium molestie ante...</div>
									<div class="clearfix"></div>
								</div>
								<div class="msg">
									<div class="txt">
										<span class="name">Федор Алексеевич</span>
										<span class="time">- 11.05.2018 18:03</span>
									</div>
									<div class="message">Как обстоят дела с отказоустойчивостью и скоростью доступа из других регионов?</div>
									<div class="clearfix"></div>
								</div>
								<div class="gotoQuestions"><a href="exchange - main.php"><button class="btn btn-warning btn-xs noborder">Посмотреть все вопросы</button></a></div>
								<div class="clearfix"></div>
							  </div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Дорожная карта</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="roadmap x_content">
								<ul class="list-unstyled timeline">
									  <li>
										<div class="block">
										  <div class="tags">
											<a href="" class="tag inprogress">
											  <span>#3 - 14.05.2018</span>
											</a>
										  </div>
										  <div class="block_content">
											<table><tbody><tr>
												<td class="descr">
													<h2 class="title"><a>Тестирование и запуск финальной версии продукта</a></h2>
													<p class="excerpt">Исправление багов, внедрение ситсемы заявок и взаимодействия с региональными струкртурами. Нагрузочное тестирование и адаптация технической базы.</p>
												</td>
												<td class="percentage">
													<span class="align-middle">35%</span>
												</td>
											</tr></tbody></table>
										  </div>
										</div>
									  </li>
									  <li>
										<div class="block">
										  <div class="tags">
											<a href="" class="tag done">
											  <span>#2 - 01.05.2018</span>
											</a>
										  </div>
										  <div class="block_content">
											<table><tbody><tr>
												<td class="descr">
													<h2 class="title"><a>Запуск прототипа и доработка</a></h2>
													<p class="excerpt">Реализация прототипа функционально соответствующего техническому заданию (п4.2). Проведение закрытого тестирования, сбор отзывов и пожеланий пользователей.</p>
												</td>
												<td class="percentage">
													<span class="align-middle">40%</span>
												</td>
											</tr></tbody></table>
										  </div>
										</div>
									  </li>
									  <li>
										<div class="block">
										  <div class="tags">
											<a href="" class="tag done">
											  <span>#1 - 25.04.2018</span>
											</a>
										  </div>
										  <div class="block_content">
											<table><tbody><tr>
												<td class="descr">
													<h2 class="title"><a>Подготовка технической базы</a></h2>
													<p class="excerpt">Закупка и установка серверных решений, необходимых для реализации проекта. Доработка концепции и основная стадия разрабдотки программного продукта.</p>
												</td>
												<td class="percentage">
													<span class="align-middle">25%</span>
												</td>
											</tr></tbody></table>
										  </div>
										</div>
									  </li>
									</ul>
								<div class="clearfix"></div>
							  </div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Кошелек проекта</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="wallet x_content">
								<div class="balance">
									Ваш баланс: <b>49&nbsp;ETH | 203&nbsp;DES</b>
								</div>
								<hr>
								<div class="ethAddr">
									<div class="oper col-md-12 col-xs-12">
									<div>Ethereum адрес</div>
									<div><input class="col-md-12 col-xs-12"type="text" id="ethAddr" value="0xde0B295669a9FD93d5F28D9Ec85E40f4cb697BA9" disabled></div>
									</div>
								</div>
								<div class="">
									<div class="oper col-md-12 col-xs-12">
										<div class="eth row">
											<div class="col-md-6 col-xs-12"><input type="text" id="ethAmount" placeholder="Кол-во"> ETH</div>
											<div class="col-md-6 col-xs-12"><button class="btn btn-warning" data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-success" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button></div>
										</div>
										<div class="des row">
											<div class="col-md-6 col-xs-12"><input type="text" id="ethAmount" placeholder="Кол-во"> DES</div>
											<div class="col-md-6 col-xs-12"><button class="btn btn-warning" data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-success" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button></div>
										</div>
									</div>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Реферальная система</h2>
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
									Cсылка на ваш проект <br/>
									<div class="refLink"><span id="plnk">https://descrow.com/?sid=startupId</span> <button type="button" class="btn btn-success btn-xs noborder" onclick="copyToClipboard(document.getElementById('plnk'));">Скопировать</button></div>
								</div>
								<div>Установлена реферальная ставка в <b>5%</b> от финансирования, полученного от приглашенных пользователей <button type="button" class="btn btn-warning noborder btn-xs" data-toggle="modal" data-target="#changeRefModal">Изменить</button></div>
								<div>Заходов по реферальным ссылкам: <span class="text-success">1216</span></div>
								<div>Профинансировало по реферальным ссылкам: <span class="text-success">32</span></div>
								<div>Сумма финансирования по реферальным ссылкам: <span class="text-success">$ 24 390</span></div>
								<div>Издержки на реферальные бонусы: <span class="text-danger">$ 1 220</span></div>
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
<!-- окно изменения реф ставки -->
<div class="modal fade in" id="changeRefModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Реферальная ставка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<p>Реферальная ставка проекта:</p>
				<p><input type="text" placeholder="%"></p>
				<p><button type="button" class="btn btn-success">Установить</button></p>
				<hr>
				<div class="notice">
					<p><i class="fa fa-check"></i> Реферальная ставка определяет процент вознаграждения пользователя от суммы вложений привлеченных им клиентов.</p>
					<p><i class="fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей токенами платформы Descrow (DES) по текущему на тот момент курсу.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- окно пополнения кошелька -->
<div class="modal fade" id="cryptoAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Пополнить кошелек ETH<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body"><center>
				<p>Для пополнения кошелька, переведите ETH на адрес:</p>
				<p><b><span id="yaddress">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-success btn-xs noborder" onclick="copytext('moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g', this);">Скопировать</button></p>
			</center></div>
		</div>
	</div>
</div>
<!-- окно перевода с кошелька -->
<div class="modal fade" id="cryptoTransferModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Вывести ETH<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div><span>Перевести</span> <input type="text" placeholder="Сумма"></div>
						<div><span>На адрес</span> <input type="text" placeholder="0x..."></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Перевести</button></div>
					</div>
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

</body>

</html>
