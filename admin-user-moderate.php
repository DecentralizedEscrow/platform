<?php require_once('_top-admin.php'); ?>
				<section class="userMod col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Данные пользователя «Николай Ефремов»</h2>
						  <button type="button" class="changeInfo pull-right btn btn-info noborder"><i class="fa fa-list-alt"></i> &nbsp;Отчет в csv</button>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<hr/>
							<div class="row">
								<div class="col-md-3">Зарегистрирован: <b>10.02.2018 13:57</b></div>
								<div class="col-md-3">Последний вход: <b>12.02.2018 13:57</b></div>
								<div class="col-md-3">Последний ip: <b><a href="#">219.79.134.5</a></b></div>
								<div class="col-md-3">Роль: <b>user</b></div>
							</div><br/>
							<div class="row">
								<div class="col-md-3">На балансе: <b><span class="text-success">$ 12 039</span></b></div>
								<div class="col-md-3">Жалоб на пользователя: <b><span class="text-danger">4</span></b></div>
								<div class="col-md-3">Выдано предупреждений: <b><span class="text-danger">1</span></b></div>
								<div class="col-md-3">Статус: <b><span class="text-success">активен</span></b></div>
							</div>
							<hr/>
							<div class="text-right">
								<button type="button" class="noborder btn btn-success" data-toggle="modal" data-target="#pmUsrModal">Написать ЛС</button>
								<button type="button" class="noborder btn btn-warning" data-toggle="modal" data-target="#warnUsrModal">Выдать предупреждение</button>
								<button type="button" class="noborder btn btn-danger" data-toggle="modal" data-target="#blockUsrModal">Блокировать</button>
								<button type="button" class="noborder btn btn-danger" data-toggle="modal" data-target="#delUsrModal">Удалить</button>
							</div>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Основная информация &nbsp;<button type="button" class="btn btn-xs btn-warning noborder" data-toggle="modal" data-target="#editInfoModal">изменить</button></h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">ФИО:</div> <b>Николай Ефремов</b></div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Город проживания:</div> <b>Москва</b></div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Телефон:</div> <b>+7 (903) 333-33-33</b></div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">E-mail:</div> <b>test@descrow.com</b></div>
							</div>
						</div>
					</div>
					<div class="x_panel">
						<div class="x_content text-left">
							<h2>Социальное взаимодействие</h2>
							<!-- label отображается только в случае наличия данных в соответствующем блоке. В случае, когда у пользователя нет таких данных, кнопки имеют аттрибут 'disabled' -->
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-que">Вопросы <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-mes">Беседы <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-rep">Жалобы <span class="label label-danger">1 / 1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-sup">Вопросы поддержке <span class="label label-danger">1</span></button>
							
							<h2>Финансы</h2>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-ref">Реф программы <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-inv">Инвестиции <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-wal">Кошельки <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-ope">Операции <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-exc">Торги <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-info button140" name="p-trh">История торгов <span class="label label-danger">1</span></button>
							
							<h2>Дополнительная деятельность</h2>
							<button type="button" class="showPanel noborder btn btn-success button140" name="p-sta">Стартап <span class="label label-danger">1</span></button>
							<button type="button" class="showPanel noborder btn btn-success button140" name="p-exo">Эксперт <span class="label label-danger">1</span></button>
						</div>
					</div>
					<div class="x_panel p-block p-ref">
						<div class="x_title">
						  <h2>Участие в реферальных программах</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table class="table table-striped valign-m text-left style1">
								<thead>
								  <tr>
									<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">% <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Рефералов">Реф. <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Дата регистрации первого реферала">Перв. рег. <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Дата регистрации последнего реферала">Посл. рег. <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Реф. инвест <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Реф. сумма <i class="fa fa-caret-down"></i></a></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><a href="#">Система дистанционного траспортного контроля</a></td>
									<td><a href="#">7</a></td>
									<td><a href="#">4</a></td>
									<td>12.02.2018 21:10:34</td>
									<td>12.02.2018 23:10:34</td>
									<td>100.0394 ETH</td>
									<td>7.0122 ETH</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-inv">
						<div class="x_title">
						  <h2>Инвестировал в стартапы</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table class="table table-striped valign-m text-left">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Резерв <i class="fa fa-caret-down"></i></a></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>13.08.2018</td>
									<td><a href="#">Система дистанционного траспортного контроля</a></td>
									<td>12.2416 ETH</td>
									<td>9.0045 ETH</td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-que">
						<div class="x_title">
						  <h2>Вопросы стартапам</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table class="table table-striped valign-m text-left">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Текст <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 21:10:34</td>
									<td><a href="startup.php">Децентрализованный механический завод</a></td>
									<td>Продам медные ложки недорого</td>
									<td><a href="startup.php#tab_content6"><button type="button" class="btn btn-warning btn-sm noborder">Посмотреть</button></a></td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-mes">
						<div class="x_title">
						  <h2>Беседы пользователя</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<table class="table table-striped valign-m text-left">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Кому <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Текст <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 21:10:34</td>
									<td><a href="startup.php">Децентрализованный механический завод</a></td>
									<td>Продам медные ложки недорого</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#conversModal">Посмотреть</button></td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-wal">
						<div class="x_title">
						  <h2>Кошельки пользователя</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Создан <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Валюта <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Адрес <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Тип <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Баланс <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Резерв <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>27.05.2018 12:43</td>
									<td>ETH</td>
									<td><a href="#">0х2354072043569...</a></td>
									<td>Инвестор</td>
									<td>10.2493 ETH</td>
									<td>7.1232 ETH</td>
									<td title="Ожидается подтверждение транша">Ожидается...</td>
								  </tr>
								  <tr>
									<td>27.05.2018 12:43</td>
									<td>BTC</td>
									<td><a href="#">0х2354072043569...</a></td>
									<td>Инвестор</td>
									<td>10.2493 BTC</td>
									<td>7.1232 BTC</td>
									<td title="Ожидается подтверждение транша">Ожидается...</td>
								  </tr>
								  <tr>
									<td>27.05.2018 12:43</td>
									<td>LTC</td>
									<td><a href="#">0х2354072043569...</a></td>
									<td>Инвестор</td>
									<td>10.2493 LTC</td>
									<td>7.1232 LTC</td>
									<td title="Ожидается подтверждение транша">Ожидается...</td>
								  </tr>
								  <tr>
									<td>27.05.2018 12:43</td>
									<td>DES</td>
									<td><a href="#">0х2354072043569...</a></td>
									<td>Инвестор</td>
									<td>10.2493 DES</td>
									<td>7.1232 DES</td>
									<td title="Ожидается подтверждение транша">Ожидается...</td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-ope">
						<div class="x_title">
						  <h2>Финансовые операции пользователя</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Тип <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Отправитель <i class="fa fa-caret-down"></i></a></th>
									<th></th>
									<th><a href="#">Получатель <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>27.05.2018 12:43:56</td>
									<td>Вывод</td>
									<td><a href="#">Дмитрий Пантеелев</a></td>
									<td><a href="#">0х2354072043569...</a></td>
									<td><a href="#">Михаил Прохоров</a></td>
									<td><a href="#">0х2354072043569...</a></td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-rep">
						<div class="x_title">
						  <h2>Жалобы</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<h2>Жалобы на данного пользователя</h2>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">А именно <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Причина <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Пожаловался <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 21:10:34</td>
									<td>Личное сообщение</td>
									<td>Оскорбление</td>
									<td><a href="#">Дмитрий Бородин</a></td>
									<td>не присвоен</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder btn-block" data-toggle="modal" data-target="#viewRepModal">Посмотреть</button></td>
								  </tr>
								</tbody>
							</table>
							<h2>Жалобы на других пользователей</h2>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Жалоба на <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">А именно <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Причина <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 21:10:34</td>
									<td><a href="#">Дмитрий Бородин</a></td>
									<td>Личное сообщение</td>
									<td>Оскорбление</td>
									<td>не присвоен</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder btn-block" data-toggle="modal" data-target="#viewRepModal">Посмотреть</button></td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-sup">
						<div class="x_title">
						  <h2>Вопросы техподдержке</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Текст <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 21:10:34</td>
									<td>Подскажите пожалуйста, как приготовить пельмени?</td>
									<td>Не решен</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#answModal">Посмотреть</button></td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-exc">
						<div class="x_title">
						  <h2>Биржевые офферы пользователя</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Токен <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Тип <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Количество <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
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
									<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#rejOrderModal">Отменить</button></td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-trh">
						<div class="x_title">
						  <h2>Биржевые операции пользователя</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
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
									<td>Покупка</td>
									<td>12</td>
									<td>2.12335 ETH</td>
									<td><a href="#">Andrew Webber</a></td>
									<td>Николай Ефремов</td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-sta">
						<div class="x_title">
						  <h2>Стартапы пользователя</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Категория <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Сборы <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Окончание текущего этапа">Окон... <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Создан <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Просмотров"><i class="fa fa-eye"></i> <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Добавили в избранное"><i class="fa fa-star"></i> <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Задано вопросов"><i class="fa fa-question-circle"></i> <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Инвесторов"><i class="fa fa-briefcase"></i> <i class="fa fa-caret-down"></i></a></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><a href="#" title="Система дистанционного траспортного контроля">Система дис...</a></td>
									<td><a href="#">IT</a></td>
									<td>312.2 ETH</td>
									<td><a href="#">ICO</a></td>
									<td>13.08.2018</td>
									<td>13.05.2018</td>
									<td><a href="#">116</a></td>
									<td><a href="#">52</a></td>
									<td><a href="#">34</a></td>
									<td><a href="#">19</a></td>
								  </tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="x_panel p-block p-exo">
						<div class="x_title">
						  <h2>Заказы пользователя как эксперта</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left">
							<a href="expert-info.php" target="_blank"><button type="button" class="showPanel noborder btn btn-info button140" name="p-wal">Анкета</button></a>
							<a href="expert-feedback.php" target="_blank"><button type="button" class="showPanel noborder btn btn-info button140" name="p-wal">Все отзывы <span class="label label-danger">1</span></button></a>
							<h2>Сотрудничества</h2>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Коммпетенция <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 - 12.04.2018</td>
									<td><a href="#" title="Децентрализованный механический завод">Децентрализованный...</a></td>
									<td><a href="#">Программист blockchain</a></td>
									<td>$2000/м</td>
									<td>Завершено</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#exFeedbackModal">Отзыв</button></td>
								  </tr>
								</tbody>
							</table>
							<h2>Предложения сотредничества</h2>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Дата <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Статус <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Стартап <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Коммпетенция <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Сумма <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Просмотров"><i class="fa fa-eye"></i> <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#" title="Откликнулось"><i class="fa fa-thumbs-up"></i> <i class="fa fa-caret-down"></i></a></th>
									<th>Исполнитель <i class="fa fa-caret-down"></i></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td>12.02.2018 21:10</td>
									<td>Отказ S</td>
									<td><a href="#" title="Децентрализованный механический завод">Децентрализованный...</a></td>
									<td><a href="#">Программист blockchain</a></td>
									<td>$2000/м</td>
									<td><a href="#">13</a></td>
									<td><a href="#">4</a></td>
									<td><a href="#">Борис Бритва</a></td>
									<td><button type="button" class="btn btn-warning btn-sm noborder" data-toggle="modal" data-target="#exOfferModal">Посмотреть</button></td>
								  </tr>
								</tbody>
							</table>
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

