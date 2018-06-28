<?php require_once('_top-admin.php'); ?>
				<section class="aExchange col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Биржа</h2>
						</div>
						<div class="x_content">
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Сводка</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" id="tab2" role="tab" data-toggle="tab" aria-expanded="false">Торги</a></li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">История</a></li>
								  <li role="presentation" class=""><a href="#tab_content4" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">Токены</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-3"><h2>Объем торгов</h2></div>
											<div class="col-md-3">Всего: <b><span class="text-success">127 ETH</span></b></div>
											<div class="col-md-4">За последние 24 часа: <b><span class="text-success">8.3575 ETH</span></b></div>
											<div class="col-md-2">Период: <select><option selected>неделя</option><option>месяц</option><option>год</option><option>все</option></select></div>
										</div><br/>
										<div class="dChart"><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
											<canvas id="ethChart" width="889" height="444"></canvas>
										</div>
										<br/>
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
												  <option>Токен</option>
												  <option>Тип</option>
												  <option>Количество</option>
												  <option>Сумма</option>
												  <option>Пользователь</option>
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
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Токен <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Тип <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Количество <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Пользователь <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td>TDX</td>
												<td>Продажа</td>
												<td>12</td>
												<td>2.12335 ETH</td>
												<td><a href="#">Andrew Webber</a></td>
												<td><button type="button" class="btn btn-warning btn-sm noborder">Отменить</button></td>
											  </tr>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td>DXS</td>
												<td>Покупка</td>
												<td>120</td>
												<td>1.12335 ETH</td>
												<td><a href="#">Andrew Webber</a></td>
												<td><button type="button" class="btn btn-warning btn-sm noborder">Отменить</button></td>
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
												  <option>Токен</option>
												  <option>Операция</option>
												  <option>Количество</option>
												  <option>Сумма</option>
												  <option>Продавец</option>
												  <option>Покупатель</option>
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
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Токен <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Операция <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Количество <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Продавец <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Покупатель <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td>TDX</td>
												<td>Оффер sell</td>
												<td>12</td>
												<td>2.12335 ETH</td>
												<td><a href="#">Andrew Webber</a></td>
												<td></td>
											  </tr>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td>TDX</td>
												<td>Оффер buy</td>
												<td>12</td>
												<td>2.12335 ETH</td>
												<td><a href="#">Andrew Webber</a></td>
												<td></td>
											  </tr>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td>TDX</td>
												<td>Сделка</td>
												<td>12</td>
												<td>2.12335 ETH</td>
												<td><a href="#">Andrew Webber</a></td>
												<td><a href="#">Валентин Фонвизин</a></td>
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
												  <option>Токен</option>
												  <option>Стартап</option>
												  <option>Количество</option>
												  <option>Цена</option>
												  <option>Hard cap</option>
												</select>
												=
												<input type="text">
												<button>Поиск</button>
											</div>
											<div class="col-md-6 text-right">
												Период &nbsp; <input type="date"/> - <input type="date"/> <button>></button>
											</div>
										</div><hr/>
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Modal"><i class="fa fa-envelope"></i> &nbsp;Добавить токен</button>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Дата добавления <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Токен <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Количество <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Цена <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Hard cap <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>12.02.2018 21:10:34</td>
												<td><img class="tokenTableImg" src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt=""> XBR</td>
												<td>Фабрика бездонных бочек</td>
												<td>1 600</td>
												<td>0.002 ETH</td>
												<td>800 ETH</td>
												<td><button type="button" class="btn btn-warning btn-sm noborder">Подробнее</button></td>
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
var ctx = document.getElementById("ethChart");
var lineChart = new Chart(ctx, {
  type: 'line',
  data: {
	labels: ["10.02.17", "", "", "", "", "15.02.17", "", "", "", "", "20.02.17", "", "", "", "", "25.02.17"],
	datasets: [{
	  label: "Объем торгов, ETH",
	  backgroundColor: "rgba(38, 185, 154, 0.31)",
	  borderColor: "rgba(38, 185, 154, 0.7)",
	  pointBorderColor: "rgba(38, 185, 154, 0.7)",
	  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
	  pointHoverBackgroundColor: "#fff",
	  pointHoverBorderColor: "rgba(220,220,220,1)",
	  pointBorderWidth: 1,
	  data: [6, 7, 8, 9, 10, 13, 15, 16, 18, 21, 21, 22, 23, 24, 26, 27.3049]
	}]
  },
});
</script>
</body>

</html>
