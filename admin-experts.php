<?php require_once('_top-admin.php'); ?>
				<section class="aExperts col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Эксперты</h2>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Сводка</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Эксперты <span class="label label-danger">1</span></a></li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Заявки</a></li>
								  <li role="presentation" class=""><a href="#tab_content4" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">Отзывы</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-4"><h2>Количество экспертов</h2></div>
											<div class="col-md-3">Зарегистрировано: <b><span class="text-success">127</span></b></div>
											<div class="col-md-3">За последние 24 часа: <b><span class="text-success">8</span></b></div>
											<div class="col-md-2">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select></div>
										</div><br/>
										<div class="dchart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="expChart" width="889" height="444"></canvas>
										</div>
										<hr/>
										<div class="row stat">
											<div class="col-md-4"><h2>Количество заявок</h2></div>
											<div class="col-md-3">Заявок: <b><span class="text-success">19</span></b></div>
											<div class="col-md-3">За последние 24 часа: <b><span class="text-success">2</span></b></div>
											<div class="col-md-2">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select></div>
										</div><br/>
										<div class="dchart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="reqChart" width="889" height="444"></canvas>
										</div>
										<hr/>
										<div class="row stat">
											<div class="col-md-4"><h2>Отклики, сделки</h2></div>
											<div class="col-md-3">Количество откликов: <b><span class="text-success">112</span></b></div>
											<div class="col-md-3">Количество сделок: <b><span class="text-success">8</span></b></div>
											<div class="col-md-2">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select></div>
										</div><br/>
										<div class="dchart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="respChart" width="889" height="444"></canvas>
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
												  <option>ФИО</option>
												  <option>Регистрация</option>
												  <option>Анкета</option>
												  <option>Статус</option>
												  <option>Проекты</option>
												  <option>Предложения</option>
												  <option>Отзывы</option>
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
												  <option selected="">Непроверенные</option>
												  <option>Все</option>
												</select>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">id <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">ФИО <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Регистрация <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Анкета <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Проектов"><i class="fa fa-institution"></i> <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Предложений"><i class="fa fa-bell"></i> <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Отзывов"><i class="fa fa-thumbs-up"></i> <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Операции <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>1</td>
												<td><a href="#">Арсений Мамонт</a></td>
												<td>12.04.2018</td>
												<td>22.06.2018</td>
												<td>Модерация</td>
												<td><a href="#">2</a></td>
												<td><a href="#">12</a></td>
												<td><a href="#">1</a></td>
												<td>
													<select name="oper">
													  <option selected disabled hidden>Выберите операцию</option>
													  <option>Показать анкету</option>
													  <option>Показать проекты</option>
													  <option>Показать отзывы</option>
													  <option>Показать предложения</option>
													  <option>Привязать к проекту</option>
													  <option>Открыть карточку</option>
													  <option>Отправить сообщение</option>
													  <option>Просмотр личных сообщений</option>
													  <option>Блокировать пользователя</option>
													</select>
												</td>
											  </tr>
											</tbody>
										</table>
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="tab3">
									<div class="x_panel">
									  <div class="x_content">
										<div class="row">
											<div class="col-md-6">
												Поиск &nbsp;
												<select name="sField">
												  <option selected="" disabled="" hidden="">по полю</option>
												  <option>Дата</option>
												  <option>Статус</option>
												  <option>Стартап</option>
												  <option>Коммпетенция</option>
												  <option>Сумма</option>
												  <option>Просмотров</option>
												  <option>Откликнулось</option>
												  <option>Исполнитель</option>
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
												  <option selected="">Актуальные</option>
												  <option>В работе</option>
												  <option>Завершенные</option>
												  <option>Все</option>
												</select>
											</div>
										</div><hr/>
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Коммпетенция <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#" title="Просмотров"><i class="fa fa-eye"></i> <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#" title="Откликнулось"><i class="fa fa-thumbs-up"></i> <i class="fa fa-caret-down"></i></a></th>
													<th>Исполнитель <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>12.02.2018 21:10</td>
													<td>В работе</td>
													<td><a href="#" title="Децентрализованный механический завод">Децентрализованный...</a></td>
													<td><a href="#">Программист blockchain</a></td>
													<td>$2000/м</td>
													<td>13</td>
													<td>4</td>
													<td><a href="#">Борис Бритва</a></td>
													<td><button type="button" class="btn btn-warning btn-sm noborder">Посмотреть</button></td>
												  </tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="tab4">
									<div class="x_panel">
									  <div class="x_content">
										<div class="row">
											<div class="col-md-6">
												Поиск &nbsp;
												<select name="sField">
												  <option selected="" disabled="" hidden="">по полю</option>
												  <option>Дата</option>
												  <option>Тип</option>
												  <option>Эксперт</option>
												  <option>Стартап</option>
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
												  <option selected="">Все отзывы</option>
												  <option>Отзывы экспертов</option>
												  <option>Отзывы стартапов</option>
												</select>
											</div>
										</div><hr/>
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Тип <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Эксперт <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>12.02.2018 21:15</td>
													<td>Стартап</td>
													<td><a href="#">Владимир Прохоров</a></td>
													<td><a href="#">Система дистанционного регулирования</a></td>
													<td><button type="button" class="btn btn-warning btn-sm noborder">Посмотреть</button></td>
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

<!-- окно -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Купить токены проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<p>Купить <b><span class="text-success">10 000</span></b> токенов проеката <b>&laquo;Металлургический завод&raquo;</b> за <b><span class="text-success">2.234 ETH</span></b></p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-success">Купить</button><button type="button" class="btn btn-warning" data-dismiss="modal">Отмена</button></p>
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
var ctx = document.getElementById("expChart");
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
var ctx = document.getElementById("reqChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Заявки",
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
// Line chart 3
var ctx = document.getElementById("respChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Отклики",
	  backgroundColor: "rgba(38, 185, 154, 0.31)",
	  borderColor: "rgba(38, 185, 154, 0.7)",
	  pointBorderColor: "rgba(38, 185, 154, 0.7)",
	  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	  pointHoverBackgroundColor: "#fff",
	  pointHoverBorderColor: "rgba(220,220,220,1)",
	  pointBorderWidth: 1,
	  data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27]
	}, {
          label: "Сделки",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [0, 1, 1, 1, 1, 1, 1, 1, 3, 4, 4, 5, 6, 8, 8, 8]
        }]
  },
});
</script>
</body>

</html>
