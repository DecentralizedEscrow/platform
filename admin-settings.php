<?php require_once('_top-admin.php'); ?>
				<section class="aSupport col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Комиссия платформы с траншей</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-justify">
							Установлена комиссия в размере <span class="text-success">1.5%</span> с траншей стартапов платформы <button type="button" class="btn btn-warning noborder btn-xs" data-toggle="modal" data-target="#changePlatFeeModal">Изменить</button>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Комиссия за изменение дорожной карты проекта</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-justify">
							Установлена комиссия в размере <span class="text-success">200 DES</span> за внесение изменений в дорожную карту проекта <button type="button" class="btn btn-warning noborder btn-xs" data-toggle="modal" data-target="#changeRoadFeeModal">Изменить</button>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Комиссия за создание смарт-контракта</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-justify">
							Установлена комиссия в размере <span class="text-success">500 DES</span> за создание смарт-контракта <button type="button" class="btn btn-warning noborder btn-xs" data-toggle="modal" data-target="#changeSmartFeeModal">Изменить</button>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Комиссия за размещение ордеров на бирже</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-justify">
							Установлена комиссия в размере <span class="text-success">20 DES</span> за размещение ордеров и совершение операций купли/продажи на бирже <button type="button" class="btn btn-warning noborder btn-xs" data-toggle="modal" data-target="#changeExchangeFeeModal">Изменить</button>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Размер страховки на покупку токенов</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-justify">
							Установлен размер страховки на покупку токенов <span class="text-success">5%</span> <button type="button" class="btn btn-warning noborder btn-xs" data-toggle="modal" data-target="#changeEnsuranceModal">Изменить</button>
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

<!-- окно изменения комиссии с траншей -->
<div class="modal fade" id="changePlatFeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменить комиссию<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<center>
				<p>Введите размер комиссии с траншей стартапов:</p>
				<input class="form-contlol" type="number" min="0" placeholder="1.5" /> %
				</center>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Принять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно изменения комиссии за изменение родмапа -->
<div class="modal fade" id="changeRoadFeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменить комиссию<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<center>
				<p>Введите размер комиссии за изменение дорожной карты проекта:</p>
				<input class="form-contlol" type="number" min="0" placeholder="200" /> DES
				</center>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Принять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно изменения размера страховки -->
<div class="modal fade" id="changeEnsuranceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменить комиссию<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<center>
				<p>Введите размер страховки на покупку токенов:</p>
				<input class="form-contlol" type="number" min="0" placeholder="5" /> %
				</center>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Принять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно изменения комиссии за смарт -->
<div class="modal fade" id="changeSmartFeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменить комиссию<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<center>
				<p>Введите размер комиссии за создание смарт-контракта:</p>
				<input class="form-contlol" type="number" min="0" placeholder="500" /> DES
				</center>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Принять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно изменения комиссии за ордер биржи -->
<div class="modal fade" id="changeExchangeFeeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменить комиссию<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<center>
				<p>Введите размер комиссии за размещение ордеров на бирже:</p>
				<input class="form-contlol" type="number" min="0" placeholder="20" /> DES
				</center>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Принять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Отмена</button></p>
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
