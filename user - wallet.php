<?php require_once('_top.php'); ?>
				<section class="userWallet col-md-12">
					<div class="announcement">
						<h4>Обратите вниминие</h4>
						Голосование за продолжение финансирования проекта &laquo;Название проекта&raquo; было завершено положительно.<br/>
						С вашей стороны требуется <a href="#tokenList">подтвердить перечисление средств</a> на следующий этап реализации проекта.<br/>
						Пока вы не совершите данное действи, прочие финансовые функции вашего аккаунта будут недоступны.
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Личный кошелек</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<hr/>
							<div class="row topStat">
								<div class="col-md-12 col-sm-12 col-xs-12">
								  <div class="col-md-3 col-sm-3 col-xs-3 tsc"><a href="user - wallet.php#tab_content04">
									  <span class="count_top">Баланс - DES</span>
									  <div class="count">25 500</div>
								  </a></div>
								  <div class="col-md-3 col-sm-3 col-xs-3 tsc"><a href="user - wallet.php#tab_content01">
									  <span class="count_top">Баланс - ETH</span>
									  <div class="count">3.055</div>
								  </a></div>
								  <div class="col-md-3 col-sm-3 col-xs-3 tsc"><a href="user - wallet.php#tab_content02">
									  <span class="count_top">Баланс - BTC</span>
									  <div class="count">1.012</div>
								  </a></div>
								  <div class="col-md-3 col-sm-3 col-xs-3 tsc"><a href="user - wallet.php#tab_content03">
									  <span class="count_top">Баланс - LTC</span>
									  <div class="count">42.600</div>
								  </a></div>
								</div>
							</div>
							<hr/>
							<h2>Операции:</h2>
							<div class="tabParent style1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content01" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ETH</a></li>
								  <li role="presentation" class=""><a href="#tab_content02" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">BTC</a></li>
								  <li role="presentation" class=""><a href="#tab_content03" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">LTC</a></li>
								  <li role="presentation" class=""><a href="#tab_content04" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">DES</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content01" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content over-x-auto">
										<h4>Адрес кошелька: <b><span id="ethlnk">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-info btn-xs noborder" onclick="copyToClipboard(document.getElementById('ethlnk'));">Скопировать</button></h4>
										Баланс - доступно: <b>1.203948 ETH</b> &nbsp; <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button>
										<p>Баланс - зарезервировано: <b>0 ETH</b></p>
										<p>Баланс - итого: <b>1.203948 ETH</b></p>
										<hr/>
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">ID <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Адрес <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Подтверждение <i class="fa fa-caret-down"></i></a></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td>10.08.2018 12:25:34</td>
												<td>1312</td>
												<td>moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</td>
												<td>0.00000743 ETH</td>
												<td>получено</td>
												<td>27322</td>
											</tr>
											</tbody>
										</table>
									  </div>
									</div>
								  </div>
								  
								  <div role="tabpanel" class="tab-pane fade" id="tab_content02" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_content over-x-auto">
										<h4>Адрес кошелька: <b><span id="btclnk">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-info btn-xs noborder" onclick="copyToClipboard(document.getElementById('btclnk'));">Скопировать</button></h4>
										Баланс - доступно: <b>1.203948 BTC</b> &nbsp; <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button>
										<p>Баланс - зарезервировано: <b>0 BTC</b></p>
										<p>Баланс - итого: <b>1.203948 BTC</b></p>
										<hr/>
										История операций отсутствует.
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content03" aria-labelledby="tab3">
									<div class="x_panel">
									  <div class="x_content over-x-auto">
										<h4>Адрес кошелька: <b><span id="ltclnk">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-info btn-xs noborder" onclick="copyToClipboard(document.getElementById('ltclnk'));">Скопировать</button></h4>
										Баланс - доступно: <b>1.203948 LTC</b> &nbsp; <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button>
										<p>Баланс - зарезервировано: <b>0 LTC</b></p>
										<p>Баланс - итого: <b>1.203948 LTC</b></p>
										<hr/>
										История операций отсутствует.
									  </div>
									</div>
								  </div>
								  <div role="tabpanel" class="tab-pane fade" id="tab_content04" aria-labelledby="tab4">
									<div class="x_panel">
									  <div class="x_content over-x-auto">
										<h4>Адрес кошелька: <b><span id="deslnk">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-info btn-xs noborder" onclick="copyToClipboard(document.getElementById('deslnk'));">Скопировать</button></h4>
										Баланс - доступно: <b>1.203948 DES</b> &nbsp; <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button>
										<p>Баланс - зарезервировано: <b>0 DES</b></p>
										<p>Баланс - итого: <b>1.203948 DES</b></p>
										<hr/>
										История операций отсутствует.
									  </div>
									</div>
								</div>
							  </div>
							</div>
							<hr/>
							<h2>Обмен:</h2>
							Обменять <input type="number" min="0" placeholder="сумма" />
							<select name="inCur">
							  <option selected disabled hidden>Выберите валюту</option>
							  <option>ETH</option>
							  <option>BTC</option>
							  <option>LTC</option>
							  <option>DES</option>
							</select>
							на 
							<select name="toCur">
							  <option selected disabled hidden>Выберите валюту</option>
							  <option>ETH</option>
							  <option>BTC</option>
							  <option>LTC</option>
							  <option>DES</option>
							</select>
							<button class="btn btn-warning btn-xs noborder" style="margin-top: -2px;" data-toggle="modal" data-target="#cryptoChangeModal">Обмен</button>
						</div>
					</div>
					<div class="x_panel"> <!-- отображается, если у пользователя есть стартап -->
						<div class="x_title">
						  <h2>Кошелек проекта &laquo;<a href="startup.php">Завод стеклянных пылесосов</a>&raquo;</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<h4>Адрес кошелька: <b><span id="ethlnk">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-info btn-xs noborder" onclick="copyToClipboard(document.getElementById('ethlnk'));">Скопировать</button></h4>
							Баланс - доступно: <b>1.203948 ETH</b> &nbsp; <button class="btn btn-success btn-xs"  data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button>
							<p>Баланс - зарезервировано: <b>0 ETH</b></p>
							<p>Баланс - итого: <b>1.203948 ETH</b></p>
							<hr/>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">ID <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Адрес <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Подтверждение <i class="fa fa-caret-down"></i></a></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>10.08.2018 12:25:34</td>
									<td>1312</td>
									<td>moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</td>
									<td>0.00000743 ETH</td>
									<td>получено</td>
									<td>27322</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel" id="tokenList">
						<div class="x_title">
						  <h2>Токены проектов</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="tokenList over-x-auto">
								<table class="table table-striped">
									<thead>
									  <tr>
										<th style="text-align: center;">#</th>
										<th>Название проекта</th>
										<th title="Зарезервированные средства">Зарез. средства</th>
										<th>Активные токены</th>
										<th>Замороженные токены</th>
										<th>Транш</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href="exchange - main.php"><button class="btn btn-warning">Продать</button></a></td>
										<td><button class="btn btn-info" data-toggle="modal" data-target="#acceptNextModal">Подтвердить</button></td>
									  </tr>
									   <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href="exchange - main.php"><button class="btn btn-warning">Продать</button></a></td>
										<td></td>
									  </tr>
									   <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href="exchange - main.php"><button class="btn btn-warning">Продать</button></a></td>
										<td></td>
									  </tr>
									   <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href="exchange - main.php"><button class="btn btn-warning">Продать</button></a></td>
										<td></td>
									  </tr>
									</tbody>
								  </table>
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

