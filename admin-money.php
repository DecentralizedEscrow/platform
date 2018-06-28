<?php require_once('_top-admin.php'); ?>
				<section class="aMoney col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Финансы</h2>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Сводка</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Кошельки</a></li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Рассылка токенов</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-4"><h2>Средства</h2></div>
											<div class="col-md-3">На кошельках: <b><span class="text-success">12.1345 ETH</span></b></div>
											<div class="col-md-3">Зарезервировано: <b><span class="text-success">2.0042 ETH</span></b></div>
											<div class="col-md-2">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select></div>
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
												  <option selected="">Инвесторские</option>
												  <option>Стартаперские</option>
												</select>
											</div>
										</div><hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Создан <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Адрес <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Тип <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Пользователь <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Баланс <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Резерв <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>27.05.2018 12:43</td>
												<td><a href="#">0х2354072043569...</a></td>
												<td>Инвестор</td>
												<td><a href="#">Дмитрий Пантеелев</a></td>
												<td>10.2493 ETH</td>
												<td>7.1232 ETH</td>
												<td title="Ожидается подтверждение транша">Ожидается...</td>
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
var ctx = document.getElementById("refChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "На кошельках, ETH",
	  backgroundColor: "rgba(38, 185, 154, 0.31)",
	  borderColor: "rgba(38, 185, 154, 0.7)",
	  pointBorderColor: "rgba(38, 185, 154, 0.7)",
	  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	  pointHoverBackgroundColor: "#fff",
	  pointHoverBorderColor: "rgba(220,220,220,1)",
	  pointBorderWidth: 1,
	  data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27]
	}, {
          label: "Зарезервировано, ETH",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [1, 4, 5, 5, 5, 7, 8, 12, 14, 14, 15, 16, 16, 18, 18, 18]
    }]
  },
});
</script>
</body>

</html>
