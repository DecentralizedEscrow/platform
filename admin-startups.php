<?php require_once('_top-admin.php'); ?>
				<section class="aStartups col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Стартапы</h2>
						  <div class="btn-group pull-right csvRep" role="group">
								<button id="btnGroupDrop1" type="button" class="btn btn-info noborder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-alt"></i> &nbsp;Отчеты в csv&nbsp; <i class="fa fa-caret-down"></i></button>
								<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
									<a class="dropdown-item" href="#">Стартапы</a>
									<a class="dropdown-item" href="#">Голосования</a>
								</div>
							</div>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Сводка</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Стартапы</a></li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Категории</a></li>
								  <li role="presentation" class=""><a href="#tab_content4" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">Тэги</a></li>
								  <li role="presentation" class=""><a href="#tab_content5" role="tab" id="tab5" data-toggle="tab" aria-expanded="false">Голосования</a></li>
								  <li role="presentation" class=""><a href="#tab_content6" role="tab" id="tab6" data-toggle="tab" aria-expanded="false">Анкеты <span class="label label-danger">1</span></a></li>
								  <li role="presentation" class=""><a href="#tab_content7" role="tab" id="tab7" data-toggle="tab" aria-expanded="false">Roadmap <span class="label label-danger">1</span></a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Количество стартапов</h2></div>
											<div class="col-md-3">Зарегистрировано: <b><span class="text-success">127</span></b></div>
											<div class="col-md-3">За последние 24 часа: <b><span class="text-success">8</span></b></div>
											<div class="col-md-3">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select> <button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div><br/>
										<!--<div class="row"><div class="col-md-12">График за период &nbsp; <input type="date"> - <input type="date"> <button>&gt;</button></div></div><br/>-->
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="startChart" width="889" height="444"></canvas>
										</div>
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Сбор средств стартапами</h2></div>
											<div class="col-md-3">Проинвестировало: <b><span class="text-success">19</span></b></div>
											<div class="col-md-3">Итого: <b><span class="text-success">27.6029 ETH</span></b></div>
											<div class="col-md-3">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select> <button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div><br/>
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="moneyChart" width="889" height="444"></canvas>
										</div>
									  </div>
									</div>
								  </div>
								  
								  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_content">
										<div class="row">
											<div class="col-md-6">
												Поиск &nbsp;
												<select name="sField">
												  <option selected="" disabled="" hidden="">по полю</option>
												  <option>id</option>
												  <option>Название</option>
												  <option>Категория</option>
												  <option>Сборы</option>
												  <option>Статус</option>
												  <option>Окончание этапа</option>
												  <option>Организатор</option>
												  <option>Создан</option>
												</select>
												=
												<input type="text">
												<button>Поиск</button>
											</div>
											<div class="col-md-6 text-right">
												Период &nbsp; <input type="date"/> - <input type="date"/> <button>></button>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">id <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Категория <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Сборы <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Окончание текущего этапа">Окон... <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Создан <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Организатор <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Просмотров"><i class="fa fa-eye"></i> <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Добавили в избранное"><i class="fa fa-star"></i> <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Задано вопросов"><i class="fa fa-question-circle"></i> <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Инвесторов"><i class="fa fa-briefcase"></i> <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>1</td>
												<td><a href="my-startup.php" title="Система дистанционного траспортного контроля">Система дис...</a></td>
												<td><a href="#">IT</a></td>
												<td>312.2 ETH</td>
												<td><a href="#">ICO</a></td>
												<td>13.08.2018</td>
												<td>13.05.2018</td>
												<td><a href="#">Вадим Шайба</a></td>
												<td><a href="#">116</a></td>
												<td><a href="#">52</a></td>
												<td><a href="#">34</a></td>
												<td><a href="#">19</a></td>
											  </tr>
											</tbody>
										</table>
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="tab3">
									<div class="x_panel">
									  <div class="x_content">
										<button type="button" class="btn btn-info"><i class="fa fa-envelope"></i> &nbsp;Новая категория</button>
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">uri <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Проектов <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>IT</td>
													<td>it</td>
													<td><a href="#">13</a></td>
													<td><button type="button" class="btn btn-warning btn-sm noborder">Изменить</button><button type="button" class="btn btn-danger btn-sm noborder">Удалить</button></td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="tab4">
									<div class="x_panel">
									  <div class="x_content">
										<button type="button" class="btn btn-info"><i class="fa fa-envelope"></i> &nbsp;Новый тэг</button>
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Проектов <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>IT</td>
													<td><a href="#">13</a></td>
													<td><button type="button" class="btn btn-warning btn-sm noborder">Изменить</button><button type="button" class="btn btn-danger btn-sm noborder">Удалить</button></td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="tab5">
									<div class="x_panel">
									  <div class="x_content">
										<div class="row">
											<div class="col-md-6">
												Поиск &nbsp;
												<select name="sField">
												  <option selected="" disabled="" hidden="">по полю</option>
												  <option>Дата</option>
												  <option>Стартап</option>
												  <option>Этап</option>
												  <option>Пользователь</option>
												  <option>Вес</option>
												  <option>Решение</option>
												</select>
												=
												<input type="text">
												<button>Поиск</button>
											</div>
											<div class="col-md-6 text-right">
												Период &nbsp; <input type="date"/> - <input type="date"/> <button>></button>
											</div>
											<div class="col-md-4 pull-right text-right">
												Отображать &nbsp;
												<select name="sField">
												  <option selected="">Все</option>
												  <option>Положительные</option>
												  <option>Отрицательные</option>
												</select>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Этап <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Голосов <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="За">+ <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Против">- <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Воздержались">~ <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Процент - за">% <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 14:57</td>
												<td><a href="#">Фабрика стеклянных пылесосов</a></td>
												<td>2</td>
												<td>100</td>
												<td>69</td>
												<td>29</td>
												<td>2</td>
												<td>71</td>
											  </tr>
											</tbody>
										</table>
									  </div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="tab6">
									<div class="x_panel">
									  <div class="x_content">
											<div class="col-md-4 pull-right text-right">
												Отображать &nbsp;
												<select name="sField">
												  <option selected="">Все</option>
												  <option>Первичная модерация</option>
												  <option>Вторичная модерация</option>
												</select>
											</div>
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Организатор  <i class="fa fa-caret-down"></i></a></th>
													<th title="Порядковый номер модерации"><a href="#"><i class="fa fa-recycle"></i> мод. <i class="fa fa-caret-down"></i></a></th>
													<th title="Изменено полей"><a href="#"><i class="fa fa-recycle"></i> полей  <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>12.02.2018 13:57</td>
													<td><a href="#">Фабрика стеклянных пылесосов</a></td>
													<td><a href="#">Алексей Борисов</a></td>
													<td>1</td>
													<td>4</td>
													<td><a href="admin-startup-moderate.php"><button type="button" class="btn btn-warning btn-sm noborder">Просмотр</button></a></td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="tab_content7" aria-labelledby="tab7">
									<div class="x_panel">
									  <div class="x_content">
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Организатор  <i class="fa fa-caret-down"></i></a></th>
													<th title="Изменено полей"><a href="#">Этапов  <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>12.02.2018 13:57</td>
													<td><a href="#">Фабрика стеклянных пылесосов</a></td>
													<td><a href="#">Алексей Борисов</a></td>
													<td>3</td>
													<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#rmModal">Просмотр</button></td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
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

  </div>