<!-- окно выдачи предупреждения -->
<div class="modal fade" id="warnUsrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Выдать предупреждение<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите выдать предупреждение пользователю <b><a href="#">Алексей Сабля</a></b>?</p>
				<textarea class="form-control" rows="2" placeholder="Введите текст предупреждения"></textarea>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Выдать</button><button type="button" class="btn btn-warning button140" data-dismiss="modal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно подтверждения блокировки -->
<div class="modal fade" id="blockUsrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Заблокировать пользователя<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите заблокировать пользователя <b><a href="#">Алексей Сабля</a></b>?</p>
				<textarea class="form-control" rows="2" placeholder="Введите причину блокировки"></textarea><br/>
				<p>Срок блокировки: <input type="text" class="" /> дней.</p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-danger button140">Заблокировать</button><button type="button" class="btn btn-warning button140" data-dismiss="modal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно подтверждения удаления -->
<div class="modal fade" id="delUsrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Удалить пользователя<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите удалить пользователя <b><a href="#">Алексей Сабля</a></b>?</p>
				<textarea class="form-control" rows="2" placeholder="Введите причину удаления"></textarea><br/>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-danger button140">Удалить</button><button type="button" class="btn btn-warning button140" data-dismiss="modal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно ответа на вопрос пользователя -->
