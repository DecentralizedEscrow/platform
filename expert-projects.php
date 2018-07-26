<?php require_once('_top-expert.php'); ?>
				<section class="expertProjects col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Мои сотрудничества</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="tabParent tp1" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Я сотрудничаю</a></li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Я сотрудничал</a></li>
								</ul>
								<div id="infoTabContent" class="tab-content">

								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content over-x-auto">
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Проект <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Роль  <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Начало сотрудничества  <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="startup.php">Название проекта</a></td>
												<td>
													Эксперт по маркетингу
												</td>
												<td>21.12.2018</td>
												<td><button type="button" class="btn btn-warning noborder btn-sm" data-toggle="modal" data-target="#coopCancelModal">Завершить сотрудничество</button></td>
											  </tr>
											  <tr>
												<td><a href="startup.php">Название проекта</a></td>
												<td>
													Эксперт по маркетингу
												</td>
												<td>21.12.2018</td>
												<td><button type="button" class="btn btn-warning noborder btn-sm" data-toggle="modal" data-target="#coopCancelModal">Завершить сотрудничество</button></td>
											  </tr>
											  <tr>
												<td><a href="startup.php">Название проекта</a></td>
												<td>
													Эксперт по маркетингу
												</td>
												<td>21.12.2018</td>
												<td><button type="button" class="btn btn-warning noborder btn-sm" data-toggle="modal" data-target="#coopCancelModal">Завершить сотрудничество</button></td>
											  </tr>
											</tbody>
										</table>
									  </div>
									</div>
								  </div>
								  
								  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_content over-x-auto">
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Проект <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Роль  <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Период сотрудничества  <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="startup.php">Название проекта</a></td>
													<td>
														Эксперт по маркетингу
													</td>
													<td>21.12.2018 - 22.02.2019</td>
													<td><button type="button" class="btn btn-info noborder btn-sm" data-toggle="modal" data-target="#feedbackModal">Посмотреть отзыв</button></td>
												  </tr>
												  <tr>
													<td><a href="startup.php">Название проекта</a></td>
													<td>
														Эксперт по маркетингу
													</td>
													<td>21.12.2018 - 22.02.2019</td>
													<td><button type="button" class="btn btn-info noborder btn-sm" data-toggle="modal" data-target="#feedbackModal">Посмотреть отзыв</button></td>
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

<!-- окно подтверждения отмены -->
<div class="modal fade" id="offerDismissModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отказаться от предложения<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p><span class="text-success">&laquo;<b>Администратор&nbsp;серверного&nbsp;парка</b>&raquo;</span> на проект &laquo;<a href="startup.php"><b>Гидравлический аннигилятор</b></a>&raquo;.</p>
				<p>Вы действительно хотите отказаться от этого предложения?</p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning">Отказаться</button><button type="button" class="btn btn-warning" data-dismiss="modal">Назад</button></p>
			</div>
		</div>
	</div>
</div>
<!-- окно отзыва -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Отзыв о работе<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Отзыв о работе на проекте &laquo;<a href="startup.php"><b>Гидравлический аннигилятор</b></a>&raquo; на позиции <span class="text-success">&laquo;<b>Администратор&nbsp;серверного&nbsp;парка</b>&raquo;</span></p>
				<hr/>
				<h2>Отзыв заказчика</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><i>Алексей Кузнецов. Исполнительный директор ООО &laquo;Гидравлический аннигилятор&raquo;</i></p>
				<hr/>
				<h2>Мой отзыв</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				[[ *если отзыв еще не написан, вместо его текста отображается форма "Написать отзыв о сотрудничестве" идентичная форме в "завершении сотрудничества" ]]
			</div>
		</div>
	</div>
</div>
<!-- окно завершения сотудничества -->
<div class="modal fade" id="coopCancelModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Завершить сотрудничество<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<b><p>&laquo;<a href="startup.php"><b>Гидравлический аннигилятор</b></a>&raquo; 
				<p>Программист блокчейн, $2 000</p></b>
				<p>Вы действительно хотите завершить сотрудничество с даным проектом?</p>
				<p><b>Написать отзыв о сотрудничестве:</b></p>
				<p><textarea class="form-control col-xs-12" rows="4"></textarea><div class="clear"></div></p>
				<hr/>
				<p class="text-center"><button type="button" class="btn btn-warning button170">Завершить сотрудничество</button><button type="button" class="btn btn-warning button170" data-dismiss="modal">Назад</button></p>
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
