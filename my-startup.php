<?php require_once('_top-startup.php'); ?>
				<section class="myStartup row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
							  <h2>Мой текущий проект</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="icoCard col-sm-4 col-xs-12"><div>
									<div class="img"><img src="http://www.thebohoguide.com/wp-content/uploads/job-manager-uploads/main_image/2016/09/Panorama-Fraser-Island.jpg" alt=""></div>
									<div class="summary">
										<div class="name">Test project 12</div>
										<div class="status"><span class="text-success">Одобрен</span> | <span class="text-danger">требуется наполнение</span></div>
										<div class="notice">Для запуска проекта необходимо: <span class=""><a href="#">заполнить RoadMap</a>, <a href="startup-add-smart.php">создать смарт-контракт</a></span></div>
										<!--<div class="descr">Описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis.</div>
										<div class="">
											<div class="pull-left">Прогресс 45%</div>
											<div class="pull-right">Осталось: 35 дней</div>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div></div>
										<div class="money">
											Собрано: $ 1 583 354<br>
											Цель: $ 3 518 564
										</div>-->
									</div>
									<div class="btns"><div>
										<div>
											<button type="button" class="btn btn-success noborder btn-sm"> Запустить ICO</button> <!-- отображается в случае, если выбран ручной запуск ICO и оно еще не было запущено -->
											<button type="button" class="btn btn-danger noborder btn-sm"> Завершить ICO</button> <!-- отображается в случае, если выбрано ручное завершение ICO и оно уже было запущено но не было завершено -->
											<a href="startup.php"><button type="button" class="btn btn-info noborder btn-sm"> Страница стартапа</button></a>
											<a href="startup-edit.php"><button type="button" class="btn btn-warning noborder btn-sm"> Изменить информацию</button></a>
										</div>
									</div></div>
								</div></div>
							</div>
						</div>
						<div class="x_panel">
							<div class="x_title">
							  <h2>Дорожная карта проекта / RoadMap</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<a href="startup-roadmap.php"><button type="button" class="btn btn-success btn-md pr">Заполнить</button></a> Вы еще не заполнили дорожную карту проекта!
							</div>
						</div>
						<div class="x_panel">
							<div class="x_title">
							  <h2>Смарт-контракт проекта</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<a href="startup-add-smart.php"><button type="button" class="btn btn-success btn-md pr">Создать</button></a> Вы еще не создали cмарт-контракт!
							</div>
						</div>
						<div class="x_panel">
							<div class="x_title">
							  <h2>Токен проекта</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p><b>Стоимость токена:</b> $ 1 <button type="button" class="btn btn-success btn-xs noborder" data-toggle="modal" data-target="#tPriceChangeModal">Изменить</button> <!-- Кнопка отображается если выбрана возможность ручного изменения цены токена --></p>
								<p><b>Всего токенов:</b> 1000000</p>
								<p><b>Токенов для команды:</b> 100000</p>
								<p><b>Токенов на продажу:</b> 900000</p>
								<p><b>Токенов продано:</b> 48</p>
								<p><b>Осталось токенов:</b> 899952</p>
								<hr/>
								<h4>Иконка токена</h4>
								<img src="images/des/default-coin.png" width="40" alt=""> &nbsp; <span class="btn btn-xs btn-primary btn-file">Загрузить иконку токена <input type="file"></span>
							</div>
						</div>
						<div class="x_panel">
							<div class="x_title">
							  <h2>Реферальная система проекта</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<button type="button" class="btn btn-warning btn-md pr" data-toggle="modal" data-target="#changeRefModal">Установить</button> Реферальная ставка для проекта еще не установлена
							</div>
						</div>
						<div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
							<ul id="infoTab" class="nav nav-tabs" role="tablist">
							  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Отчеты проекта</a>
							  </li>
							  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Результаты голосований</a>
							  </li>
							  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Статистика сборов</a>
							  </li>
							</ul>
							<div id="infoTabContent" class="tab-content">
							  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
								<div class="x_panel">
								  <div class="x_content">
									<button type="button" class="btn btn-info btn-md pr" data-toggle="modal" data-target="#addReportModal">Загрузить</button> Вы еще не загружали отчетов для проекта
								  </div>
								</div>
							  </div>
							  <div role="tabpanel" class="tab-pane fade in" id="tab_content2" aria-labelledby="vote">
								<div class="x_panel">
								  <div class="x_content">
									По вашему проекту еще не было проведено голосований
								  </div>
								</div>
							  </div>
							  <div role="tabpanel" class="tab-pane fade in" id="tab_content3" aria-labelledby="stats">
								<div class="x_panel">
								  <div class="x_content">
									Сбор средств для проекта еще не начался
								  </div>
								</div>
							  </div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel tile">
							  <div class="x_title">
								<h2>Кошелек проекта</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								  </li>
								  
								  <li><a class="close-link"><i class="fa fa-close"></i></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="wallet x_content">
								<div class="balance">
									Ваш баланс: <b>49&nbsp;ETH | 203&nbsp;DES</b>
								</div>
								<hr>
								<div class="ethAddr">
									<div class="oper col-md-12 col-xs-12">
									<div>Ethereum адрес</div>
									<div><input class="col-md-12 col-xs-12" type="text" id="ethAddr" value="0xde0B295669a9FD93d5F28D9Ec85E40f4cb697BA9" disabled=""></div>
									</div>
								</div>
								<div class="">
									<div class="oper col-md-6 col-xs-12">
										<div class="eth row">
											<div class="col-md-6 col-xs-12"><input type="text" id="ethAmount" placeholder="Кол-во"> ETH</div>
											<div class="col-md-6 col-xs-12"><button class="btn btn-warning" data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-success" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button></div>
										</div>
										<div class="des row">
											<div class="col-md-6 col-xs-12"><input type="text" id="desAmount" placeholder="Кол-во"> DES</div>
											<div class="col-md-6 col-xs-12"><button class="btn btn-warning" data-toggle="modal" data-target="#cryptoAddModal">Пополнить</button> <button class="btn btn-success" data-toggle="modal" data-target="#cryptoTransferModal">Перевести</button></div>
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
 
