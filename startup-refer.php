<?php require_once('_top-startup.php'); ?>
				<section class="userRef col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Реферальная система</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							
							<div class="rBlock">
								<p>Реферальная ставка стартапа</p> 
								<div class="refLink"><span id="plnk">5%</span> <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#changeRefModal">Изменить</button></div>
							</div>
							<p><i class="text-success fa fa-check"></i> Реферальная ставка определяет процент вознаграждения пользователя от суммы вложений привлеченных им клиентов.</p>
							<p><i class="text-success fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей.</p>
							<hr/>
							<div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Текущий проект</a>
								  </li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Название архивного проекта</a>
								  </li>
								</ul>
								<div id="infoTabContent" class="tab-content">

								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
									    <hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Рефералы текущего проекта</h2></div>
											<div class="col-md-3">Рефоводов в программе: <span>27</span></div>
											<div class="col-md-3">Всего реф. переходов: <span>127</span></div>
											<div class="col-md-3">Период: <select><option selected="">неделя</option><option>месяц</option><option>год</option><option>все</option></select><button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
											<div class="col-md-3"></div>
											<div class="col-md-3">Всего реф. регистраций: <span>31</span></div>
											<div class="col-md-3">Всего реф. транзакций: <span>8</span></div>
										</div>
										<div class="refChart">
											<canvas id="lineChart"></canvas>
										</div>
										<hr/>
										
										<div class="row stat">
											<div class="col-md-4"><h2>Реферально привлеченные средства</h2></div>
											<div class="col-md-5"><span>1239</span> USD</div>
											<div class="col-md-3">Период: <select><option selected="">неделя</option><option>месяц</option><option>год</option><option>все</option></select><button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div>
										<div class="refChart">
											<canvas id="lineChart2"></canvas>
										</div>
										<hr/>
										<h2>Лучшие рефоводы проекта</h2>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Участник <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Рефералов <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Первый реф. <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Последний реф. <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. инвест <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. сумма <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="#">Валентин Медведев</a></td>
												<td><a href="#">54</a></td>
												<td>12.05.2018</td>
												<td>10.06.2018</td>
												<td>100.0394 ETH</td>
												<td>7.0122 ETH</td>
											</tr>
											</tbody>
										</table>
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Рефералы текущего проекта</h2></div>
											<div class="col-md-3">В программе: <span>27 человек</span></div>
											<div class="col-md-3">Реферальные транзакции: <span>8</span></div>
											<div class="col-md-3">Период: <select><option selected="">неделя</option><option>месяц</option><option>год</option><option>все</option></select><button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div>
										<div class="refChart">
											<canvas id="lineChart3"></canvas>
										</div>
										<hr/>
										
										<div class="row stat">
											<div class="col-md-4"><h2>Реферально привлеченные средства</h2></div>
											<div class="col-md-5"><span>1239</span> USD</div>
											<div class="col-md-3">Период: <select><option selected="">неделя</option><option>месяц</option><option>год</option><option>все</option></select><button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div>
										<div class="refChart">
											<canvas id="lineChart4"></canvas>
										</div>
										<hr/>
										<h2>Лучшие рефоводы проекта</h2>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Участник <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Рефералов <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Первый реф. <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Последний реф. <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. инвест <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. сумма <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="#">Валентин Медведев</a></td>
												<td><a href="#">54</a></td>
												<td>12.05.2018</td>
												<td>10.06.2018</td>
												<td>100.0394 ETH</td>
												<td>7.0122 ETH</td>
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

<!-- окно изменения ставки -->
<div class="modal fade" id="changeRefModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Реферальная ставка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<p>Реферальная ставка проекта:</p>
				<p><input type="text" placeholder="%" /></p>
				<p><button type="button" class="btn btn-success">Установить</button></p>
				<hr/>
				<div class="notice">
					<p><i class="fa fa-check"></i> Реферальная ставка определяет процент вознаграждения пользователя от суммы вложений привлеченных им клиентов.</p>
					<!--<p><i class="fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей токенами платформы Descrow (DES) по текущему на тот момент курсу.</p>-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- окно выбора периода отображения -->
<div class="modal fade" id="rangeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Выберите период для отображения<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<p class="text-center">Период &nbsp; <input type="date"> - <input type="date"></p>
				<hr>
				<p class="text-center"><button type="button" class="btn btn-info noborder">Показать</button></p>
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
	// enforce focus для работы copyToClipboard в модалке
	$.fn.modal.Constructor.prototype.enforceFocus = function() {};
	
    Chart.defaults.global.legend = {
      enabled: false
    };

    // Line chart
    var ctx = document.getElementById("lineChart");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["10.04.17", "11.04.17", "12.04.17", "13.04.17", "14.04.17", "15.04.17", "16.04.17", "17.04.17", "18.04.17", "19.04.17", "20.04.17", "21.04.17", "22.04.17", "23.04.17", "24.04.17", "25.04.17"],
        datasets: [{
          label: "Переходов",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: [16, 27, 48, 79, 31, 23, 35, 56, 78, 64, 55, 77, 42, 31, 60, 127]
        }, {
          label: "Регистраций",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [6, 7, 8, 19, 10, 13, 15, 20, 24, 21, 21, 22, 14, 12, 26, 37]
        }, {
          label: "Транзакций",
          backgroundColor: "rgba(3, 44, 88, 0.3)",
          borderColor: "rgba(3, 44, 88, 0.70)",
          pointBorderColor: "rgba(3, 44, 88, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [0, 1, 1, 3, 1, 1, 1, 1, 5, 3, 2, 1, 1, 1, 3, 6]
        }]
      },
	});
	// Line chart 2
    var ctx = document.getElementById("lineChart2");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
        datasets: [{
          label: "Привлечено средств, USD",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: [6, 44, 67, 146, 245, 296, 321, 450, 510, 713, 822, 877, 998, 1039, 1139, 1239]
        }, {
          label: "Реферальные отчисления, USD",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [10, 21, 31, 41, 51, 51, 61, 61, 63, 64, 74, 85, 96, 98, 98, 108]
        }]
      },
    });
	
	// Line chart 3
    var ctx = document.getElementById("lineChart3");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
        datasets: [{
          label: "Зарегистрировалось",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27]
        }, {
          label: "Совершило транзакции",
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
	// Line chart 4
    var ctx = document.getElementById("lineChart4");
    var lineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
        datasets: [{
          label: "Привлечено средств, USD",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: [6, 44, 67, 146, 245, 296, 321, 450, 510, 713, 822, 877, 998, 1039, 1139, 1239]
        }, {
          label: "Реферальные отчисления, USD",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [10, 21, 31, 41, 51, 51, 61, 61, 63, 64, 74, 85, 96, 98, 98, 108]
        }]
      },
    });
	</script>
  
</body>

</html>