<div class="modal fade" id="pmUsrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Вопрос пользователя - Иван Грозный<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<div class="questions">
					<div class="question bg-grey">
						<div class="ava"><img src="images/des/des-user.jpg" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name"><b>[Descrow]</b> Вирасетакул Апичатпонг <span class="pull-right date text-muted">10.12.2017 10:55:28</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Добрый день. Как дела?
						</div>
					</div>
					<div class="question">
					<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name">Алексей Сабля <span class="pull-right date text-muted">10.12.2017 10:55:24</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Отлично!
						</div>
					</div>
				</div>
				<hr>
				<div class="answer">
					<textarea id="answer" required="required" class="form-control" rows="3" placeholder="Ваш ответ..."></textarea><br/>
					<button type="button" class="btn btn-info">Отправить</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра беседы -->
<div class="modal fade" id="conversModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Беседа &laquo;Сергей беседин - Вирасетакул Апичатпонг&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<div class="questions">
					<div class="question">
					<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name">Сергей беседин <span class="pull-right date text-muted">10.12.2017 10:55:24</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis. Vivamus consectetur purus id lacus efficitur, semper iaculis arcu pellentesque. Pellentesque sit amet purus eget nulla cursus molestie nec at sem. Sed congue dolor purus, sed tempor purus blandit id. Sed facilisis turpis a augue vestibulum, a imperdiet eros malesuada. Donec gravida hendrerit lacus nec dapibus?
						</div>
					</div>
					<div class="question bg-grey">
						<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img bg-grey"></div>
						<div class="header">
							<div class="name">Вирасетакул Апичатпонг <span class="pull-right date text-muted">10.12.2017 10:55:24</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis. Vivamus consectetur purus id lacus efficitur, semper iaculis arcu pellentesque. Pellentesque sit amet purus eget nulla cursus molestie nec at sem. Sed congue dolor purus, sed tempor purus blandit id. Sed facilisis turpis a augue vestibulum, a imperdiet eros malesuada. Donec gravida hendrerit lacus nec dapibus?
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра жалобы -->
<div class="modal fade" id="viewRepModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Просмотр жалобы<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Жалоба на <b>личное сообщение</b> пользователя <b><a href="#">Алексей Сабля</a></b> по причине <b>СПАМ</b></p>
				<p><b>Комментарий:</b> Данный пользователь отправляет мне сообщения рекламного характера последние несколько дней. Прошу принять меры!</p>
				<p><b>Пожаловался:</b> <a href="#">Дмитрий Бородин</a>, 12.02.2018 21:10:34</p>
				<p><b>Содержимое сообщения</b> (на которое жалоба):</p>
				<p>Спешите купить по невероятно выгодной цене лучшие кормушки для летучих мышей! Только у нас и только до завтрашнего дня: используйте промокод "азбука" и получите трехмесячный запас питьевой воды лучшего качества! [ссылка удалена]</p>
				<p><a href="#">Алексей Сабля</a>, 12.02.2018 21:08:13</p>
				<hr>
				<p class="text-center">На пользователя <b><a href="#">Алексей Сабля</a></b>:<br>
				Жалоб: <span class="text-danger"><b>2</b></span> <a href="#">(посмотреть все)</a>.<br>
				Выдано предупреждений: <span class="text-danger"><b>1</b></span><br>
				Было блокировок: <span class="text-success"><b>0</b></span></p>
				<hr>
				<p class="text-center">
					<button type="button" class="btn btn-info button170" data-dismiss="modal" data-toggle="modal" data-target="#rejectRepModal">Отклонить жалобу</button>
					<button type="button" class="btn btn-warning button170" data-dismiss="modal" data-toggle="modal" data-target="#warnUsrModal">Выдать предупреждение</button>
					<button type="button" class="btn btn-danger button170" data-dismiss="modal" data-toggle="modal" data-target="#blockUsrModal">Заблокировать пользователя</button>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- окно отклонения жалобы -->
