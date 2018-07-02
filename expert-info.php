<?php require_once('_top-expert.php'); ?>
				<section class="expertInfo col-md-12">
					<div class="x_panel main">
						<div class="x_title">
						  <h2>Основная информация &nbsp;<a href="user - info.php"><button type="button" class="btn btn-xs btn-warning noborder">изменить</button></a></h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">ФИО:</div> Сергей Беседин </div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Город проживания:</div> Москва</div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Телефон:</div> +7 (903) 333-33-33</div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">E-mail:</div> test@descrow.com</div>
							</div>
						</div>
					</div>
					<div class="x_panel extra">
						<div class="x_title">
						  <h2>Дополнительная информация &nbsp;<button type="button" class="btn btn-xs btn-warning noborder"  data-toggle="modal" data-target="#editInfoModal">изменить</button></h2>
						  <!-- изменение должно работать аналогично разделу "личные данные -> измменить информацию" -->
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Дата рождения:</div> 01.01.1980</div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Персональный сайт:</div> asdgfdh.com</div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Знание языков:</div> русский&nbsp;(родной); английский&nbsp;(advanced)</div>
								<div class="col-md-3 col-sm-6 col-xs-12"><div class="lbl">Аккаунты в соц. сетях:</div> <a href="#">vk.com/asdfwgr5</a> <a href="#">facebook.com/asdfwgr5</a></div>
							</div>
							<div class="row">
								<div class="col-xs-12"><div class="lbl">Личностные качества:</div> быстрообучаемость, целеустремленность, организаторские способности, ответственность, усидчивость</div>
							</div>
						</div>
					</div>
					<div class="x_panel comp">
						<div class="x_title">
						  <h2>Компетенции</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left over-x-auto">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Компетенция <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Комментарий  <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><a href="startup.php">Специалист по сетям</a></td>
									<td>Сертификат Cisco Certified Network Professional (CCNP) (получен 10.12.2010)</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder">Удалить</button></td>
								  </tr>
								</tbody>
							</table>
							<button type="button" class="btn btn-md btn-info noborder" data-toggle="modal" data-target="#compAddModal">Добавить</button>
						</div>
					</div>
					<div class="x_panel exp">
						<div class="x_title">
						  <h2>Опыт работы</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content text-left over-x-auto">
							<h4>На платформе</h4>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Проект <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Позиция <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Период работы <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><a href="#">Гидравлический аннигилятор</a></td>
									<td><a href="#">Администратор серверного парка</a></td>
									<td>10.11.2016 - 03.08.2018</td>
									<td><button type="button" class="btn btn-info btn-sm noborder">Отзыв</button></td><!-- функциональность идентична кнопке "посмотреть отзыв" в "мои проекты" -> "я сотрудничал" -->
								  </tr>
								</tbody>
							</table>
							<hr/>
							<h4>Добавлено вручную</h4>
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">Компания / Проект <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Позиция  <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Период работы  <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><a href="startup.php">Название проекта</a></td>
									<td>Программист блокчейн</td>
									<td>10.11.2016 - 03.08.2018</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder">Удалить</button></td>
								  </tr>
								  <tr>
									<td><a href="startup.php">Название проекта</a></td>
									<td>Программист блокчейн</td>
									<td>10.11.2016 - 03.08.2018</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder">Удалить</button></td>
								  </tr>
								  <tr>
									<td><a href="startup.php">Название проекта</a></td>
									<td>Программист блокчейн</td>
									<td>10.11.2016 - 03.08.2018</td>
									<td><button type="button" class="btn btn-warning btn-sm noborder">Удалить</button></td>
								  </tr>
								</tbody>
							</table>
							<button type="button" class="btn btn-md btn-info noborder" data-toggle="modal" data-target="#expAddModal">Добавить</button>
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

<!-- окно добавления компетенции -->
<div class="modal fade" id="compAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавление компетенции<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>
					<select class="w-100">
					  <option selected disabled hidden>Укажите компетенцию</option>
					  <option>Программист</option>
					  <option>Юрист</option>
					  <option>Маркетолог</option>
					</select>
				</p>
				<p><textarea class="form-control col-xs-12" rows="4" placeholder="Наименование документа, подтверждающего компетенцию (дата выдачи, место выдачи) или иной комментарий"></textarea><div class="clear"></div></p>
				<p class="text-center"><button type="button" class="btn btn-success">Добавить</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно добавления опыта работы -->
<div class="modal fade" id="expAddModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавление места работы<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p><input type="text" class="col-xs-12" placeholder="Компания / Проект"><div class="clear"></div></p>
				<p><input type="text" class="col-xs-12" placeholder="Позиция"><div class="clear"></div></p>
				<p>Период работы: <input type="date" /> - <input type="date" /></p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-success">Добавить</button></p>
			</div>
		</div>
	</div>
</div>

<!-- окно изменения доп данных -->
<div class="modal fade in" id="editInfoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Изменение дополнительных данных<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Дата рождения</p>
				<p><input type="date" class="col-xs-12" value="1980-01-01"></p><div class="clear"></div><p></p>
				<p>Персональный сайт</p>
				<p><input type="text" class="col-xs-12" value="asdgfdh.com"></p><div class="clear"></div><p></p>
				<p>Знание языков (через запятую)</p>
				<p><input type="text" class="col-xs-12" value="русский (родной), английский (advanced)"></p><div class="clear"></div><p></p>
				<p>Аккаунты в соц. сетях (через запятую)</p>
				<p><input type="text" class="col-xs-12" value="vk.com/asdfwgr5, facebook.com/asdfwgr5"></p><div class="clear"></div><p></p>
				<p>Личностные качества</p>
				<p><textarea class="form-control col-xs-12" rows="2">быстрообучаемость, целеустремленность, организаторские способности, ответственность, усидчивость</textarea> </p><div class="clear"></div><p></p>
				<p class="text-center"><button type="button" class="btn btn-warning">Принять</button></p>
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
