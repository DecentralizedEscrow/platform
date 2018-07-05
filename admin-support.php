<?php require_once('_top-admin.php'); ?>
				<section class="aSupport col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Вопросы технической поддержке</h2>
						  <button type="button" class="changeInfo pull-right btn btn-info noborder"><i class="fa fa-list-alt"></i> &nbsp;Отчеты в csv</button>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Жалобы <span class="label label-danger">2</span></a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Вопросы <span class="label label-danger">1</span></a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<div class="row">
											<div class="col-md-6">
												Поиск &nbsp;
												<select name="sField">
												  <option selected="" disabled="" hidden="">по полю</option>
												  <option>Дата</option>
												  <option>Жалоба на</option>
												  <option>А именно</option>
												  <option>Причина</option>
												  <option>Пожаловался</option>
												  <option>Статус</option>
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
												  <option selected>Нерешенные</option>
												  <option>Решенные</option>
												  <option>Все</option>
												</select>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Жалоба на <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">А именно <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Причина <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Пожаловался <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td><a href="#">Алексей Сабля</a></td>
												<td>Личное сообщение</td>
												<td>Оскорбление</td>
												<td><a href="#">Дмитрий Бородин</a></td>
												<td>не присвоен</td>
												<td><button type="button" class="btn btn-warning btn-sm noborder btn-block" data-toggle="modal" data-target="#viewRepModal">Посмотреть</button></td>
											  </tr>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td><a href="#">Алексей Сабля</a></td>
												<td>Вопрос стартапу</td>
												<td>Спам</td>
												<td><a href="#">Дмитрий Бородин</a></td>
												<td>не присвоен</td>
												<td><button type="button" class="btn btn-warning btn-sm noborder btn-block" data-toggle="modal" data-target="#viewRepModal">Посмотреть</button></td>
											  </tr>
											  <tr> <!-- пример отображения решенной жалобы -->
												<td>12.02.2018 21:10:34</td>
												<td><a href="#">Алексей Сабля</a></td>
												<td>Вопрос стартапу</td>
												<td>Спам</td>
												<td><a href="#">Дмитрий Бородин</a></td>
												<td>предупреж.</td>
												<td><button type="button" class="btn btn-info btn-sm noborder btn-block" data-toggle="modal" data-target="#viewReplModal">Отчет</button></td>
											  </tr>
											</tbody>
										</table>
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
												  <option>Дата</option>
												  <option>Отправитель</option>
												  <option>Текст</option>
												  <option>Статус</option>
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
												  <option selected="">Нерешенные</option>
												  <option>Решенные</option>
												  <option>Все</option>
												</select>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Отправитель <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Текст <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td><a href="#">Алексей Сабля</a></td>
												<td>Подскажите пожалуйста, как приготовить пельмени?</td>
												<td>Не решен</td>
												<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#answModal">Посмотреть</button></td>
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

<!-- окно просмотра жалобы -->
<div class="modal fade" id="viewRepModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Просмотр жалобы<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Жалоба на <b>личное сообщение</b> пользователя <b><a href="#">Алексей Сабля</a></b> по причине <b>СПАМ</b></p>
				<p><b>Комментарий:</b> Данный пользователь отправляет мне сообщения рекламного характера последние несколько дней. Прошу принять меры!</p>
				<p><b>Пожаловался:</b> <a href="#">Дмитрий Бородин</a>, 12.02.2018 21:10:34</p>
				<p><b>Содержимое сообщения</b> (на которое жалоба):</p>
				<p>Спешите купить по невероятно выгодной цене лучшие кормушки для летучих мышей! Только у нас и только до завтрашнего дня: используйте промокод "азбука" и получите трехмесячный запас питьевой воды лучшего качества! [ссылка удалена]</p>
				<p><a href="#">Алексей Сабля</a>, 12.02.2018 21:08:13</p>
				<hr/>
				<p class="text-center">На пользователя <b><a href="#">Алексей Сабля</a></b>:<br/>
				Жалоб: <span class="text-danger"><b>2</b></span> <a href="#">(посмотреть все)</a>.<br/>
				Выдано предупреждений: <span class="text-danger"><b>1</b></span><br/>
				Было блокировок: <span class="text-success"><b>0</b></span></p>
				<hr/>
				<p class="text-center">
					<button type="button" class="btn btn-info button170" data-dismiss="modal" data-toggle="modal" data-target="#rejectRepModal">Отклонить жалобу</button>
					<button type="button" class="btn btn-warning button170" data-dismiss="modal" data-toggle="modal" data-target="#warnUsrModal">Выдать предупреждение</button>
					<button type="button" class="btn btn-danger button170" data-dismiss="modal" data-toggle="modal" data-target="#blockUsrModal">Заблокировать пользователя</button>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- окно отклонения жалобы -->