<div class="modal fade" id="rejectRepModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отклонить жалобу<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите отклонить жалобу на пользователю <b><a href="#">Алексей Сабля</a></b>?</p>
				<hr>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Отклонить</button><button type="button" class="btn btn-warning button140" data-dismiss="modal" data-toggle="modal" data-target="#viewRepModal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно вопроса техподдержке -->
<div class="modal fade" id="answModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Вопрос пользователя - Иван Грозный<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<div class="questions">
					<div class="question">
					<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name">Алексей Сабля <span class="pull-right date text-muted">10.12.2017 10:55:24</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Подскажите пожалуйста, как приготовить пельмени?
						</div>
					</div>
					<div class="question bg-grey">
						<div class="ava"><img src="images/des/des-user.jpg" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name"><b>[Descrow]</b> Вирасетакул Апичатпонг <span class="pull-right date text-muted">10.12.2017 10:55:28</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							Вылейте в миску теплую воду и молоко, разбейте туда яйцо и добавьте соль. Перемешайте до растворения соли. 
							Просейте муку на стол или в большую миску, сделайте в горке углубление и вылейте туда ранее приготовленный раствор. 
							Сначала смешайте все ложкой, затем помесите немного руками. Добавьте растительного масла (оно даст эластичность) и продолжайте замешивать. Если вы замешиваете в хлебопечке, масло лейте прямо на мешалку (флажок, который крутится и замешивает тесто). 
							Оставьте на 30–40 минут в теплом месте и начинайте делать фарш.
						</div>
					</div>
				</div>
				<hr>
				<div class="answer">
					<textarea id="answer" required="required" class="form-control" rows="3" placeholder="Ваш ответ..."></textarea><br>
					<button type="button" class="btn btn-info">Ответить</button>
					<button type="button" class="btn btn-warning pull-right">Пометить как решенный</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- окно изменения данных пользователя -->