<!-- окно добовления отчета -->
<div class="modal fade in" id="addReportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавление отчета<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<p>Срок выполнения: <input type="date"> - <input type="date"></p>
				<p><textarea class="form-control col-xs-12" rows="4" placeholder="Описание"></textarea><div class="clear"></div></p>
				<span class="btn btn-primary btn-file button170">Прикрепить файл <input type="file" multiple=""></span>
				<span class="btn btn-success noborder pull-right button170">Отправить отчет</span>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- окно изменения стоимости токена -->
<div class="modal fade in" id="tPriceChangeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменить цену токена<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body text-center">
				<h2>Новая цена</h2>
				<p><input type="text" placeholder="$"></p>
				<hr/>
				<button type="button" class="btn btn-warning button140">Изменить</button>
				<button type="button" class="btn btn-warning button140" data-dismiss="modal">Отмена</button>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- окно установки реф ставки -->
<div class="modal fade" id="changeRefModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Реферальная ставка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<p>Реферальная ставка проекта:</p>
				<p><input type="text" placeholder="%"></p>
				<p><button type="button" class="btn btn-success">Установить</button></p>
				<hr>
				<div class="notice">
					<p><i class="fa fa-check"></i> Реферальная ставка определяет процент вознаграждения пользователя от суммы вложений привлеченных им клиентов.</p>
					<p><i class="fa fa-check"></i> Имейте в виду, что после начала ICO вы не сможете изменить размер реферальной ставки.</p>
					<!--<p><i class="fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей токенами платформы Descrow (DES) по текущему на тот момент курсу.</p>-->
				</div>
			</div>
		</div>
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
  
  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>
