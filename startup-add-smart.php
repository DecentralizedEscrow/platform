<?php require_once('_top-startup.php'); ?>
				<section class="addSmart row">
					<div class="col-md-12">
						<div class="announcement">
							<h4>Обратите вниминие</h4>
							При создании смарт-контракта статус вашего проекта изменится c &laquo;Идея&raquo; на &laquo;Скоро&raquo;
						</div>
						<div class="x_panel">
							<div class="x_title">
							  <h2>Создать смарт-контракт для выпуска токенов проекта</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content"><form id="addSmart">
								<div>
									<div class="row">
										<div class="col-md-7 col-sm-6 col-xs-12">
											<label>Полное наименование токена</label> <input type="text" id="token-name" required="required" class="form-control" placeholder="например, Decentralized Escrow">
										</div>
										<div class="col-md-5 col-sm-4 col-xs-12">
											<label>Краткое наименование токена</label> <input type="text" id="token-name-short" required="required" class="form-control" placeholder="например, Descrow">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label>Аббревиатура токена</label> <input type="text" id="token-abbr" required="required" class="form-control" placeholder="например, DES">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label>Дробность после запятой (max: 9)</label> <input type="number" id="token-decim" min="0" required="required" class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label>Минимальная сумма, необходимая для реализации (USD) (soft&nbsp;cap)</label> <input type="number" min="0" id="sof" required="required" class="form-control">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label>Максимально возможная сумма сборов (USD) (hard&nbsp;cap)</label> <input type="number" id="hard" min="0" required="required" class="form-control" onchange="tCalc();" onkeyup="tCalc();">
										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<label>Прайс продажи токенов (токен/USD) (стоимость токена)</label><input type="number" id="price" min="0" required="required" class="form-control" onchange="tCalc();" onkeyup="tCalc();">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-right">Количество токенов, которое будет продано: <b>~<span id="tSell"></span></b></div>
									</div>
									<div class="row">
										<div class="col-md-11 col-sm-11 col-xs-12">
											<label>процент (%) для команды (команда/эдвайзеры/баунти-кампания) от общего количества токенов, которое будет продано. Эти токены не участвуют в голосовании и их нельзя перемещать до завершения всех этапов финансирования.</label>
										</div>
										<div class="col-md-1 col-sm-1 col-xs-12">
											<input type="number" id="teamp" min="0" required="required" class="form-control" placeholder="%" onchange="tCalc();" onkeyup="tCalc();">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-right">Количество токенов команды: <b>~<span id="tTeam"></span></b></div>
									</div>
									<div class="row">
										<div class="col-md-12 text-right">Количество токенов, которое будет создано: <b>~<span id="tAll"></span></b></div>
									</div>
									<div class="row">
										<div class="col-md-8 col-sm-8 col-xs-12">
											<label style="text-align: center;">Возможность увеличения стоимости токенов в ручном режиме</label>
											<div class="btn-group" data-toggle="buttons">
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="priceChange" value="y">да
											  </label><!--
											  --><label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="priceChange" value="n" checked="">нет
											  </label>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<label>Дата старта ICO</label> <input type="date" id="ico-start" required="required" class="form-control">
											<div class="checkbox">
											  <label class="">
												<div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="icoStartManual" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <span>Старт в ручном режиме</span>
											  </label>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<label>Дата окончания ICO</label> <input type="date" id="ico-end" required="required" class="form-control">
											<div class="checkbox">
											  <label class="">
												<div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="icoEndManual" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <span>Окончание в ручном режиме</span>
											  </label>
											</div>
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<div class="btns"><button type="button" class="btn btn-info btn-md">Создать смарт контракт</button></div>
										</div>
									</div>
									<div class="notice">
										<i class="fa fa-exclamation-circle"></i> Убедитесь в правильности заполненных пунктов, <span class="text-danger">после сформирования смарт-контракта изменить его уже нельзя</span><br/>
										<i class="fa fa-info-circle"></i> При создании смарт-контракта взимается комиссия в размере 500 DES. Убедитеь, что у вас на балансе есть необходимая сумма (<a href="user - wallet.php">проверить баланс</a>)
									</div>
								</div></form>
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
 
  <script>
  $(function() {tCalc();});
  
  // calc token amounts
  function tCalc () {
	// var tSell = parseInt($("#tSell").text());
	// var tTeam = parseInt($('#tTeam').text());
	// var tAll = parseInt($('#tAll').text());
	var hCap = parseInt($('#hard').val());
	var tPrice = parseInt($('#price').val());
	var teamP = parseInt($('#teamp').val());
	if (isNaN(hCap) || isNaN(tPrice)) {
		$('#tSell').text('');
		$('#tTeam').text('');
		$('#tAll').text('');
	} else {
		var tAll = Math.ceil(hCap / tPrice);
		$('#tAll').text(tAll);
		if (isNaN(teamP)) {
			$('#tTeam').text('0');
			$('#tSell').text(tAll);
		} else {
			var tTeam = Math.ceil(tAll / 100 * teamP);
			var tSell = Math.ceil(tAll - tTeam);
			$('#tTeam').text(tTeam);
			$('#tSell').text(tSell);
		}
	}
  }
  </script>
  
  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>
