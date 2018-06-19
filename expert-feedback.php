
<?php require_once('_top-expert.php'); ?>
				<section class="expertProjects col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Отзывы о сотрудничестве с проектом &laquo;название&raquo; [*отображается при запросе отзывов о проекте]</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content over-x-auto">
							<table class="table table-striped valign-m">
								<thead>
								  <tr>
									<th><a href="#">ФИО <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Роль  <i class="fa fa-caret-down"></i></a></th>
									<th><a href="#">Период сотрудничества  <i class="fa fa-caret-down"></i></a></th>
									<th></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><a href="startup.php">Николай Васильевич Гоголь</a></td>
									<td>
										Эксперт по маркетингу
									</td>
									<td>21.12.2018 - 22.02.2019</td>
									<td><button type="button" class="btn btn-info noborder btn-sm" data-toggle="modal" data-target="#feedbackModal">Посмотреть отзыв</button></td>
								  </tr>
								  <tr>
									<td><a href="startup.php">Николай Васильевич Гоголь</a></td>
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
					
					<div class="x_panel">
						<div class="x_title">
						  <h2>Отзывы о сотрудничестве со специалистом &laquo;ФИО&raquo; [*отображается при запросе отзывов о специалисте]</h2>
						  <div class="clearfix"></div>
						</div>
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
				<h2>Отзыв специалиста</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				[[ *в зависимости от вида запроса, выводится либо отзыв заказчика, либо специалиста ]]
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
