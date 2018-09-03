<?php require_once('_top.php'); ?>
				<section class="userRef col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Реферальная система</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							
							<div class="rBlock">
								<p>Ваша реферальная ссылка платформы</p> 
								<div class="refLink"><span id="plnk">https://descrow.com/reg?rid=2</span> <button type="button" class="btn btn-success btn-xs" onclick="copyToClipboard(document.getElementById('plnk'));">Скопировать</button></div>
							</div>
							<p><i class="fa fa-check"></i> Данная ссылка используется для вознаграждения вас за привлечение новых инвесторов на платформу Descrow для любых проектов.</p>
							<p><i class="fa fa-check"></i> Вы получаете вознаграждение за все инвестиции в любые проекты от вашего приглашенного за всё время существования платформы.</p>
							<p><i class="fa fa-check"></i> Вознаграждение зависит только от установленной реферальной программы проектами на платформе Descrow.</p>
							<p><i class="fa fa-check"></i> Ваше вознаграждение поступает по факту очередных траншей в проекты.</p>
							
							<hr/>
							<h2>Ваши рефералы</h2>
							<div class="row stat">
								<div class="col-md-3">Перешло по ссылке: <span>74</span></div>
								<div class="col-md-3">Зарегистрировалось: <span>27</span></div>
								<div class="col-md-3">Совершило транзакции: <span>8</span></div>
								<div class="col-md-3">Период: <select><option selected="">неделя</option><option>месяц</option><option>год</option><option>все</option></select><button class="btn btn-info btn-xs noborder pull-right" data-toggle="modal" data-target="#rangeModal"><i class="fa fa-gear"></i></button></div>
							</div>
							
							<div class="refChart">
								<canvas id="lineChart"></canvas>
							</div>
							<hr/>
							
							<div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Все бонусные программы проектов</a>
								  </li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Ваши бонусы по проектам</a>
								  </li>
								</ul>
								<div id="infoTabContent" class="tab-content">

								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_title">
										<h2>Все бонусные программы проектов</h2>
										<div class="clearfix"></div>
									  </div>
									  <div class="x_content">
										<table class="table table-striped">
											<thead>
											  <tr>
												<th>Название проекта</th>
												<th>Бонуная ставка</th>
												<th>Участвовать</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="#">Test project 2</a></td>
												<td><span>Ставка: </span>7%</td>
												<td><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#getLinkModal">Получить ссылку</button></td>
											  </tr>
											  <tr>
												<td><a href="#">Test project 5</a></td>
												<td><span>Ставка: </span>5%</td>
												<td><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#getLinkModal">Получить ссылку</button></td>
											  </tr>
											  <tr>
												<td><a href="#">Test project 4</a></td>
												<td><span>Ставка: </span>5%</td>
												<td><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#getLinkModal">Получить ссылку</button></td>
											  </tr>
											  <tr>
												<td><a href="#">Test project 3</a></td>
												<td><span>Ставка: </span>3%</td>
												<td><button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#getLinkModal">Получить ссылку</button></td>
											  </tr>
											</tbody>
										  </table>
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_title">
										<h2>Ваши бонусы по проектам</h2>
										<div class="clearfix"></div>
									  </div>
									  <div class="x_content">
											<table class="table table-striped">
												<thead>
												  <tr>
													<th>Название проекта</th>
													<th>Бонуная ставка</th>
													<th>Учтено</th>
													<th>Выплачено</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="startup.php">Test project 6</a></td>
													<td><span>Ставка: </span>8%</td>
													<td><span>Учтено: </span>$ 1 200</td>
													<td><span>Выплачено: </span>$ 800</td>
												  </tr>
												  <tr>
													<td><a href="startup.php">Test project 1</a></td>
													<td><span>Ставка: </span>4%</td>
													<td><span>Учтено: </span>$ 100</td>
													<td><span>Выплачено: </span>$ 0</td>
												  </tr>
												</tbody>
											  </table>
											  <hr/>
											  <h4 class="text-right">Итого заработано: $ 1 300</h4>
											  <div class="text-right">из которых $ 500 ожидает выплаты</div>
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

<!-- окно получения реф ссылки на проект -->
<div class="modal fade" id="getLinkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Ваша ссылка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<!-- ошибка показывается вместо grl блока в случае, когда пользователь не привязал eth-кошелек -->
				<div class="err hidden">Для участия в реферальной программе вам необходимо <a href="#">привязать</a> ваш Ethereum кошелек, на который будут перечисляться бонусы.</div>
				
				<div class="grl">
					<div class="rBlock">
						<p>Ваша реферальная ссылка для проекта &laquo;Металлургический завод&raquo;</p> 
						<div class="refLink"><span id="p2lnk">https://descrow.com/project/pid?rid=userId</span> <button type="button" class="btn btn-success btn-xs" onclick="copyToClipboard(document.getElementById('p2lnk'));">Скопировать</button></div>
					</div>
					<p><i class="fa fa-check"></i> Приглашая пользователей перейти по данной ссылке вы получите 7% от их вложений в данный проект</p>
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
          label: "Перешло по ссылке",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: [16, 27, 48, 79, 31, 23, 35, 56, 78, 64, 55, 77, 42, 31, 60, 127]
        }, {
          label: "Зарегистрировалось",
          backgroundColor: "rgba(3, 88, 106, 0.3)",
          borderColor: "rgba(3, 88, 106, 0.70)",
          pointBorderColor: "rgba(3, 88, 106, 0.70)",
          pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(151,187,205,1)",
          pointBorderWidth: 1,
          data: [6, 7, 8, 19, 10, 13, 15, 20, 24, 21, 21, 22, 14, 12, 26, 37]
        }, {
          label: "Совершило транзакции",
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
	</script>
  
</body>

</html>
