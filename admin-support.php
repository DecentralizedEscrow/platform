<?php require_once('_top-admin.php'); ?>
				<section class="aSupport col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Вопросы технической поддержке</h2>
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
												<td><button type="button" class="btn btn-warning btn-sm noborder">Посмотреть</button></td>
											  </tr>
											</tbody>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td><a href="#">Алексей Сабля</a></td>
												<td>Вопрос стартапу</td>
												<td>Спам</td>
												<td><a href="#">Дмитрий Бородин</a></td>
												<td><button type="button" class="btn btn-warning btn-sm noborder">Посмотреть</button></td>
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
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td><a href="#">Алексей Сабля</a></td>
												<td>Подскажите пожалуйста, как приготовить пельмени?</td>
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
