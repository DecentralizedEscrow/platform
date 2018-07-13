<?php require_once('_top-admin.php'); ?>
				<section class="aUsers col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Пользователи</h2>
						  <button type="button" class="changeInfo pull-right btn btn-info noborder"><i class="fa fa-list-alt"></i> &nbsp;Отчеты в csv</button>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Сводка</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Пользователи</a></li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Сообщения</a></li>
								  <li role="presentation" class=""><a href="#tab_content4" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">Рыссылки</a></li>
								  <li role="presentation" class=""><a href="#tab_content5" role="tab" id="tab5" data-toggle="tab" aria-expanded="false">Роли</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Количество пользователей</h2></div>
											<div class="col-md-3">Зарегистрировано: <b><span class="text-success">127</span></b></div>
											<div class="col-md-3">За последние 24 часа: <b><span class="text-success">8</span></b></div>
											<div class="col-md-3">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select> <button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div><br/>
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="regChart" width="889" height="444"></canvas>
										</div>
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Платящие пользователей</h2></div>
											<div class="col-md-3">Платящих пользователей: <b><span class="text-success">19</span></b></div>
											<div class="col-md-3">Коэффициент: <b><span class="text-success">0.43</span></b></div>
											<div class="col-md-3">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select> <button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div><br/>
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="payChart" width="889" height="444"></canvas>
										</div>
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Пользователи / стартапы</h2></div>
											<div class="col-md-3">Количество стартапов: <b><span class="text-success">24</span></b></div>
											<div class="col-md-3">Коэффициент: <b><span class="text-success">0.12</span></b></div>
											<div class="col-md-3">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select> <button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div><br/>
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="startupChart" width="889" height="444"></canvas>
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
												  <option selected disabled hidden>по полю</option>
												  <option>id</option>
												  <option>ФИО</option>
												  <option>Регистрация</option>
												  <option>Последний вход</option>
												  <option>Последний ip</option>
												  <option>Роль</option>
												</select>
												=
												<input type="text"/>
												<button>Поиск</button>
											</div>
											<div class="col-md-6 text-right">
												Отображать &nbsp;
												<select name="sField">
												  <option selected="">все</option>
												  <option>активные</option>
												  <option>заблокированные</option>
												</select>
											</div>
										</div>
										<hr/>
										<div class="over-x-auto">
											<table class="table table-striped valign-m style1">
												<thead>
												  <tr>
													<th><a href="#">id <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">ФИО <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Регистрация <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Последний вход <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Последний ip <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Роль <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#" title="Инвестировал в проекты"><i class="fa fa-briefcase"></i> <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#" title="Жалоб на пользователя"><i class="fa fa-exclamation-circle"></i> <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#" title="Выдано предупреждений"><i class="fa fa-exclamation-triangle"></i> <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>1</td>
													<td><a href="admin-user-moderate.php">Арсений Мамонт</a></td>
													<td>12.04.2018</td>
													<td>22.06.2018</td>
													<td><a href="#">219.79.134.5</a></td><!-- при нажатии выводит список всех пользователей с таким ip -->
													<td>user</td>
													<td><a href="#">4</a></td>
													<td><a href="#">3</a></td>
													<td>1</td>
													<td>Активен</td>
												  </tr>
												</tbody>
											</table>
										</div>
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
												  <option selected disabled hidden>по полю</option>
												  <option>Кому</option>
												  <option>От кого</option>
												  <option>Дата</option>
												  <option>Текст</option>
												</select>
												=
												<input type="text"/>
												<button>Поиск</button>
											</div>
											<div class="col-md-6 text-right">
												Период &nbsp; <input type="date"> - <input type="date"> <button>&gt;</button>
											</div>
											<div class="col-md-4 pull-right text-right">
												Отображать &nbsp;
												<select name="sField">
												  <option selected>все</option>
												  <option>личные сообщения</option>
												  <option>сообщения стартапам</option>
												</select>
											</div>
										</div>
										<hr/>
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Кому <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">От кого <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Текст <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="startup.php">Децентрализованный механический завод</a></td>
													<td><a href="admin-user-moderate.php">Алексей Сабля</a></td>
													<td>12.02.2018 21:10:34</td>
													<td>Продам медные ложки недорого...</td>
													<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#viewMesModal">Посмотреть</button></td>
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
												<button type="button" class="btn btn-info" data-toggle="modal" data-target="#newPromoModal"><i class="fa fa-envelope"></i> &nbsp;Новая рассылка</button>
											</div>
											<div class="col-md-6 text-right">
												Период &nbsp; <input type="date"> - <input type="date"> <button>&gt;</button>
											</div>
											<div class="col-md-4 pull-right text-right">
												Отображать &nbsp;
												<select name="sField">
												  <option selected="">Все</option>
												  <option>Стартапы</option>
												  <option>Эксперты</option>
												</select>
											</div>
										</div>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Кому <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Сообщение  <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Отправил  <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018</td>
												<td>Стартапы</td>
												<td>Промо рассылка 2</td>
												<td>Теперь вы можете пользоваться нашим новым сервисом...</td>
												<td><a href="admin-user-moderate.php">Алексей Борисов</a></td>
												<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#viewPromoModal">Посмотреть</button></td>
											  </tr>
											</tbody>
										</table>
										</div>
									</div>
								</div>
								
								<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="tab5">
									<div class="x_panel">
									  <div class="x_content">
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Пользователей с ролью  <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Дата редактирования  <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>Модератор</td>
													<td><a href="#">2</a></td>
													<td>12.02.2018</td>
													<td><button type="button" class="btn btn-warning btn-sm noborder">Редактировать</button></td>
												  </tr>
												  <tr>
													<td>Техническая поддержка</td>
													<td><a href="#">5</a></td>
													<td>12.04.2018</td>
													<td><button type="button" class="btn btn-warning btn-sm noborder">Редактировать</button></td>
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
			</div>
			<div class="modal-body">
				<p class="text-center">Период &nbsp; <input type="date"> - <input type="date"></p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-info noborder">Показать</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно создания рассылки -->