<!-- окно пополнения кошелька -->
<div class="modal fade" id="cryptoAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Пополнить кошелек ETH<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body"><center>
				<p>Для пополнения кошелька, переведите ETH на адрес:</p>
				<p><b><span id="yaddress">moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g</span></b> &nbsp;<button type="button" class="btn btn-success btn-xs noborder" onclick="copytext('moxKA6C8DAfLAfvxk1uf1ErHgFgCMoKU5g', this);">Скопировать</button></p>
			</center></div>
		</div>
	</div>
</div>
<!-- окно перевода с кошелька -->
<div class="modal fade" id="cryptoTransferModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Вывести ETH<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div><span>Перевести</span> <input type="text" placeholder="Сумма"></div>
						<div><span>На адрес</span> <input type="text" placeholder="0x..."></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Перевести</button></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>  

<!-- окно вывода токенов -->
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Перевести токены проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div><span>Перевести</span> <input type="text" id="tokenAmount" placeholder="Кол-во токенов"></div>
						<div><span>На адрес</span> <input type="text" id="tokenAmount" placeholder="0x..."></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Перевести</button></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- окно подтверждения следующего транша -->
<div class="modal fade" id="acceptNextModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Подтверждение транша для проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				Подтвердите перевод <b><span class="text-success">$ 1 345</span></b> на следующий этап реализации проекта <b>&laquo;Металлургический завод&raquo;</b>. Совершив данный транш вы переведете <b><span class="text-success">234</span></b> замороженных токена проекта в разряд активных.<br/>
				Для подтверждения транша введите ваш приватный ключ: &nbsp; <input type="text" />
				<hr/>
				<center><button type="button" class="btn btn-success btn-lg">Подтвердить</button></center>
			</div>
		</div>
	</div>
</div>
<!-- окно обмена валюты -->
<div class="modal fade" id="cryptoChangeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Обменять криптовалюту<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<center>
				<p>Вы уверены, что хотите обменять <b>1.10320 ETH</b> на <b>0.10320 BTC</b></p>
				<p>(курс: 1 ETH = 0.12 BTC)</p>
				</center>
				<hr>
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

  <script src="js/custom.js"></script>

</body>

</html>
