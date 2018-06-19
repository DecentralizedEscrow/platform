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
							<p><i class="fa fa-check"></i> Реферальная ставка определяет процент вознаграждения пользователя от суммы вложений привлеченных им клиентов.</p>
							<p><i class="fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей токенами платформы Descrow (DES) по текущему на тот момент курсу.</p>
							
							<hr/>
							
							
							
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
											<div class="col-md-4"><h2>Рефералы текущего проекта</h2></div>
											<div class="col-md-4">В программе: <span>27 человек</span></div>
											<div class="col-md-4">Реферальные транзакции: <span>8</span></div>
										</div>
										<div class="refChart">
											<canvas id="lineChart"></canvas>
										</div>
										<hr/>
										
										<div class="row stat">
											<div class="col-md-4"><h2>Реферально привлеченные средства</h2></div>
											<div class="col-md-4"><span>1239</span> ETH</div>
										</div>
										<div class="refChart">
											<canvas id="lineChart2"></canvas>
										</div>
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_content">
										<hr/>
										<div class="row stat">
											<div class="col-md-4"><h2>Рефералы текущего проекта</h2></div>
											<div class="col-md-4">В программе: <span>27 человек</span></div>
											<div class="col-md-4">Реферальные транзакции: <span>8</span></div>
										</div>
										<div class="refChart">
											<canvas id="lineChart3"></canvas>
										</div>
										<hr/>
										
										<div class="row stat">
											<div class="col-md-4"><h2>Реферально привлеченные средства</h2></div>
											<div class="col-md-4"><span>1239</span> ETH</div>
										</div>
										<div class="refChart">
											<canvas id="lineChart4"></canvas>
										</div>
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
					<p><i class="fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей токенами платформы Descrow (DES) по текущему на тот момент курсу.</p>
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
	// Line chart 2
    var ctx = document.getElementById("lineChart2");
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
          data: [6, 44, 67, 146, 245, 296, 321, 450, 510, 713, 822, 877, 998, 1039, 1139, 1239]
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
          label: "Зарегистрировалось",
          backgroundColor: "rgba(38, 185, 154, 0.31)",
          borderColor: "rgba(38, 185, 154, 0.7)",
          pointBorderColor: "rgba(38, 185, 154, 0.7)",
          pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
          pointHoverBackgroundColor: "#fff",
          pointHoverBorderColor: "rgba(220,220,220,1)",
          pointBorderWidth: 1,
          data: [6, 44, 67, 146, 245, 296, 321, 450, 510, 713, 822, 877, 998, 1039, 1139, 1239]
        }]
      },
    });
	</script>
  
</body>

</html>
