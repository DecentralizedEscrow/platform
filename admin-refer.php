<?php require_once('_top-admin.php'); ?>
				<section class="aRefer col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Партнерская программа</h2>
						  <button type="button" class="changeInfo pull-right btn btn-info noborder"><i class="fa fa-list-alt"></i> &nbsp;Отчеты в csv</button>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Сводка</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Программы</a></li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Участники</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Партнерские программы</h2></div>
											<div class="col-md-3">Программ: <b><span class="text-success">8</span></b></div>
											<div class="col-md-3">Участников: <b><span class="text-success">27</span></b></div>
											<div class="col-md-3">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select><button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
										</div><br/>
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="refChart" width="889" height="444"></canvas>
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
												  <option>Стратап</option>
												  <option>Ставка</option>
												  <option>Создан</option>
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
												  <option selected="">Активные</option>
												  <option>Все</option>
												</select>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Стратап <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Ставка <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Рефералов <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. сборов <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. сумма <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Создан <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="#" title="Система дистанционного траспортного окнтроля">Система дистанционного...</a></td>
												<td>7%</a>
												<td><a href="#">57</a></td>
												<td>100 ETH</td>
												<td>7 ETH</td>
												<td>27.05.2018 12:43</td>
												<td>Активен</td>
												<td><button type="button" class="btn btn-warning btn-sm noborder">Просмотр</button></td>
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
												  <option>Участник</option>
												  <option>В программах</option>
												  <option>Рефералов</option>
												  <option>Реф. инвест</option>
												  <option>Реф. сумма</option>
												  <option>Посл. рег.</option>
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
												<th><a href="#">Участник <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">В программах <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Рефералов <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. инвест <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Реф. сумма <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#" title="Дата последней регистрации последнего реферала">Посл. рег. <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="#">Валентин Медведев</a></td>
												<td><a href="#">4</a></td>
												<td><a href="#">54</a></td>
												<td>100.0394 ETH</td>
												<td>7.0122 ETH</td>
												<td>27.05.2018</td>
												<td><button type="button" class="btn btn-warning btn-sm noborder">Просмотр</button></td>
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
var ctx = document.getElementById("refChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Участников",
	  backgroundColor: "rgba(38, 185, 154, 0.31)",
	  borderColor: "rgba(38, 185, 154, 0.7)",
	  pointBorderColor: "rgba(38, 185, 154, 0.7)",
	  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	  pointHoverBackgroundColor: "#fff",
	  pointHoverBorderColor: "rgba(220,220,220,1)",
	  pointBorderWidth: 1,
	  data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27]
	}, {
          label: "Реф. транзакций",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [1, 4, 5, 5, 5, 7, 8, 12, 14, 14, 15, 16, 16, 18, 18, 18]
    }, {
          label: "Программ",
          backgroundColor: "rgba(3, 44, 88, 0.3)",
          borderColor: "rgba(3, 44, 88, 0.70)",
          pointBorderColor: "rgba(3, 44, 88, 0.70)",
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
