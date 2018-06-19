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
							<div class="row stat">
								<div class="col-md-4"><h2>Ваши рефералы</h2></div>
								<div class="col-md-4">Зарегистрировалось: <span>27 человек</span></div>
								<div class="col-md-4">Совершило транзакции: <span>8 человек</span></div>
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
													<th>Учтено (токенов)</th>
													<th>Выплачено (токенов)</th>
													<th>Ваша ссылка</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="#">Test project 6</a></td>
													<td><span>Ставка: </span>8%</td>
													<td><span>Учтено (токенов): </span>1 200</td>
													<td><span>Выплачено (токенов): </span>800</td>
													<td><button class="btn btn-warning btn-xs">Ваша ссылка</button></td>
												  </tr>
												  <tr>
													<td><a href="#">Test project 1</a></td>
													<td>4%</td>
													<td>100</td>
													<td>0</td>
													<td><button class="btn btn-warning btn-xs">Ваша ссылка</button></td>
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

<!-- окно вывода токенов -->
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
					<p align="center">Приглашая пользователей перейти по данной ссылке:</p>
					<p><i class="fa fa-check"></i> Вы получите 7% от их вложений в данный проект</p>
					<p><i class="fa fa-check"></i> Вы получите 2% от суммы их вложений в любые другие проекты на платформе</p>
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
        labels: ["10.04.17", "", "", "", "", "15.04.17", "", "", "", "", "20.04.17", "", "", "", "", "25.04.17"],
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
	</script>
  
</body>

</html>