<!-- окно выбора периода для отображения -->
<div class="modal fade" id="rangeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Выберите период для отображения<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<p class="text-center">Период &nbsp; <input type="date"> - <input type="date"></p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-info noborder">Показать</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно модерации roadmap -->
<div class="modal fade" id="rmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				RoadMap проекта &laquo;Лучшие автобусные номера на заказ&raquo; <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<div class="x_panel">
				  <div class="x_content">
					<table class="table table-striped">
						<thead>
						  <tr>
							<th width="135">Этап</th>
							<th>Что будет сделано</th>
							<th class="text-right">Сколько нужно<br>средств в % от сборов</th>
						  </tr>
						</thead>
						<tbody>
						</tbody>
					</table>
					<ul class="list-unstyled timeline">
					  <li>
						<div class="block">
						  <div class="tags">
							<a href="" class="tag inprogress">
							  <span>#3 - 01.11.2018</span>
							</a>
						  </div>
						  <div class="block_content">
							<table><tbody><tr>
								<td class="descr">
									<h2 class="title"><a>Заголовок этапа</a></h2>
									<p class="excerpt">Краткое содержание этапа. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward</p>
								</td>
								<td class="percentage">
									<span class="align-middle">25%</span>
								</td>
							</tr></tbody></table>
						  </div>
						</div>
					  </li>
					  <li>
						<div class="block">
						  <div class="tags">
							<a href="" class="tag done">
							  <span>#2 - 01.10.2018</span>
							</a>
						  </div>
						  <div class="block_content">
							<table><tbody><tr>
								<td class="descr">
									<h2 class="title"><a>Заголовок этапа</a></h2>
									<p class="excerpt">Краткое содержание этапа. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward</p>
								</td>
								<td class="percentage">
									<span class="align-middle">25%</span>
								</td>
							</tr></tbody></table>
						  </div>
						</div>
					  </li>
					  <li>
						<div class="block">
						  <div class="tags">
							<a href="" class="tag done">
							  <span>#1 - 01.08.2018</span>
							</a>
						  </div>
						  <div class="block_content">
							<table><tbody><tr>
								<td class="descr">
									<h2 class="title"><a>Заголовок этапа</a></h2>
									<p class="excerpt">Краткое содержание этапа. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward</p>
								</td>
								<td class="percentage">
									<span class="align-middle">25%</span>
								</td>
							</tr></tbody></table>
						  </div>
						</div>
					  </li>
					</ul>
				  </div>
				</div>
				<p class="text-center"><button type="button" class="btn btn-success button140" data-dismiss="modal">Принять</button><button type="button" class="btn btn-danger button140" data-dismiss="modal" data-toggle="modal" data-target="#rejModal">Отклонить</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно отклонения модерации roadmap -->