<div class="modal fade" id="newPromoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Новая рассылка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<input type="text" class="form-control" placeholder="Название рассылки"/><br/>
				<textarea rows="4" class="form-control" placeholder="Текст рассылки"></textarea><br/>
				Кто увидит рассылку
				<select>
				  <option selected>Все</option>
				  <option>Стартапы</option>
				  <option>Эксперты</option>
				</select><br/><br/>
				Язык рассылки
				<select>
				  <option selected>Русский</option>
				  <option>English</option>
				</select>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning noborder button140">Разослать</button><button type="button" class="btn btn-warning noborder button140">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра рассылки -->
<div class="modal fade" id="viewPromoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Рассылка &laquo;Промо рассылка 2&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<input type="text" class="form-control" placeholder="Название рассылки" value="Промо рассылка 2" /><br/>
				<textarea rows="4" class="form-control" placeholder="Текст рассылки">Теперь вы можете пользоваться нашим новым сервисом генерации идей для ICO.</textarea><br/>
				Кто видит рассылку
				<select>
				  <option selected>Все</option>
				  <option>Стартапы</option>
				  <option>Эксперты</option>
				</select><br/><br/>
				Язык рассылки
				<select>
				  <option selected>Русский</option>
				  <option>English</option>
				</select>
				<hr/>
				Рассылка редактировалась пользователем: <a href="admin-user-moderate.php">Андрей Логинов</a> (12.02.2018 12:36), <a href="admin-user-moderate.php">Василий Константинов</a> (12.02.2018 12:36)
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning noborder button140">Изменить</button><button type="button" class="btn btn-danger noborder button140" data-dismiss="modal" data-toggle="modal" data-target="#delPromoModal">Удалить</button><button type="button" class="btn btn-warning noborder button140" data-dismiss="modal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно удаления рассылки -->
<div class="modal fade" id="delPromoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Рассылка &laquo;Промо рассылка 2&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				Вы уверены, что хотите удалить данную рассылку?
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-danger noborder button140">Удалить</button><button type="button" class="btn btn-warning noborder button140" data-dismiss="modal" data-toggle="modal" data-target="#viewPromoModal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра сообщения -->
<div class="modal fade" id="viewMesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Сообщение - Алексей Сабля, 12.02.2018 21:08:13<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Продам медные ложки недорого! Также спешите купить по невероятно выгодной цене лучшие кормушки для летучих мышей! Только у нас и только до завтрашнего дня: используйте промокод "азбука" и получите трехмесячный запас питьевой воды лучшего качества! [ссылка удалена]</p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-danger noborder button140">Удалить</button><button type="button" class="btn btn-warning noborder button140" data-dismiss="modal" data-toggle="modal" data-target="#viewPromoModal">Отмена</button></p>
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
var ctx = document.getElementById("regChart");
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
var ctx = document.getElementById("payChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Коэффициент",
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
var ctx = document.getElementById("startupChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Коэффициент",
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
</script>
</body>

</html>