<div class="modal fade" id="rejectRepModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отклонить жалобу<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите отклонить жалобу на пользователю <b><a href="#">Алексей Сабля</a></b>?</p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Отклонить</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно выдачи предупреждения -->
<div class="modal fade" id="warnUsrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Выдать предупреждение<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите выдать предупреждение пользователю <b><a href="#">Алексей Сабля</a></b>?</p>
				<textarea class="form-control" rows="2" placeholder="Введите текст предупреждения"></textarea>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Выдать</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно подтверждения блокировки -->
<div class="modal fade" id="blockUsrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Заблокировать пользователя<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите заблокировать пользователя <b><a href="#">Алексей Сабля</a></b>?</p>
				<textarea class="form-control" rows="2" placeholder="Введите причину блокировки"></textarea><br/>
				<p>Срок блокировки: <input type="text" class="" /> дней.</p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-danger button140">Заблокировать</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра отчета о жалобе -->
<div class="modal fade" id="viewReplModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отчет о рассмотрении жалобы<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Пользователю <b><a href="#">Алексей Сабля</a></b> было выдано предупреждение 14.02.2018 21:10:34</p>
				<p>Оператор <b><a href="#">Роман Шпальников</a></b></p>
				<p><b>Текст предупреждения</b>: отсутствует.</p>
				<hr/>
				<p>Жалоба на <b>личное сообщение</b> пользователя <b><a href="#">Алексей Сабля</a></b> по причине <b>СПАМ</b></p>
				<p><b>Комментарий:</b> Данный пользователь отправляет мне сообщения рекламного характера последние несколько дней. Прошу принять меры!</p>
				<p><b>Пожаловался:</b> <a href="#">Дмитрий Бородин</a>, 12.02.2018 21:10:34</p>
				<p><b>Содержимое сообщения</b> (на которое жалоба):</p>
				<p>Спешите купить по невероятно выгодной цене лучшие кормушки для летучих мышей! Только у нас и только до завтрашнего дня: используйте промокод "азбука" и получите трехмесячный запас питьевой воды лучшего качества! [ссылка удалена]</p>
				<p><a href="#">Алексей Сабля</a>, 12.02.2018 21:08:13</p>
				<hr/>
				<p class="text-center">На пользователя <b><a href="#">Алексей Сабля</a></b>:<br/>
				Жалоб: <span class="text-danger"><b>2</b></span> <a href="#">(посмотреть все)</a>.<br/>
				Выдано предупреждений: <span class="text-danger"><b>1</b></span><br/>
				Было блокировок: <span class="text-success"><b>0</b></span></p>
			</div>
		</div>
	</div>
</div>

<!-- окно ответа на вопрос пользователя -->
<div class="modal fade" id="answModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Вопрос пользователя - Иван Грозный<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				
				<div class="questions">
					<div class="question">
					<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name">Алексей Сабля <span class="pull-right date text-muted">10.12.2017 10:55:24</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Подскажите пожалуйста, как приготовить пельмени?
						</div>
					</div>
					<div class="question bg-grey">
						<div class="ava"><img src="images/des/des-user.jpg" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name"><b>[Descrow]</b> Вирасетакул Апичатпонг <span class="pull-right date text-muted">10.12.2017 10:55:28</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Вылейте в миску теплую воду и молоко, разбейте туда яйцо и добавьте соль. Перемешайте до растворения соли. 
							Просейте муку на стол или в большую миску, сделайте в горке углубление и вылейте туда ранее приготовленный раствор. 
							Сначала смешайте все ложкой, затем помесите немного руками. Добавьте растительного масла (оно даст эластичность) и продолжайте замешивать. Если вы замешиваете в хлебопечке, масло лейте прямо на мешалку (флажок, который крутится и замешивает тесто). 
							Оставьте на 30–40 минут в теплом месте и начинайте делать фарш.
						</div>
					</div>
				</div>
				<hr>
				<div class="answer">
					<textarea id="answer" required="required" class="form-control" rows="3" placeholder="Ваш ответ..."></textarea><br/>
					<button type="button" class="btn btn-info">Ответить</button>
					<button type="button" class="btn btn-warning pull-right">Пометить как решенный</button>
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