<div class="modal fade in" id="editInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменение дополнительных данных<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Фамилия <input type="text" class="col-xs-12" value="Ефремов"></p><div class="clear"></div><p></p>
				<p>Имя <input type="text" class="col-xs-12" value="Николай"></p><div class="clear"></div><p></p>
				<p>Город проживания <input type="text" class="col-xs-12" value="Москва"></p><div class="clear"></div><p></p>
				<p>Телефон <input type="tel" class="col-xs-12" value="test@descrow.com"></p><div class="clear"></div><p></p>
				<p>E-mail: <input type="email" class="col-xs-12" value="test@descrow.com"></p><div class="clear"></div><p></p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Принять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal">Отмена</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно отмены ордера на бирже -->
<div class="modal fade" id="rejOrderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Снять ордер<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите снять ордер на <span class="text-success">покупку</span> <b>12</b> токенов <b>TDX</b> на сумму <b>$ 80</b> пользователя <b>Николай Ефремов</b>?</p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button140">Снять</button><button type="button" class="btn btn-warning button140" data-dismiss="modal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра отзыва (эксперт) -->
<div class="modal fade" id="exFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отзыв о работе<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Отзыв о работе на проекте «<a href="startup.php"><b>Гидравлический аннигилятор</b></a>» на позиции <span class="text-success">«<b>Администратор&nbsp;серверного&nbsp;парка</b>»</span></p>
				<hr>
				<h2>Отзыв заказчика</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><i>Алексей Кузнецов. Исполнительный директор ООО «Гидравлический аннигилятор»</i></p>
				<hr>
				<h2>Отзыв эксперта</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>
</div>
<!-- окно просмотра предложения (эксперт) -->
<div class="modal fade" id="exOfferModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Предложение сотрудничества<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<h3>$ 2 000 в месяц, 2-3 месяца</h3>
				<hr>
				<p>Проект «<a href="startup.php"><b>Гидравлический аннигилятор</b></a>» ищет специалиста на должность <span class="text-success">«<b>Администратор&nbsp;серверного&nbsp;парка</b>»</span>.</p>
				<p><a href="expert-feedback.php">Посмотреть отзывы о сотрудничестве</a></p>
				<hr>
				<p>
					<b>Требования:</b>
					</p><ul><li>Опыт администрирования серверов Linux/Windows.</li>
						<li>Опыт настройки сетевого оборудования.</li>
						<li>Знание языка SQL.</li>
						<li>Опыт работы со СКУД и системами физической безопасности.</li></ul>
				<p></p>
				<hr>
				<p>
					<b>Обязанности:</b>
					</p><ul><li>Администрирование серверов на базе Linux и MS Windows Server.</li>
						<li>Администрирование баз данных (MySQL, MS SQL).</li>
						<li>Администрирование сети (около 100 машин).</li>
						<li>Администрирование средств контроля доступа, учета рабочего времени, систем наблюдения.</li></ul>
				<p></p>
				<hr>
				<p><b>Примечание:</b></p>
				<p>Проектная занятость 2-3 месяца. График 5/2, восьмичасовой рабочий день. Плюсом будет наличие сертификатов (Cisco, Microsoft и т.д.), знание блокчейн и технических нюансов майнинга.</p>
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

<script>
$(".showPanel").click(function() {
	target = $(this).attr('name');
	$('.p-block').hide();
	$('.'+target).css('display', 'inline-block');
});
</script>

</body>

</html>