<div class="modal fade" id="rejModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отклонить RoadMap<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите отклонить RoadMap проекта <b>«Тормозной завод им. Годара»</b>?</p>
				<textarea class="form-control" rows="2" placeholder="Введите причину отклонения"></textarea>
				<hr>
				<p class="text-center"><button type="button" class="btn btn-danger button140">Отклонить</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#rmModal">Назад</button></p>
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

  <!-- charts -->
  <script src="js/chartjs/chart.min.js"></script>
  
  <script src="js/custom.js"></script>

<script>
Chart.defaults.global.legend = {
  enabled: false
};
// Line chart
var ctx = document.getElementById("startChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Зарегистрировано",
	  backgroundColor: "rgba(38, 185, 154, 0.31)",
	  borderColor: "rgba(38, 185, 154, 0.7)",
	  pointBorderColor: "rgba(38, 185, 154, 0.7)",
	  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	  pointHoverBackgroundColor: "#fff",
	  pointHoverBorderColor: "rgba(220,220,220,1)",
	  pointBorderWidth: 1,
	  data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27]
	}]
  },
});
// Line chart 2
var ctx = document.getElementById("moneyChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Собрано, ETH",
	  backgroundColor: "rgba(38, 185, 154, 0.31)",
	  borderColor: "rgba(38, 185, 154, 0.7)",
	  pointBorderColor: "rgba(38, 185, 154, 0.7)",
	  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	  pointHoverBackgroundColor: "#fff",
	  pointHoverBorderColor: "rgba(220,220,220,1)",
	  pointBorderWidth: 1,
	  data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27.6029]
	}, {
          label: "Выплачено, ETH",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [0, 1, 1, 1, 1, 1, 1, 1, 3, 4, 4, 5, 6, 8, 8, 8.4001]
        }]
  },
});
</script>
</body>

</html>
