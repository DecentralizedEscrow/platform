<?php require_once('_top-startup.php'); ?>
				<section class="startupEdit col-md-12">
					<div class="announcement">
						<h4>Обратите вниминие</h4>
						В случае внесения изменений, ваш проект попадет на повторную модерацию, которая может занять до 24 часов.
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Изменение данных стартапа</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Основная информация</a>
								  </li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Полное описание</a>
								  </li>
								  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Медиафайлы</a>
								  </li>
								  <li role="presentation" class=""><a href="#tab_content4" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">Команда</a>
								  </li>
								</ul>
								<div id="infoTabContent" class="tab-content">
								  <div role="tabpanel" class="main tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<div>
											<h2>Название проекта</h2>
											<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="Тормозной завод им. Годара" disabled>
											<div class="clearfix"></div>
										</div>
										<div class="row">
											<div class="col-sm-6 col-xs-12">
												<h2>Категория проекта</h2>
												<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="Информационные технологии">
												<div class="clearfix"></div>
											</div>
											<div class="col-sm-6 col-xs-12">
												<h2>Тэги проекта</h2>
												<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="IT, финтех, сингулярный антропоморф">
												<div class="clearfix"></div>
											</div>
										</div>
										<div>
											<h2>Краткое описание проекта</h2>
											<textarea id="short-descr" required="required" class="form-control col-xs-12" rows="4">Vestibulum iaculis magna non dictum laoreet. Suspendisse potenti. Praesent congue nibh nec orci mollis maximus. Vestibulum non leo eget odio blandit tincidunt eu ac arcu. Maecenas varius augue at ligula ornare feugiat. Sed sed risus felis. Sed blandit finibus enim at suscipit. Sed dignissim venenatis eleifend. Sed nec libero elementum, ornare arcu sed, hendrerit dolor. Cras faucibus urna a scelerisque laoreet. Maecenas in mollis enim, at rhoncus magna. Nulla ut dui sem. Pellentesque eu cursus elit.</textarea>
											<div class="clearfix"></div>
										</div>
										<hr/>
										<div>
											<h2>Сайт проекта</h2>
											<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="http://www.gamedev.ru">
											<div class="clearfix"></div>
										</div>
										<div>
											<h2>Проблемы, которые решает проект</h2>
											<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="Sed dignissim venenatis eleifend. Sed nec libero elementum">
											<div class="clearfix"></div>
										</div>
										<div>
											<h2>Каким образом решаются эти проблемы</h2>
											<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="Maecenas varius augue at ligula ornare feugiat">
											<div class="clearfix"></div>
										</div>
										<div>
											<h2>Технология / описание продукта</h2>
											<input type="text" id="project-name" required="required" class="form-control col-xs-12" value="Maecenas in mollis enim, at rhoncus magna. Nulla ut dui sem">
											<div class="clearfix"></div>
										</div>
										<div>
											<h2>Стадия реализации продукта</h2>
											<div id="project-state" class="btn-group" data-toggle="buttons">
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="1"> &nbsp; идея &nbsp;
											  </label>
											  <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="2" checked=""> прототип
											  </label>
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="3" checked=""> почти готовый продукт
											  </label>
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="4"> уже работающий продукт
											  </label>
											</div>
										</div><br/>
										<div>
										  <h2>Отображение данных о количестве заинтересованных инвесторов на странице стартапа</h2> <!-- актуально только для статуса "скоро" -->
											<div id="inv-info" class="btn-group" data-toggle="buttons">
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="reg-purpose" value="1"> Отображать
											  </label>
											  <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="reg-purpose" value="2" checked=""> Скрывать
											  </label>
											</div>
										</div>
									  </div>
									</div>
								  </div>
								  
								  <div role="tabpanel" class="full-descr tab-pane fade in" id="tab_content2" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<h2>Полное описание проекта</h2>
										<textarea id="full-descr" required="required" class="form-control col-xs-12" rows="10">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique pellentesque mi, nec eleifend lacus semper faucibus. Etiam sapien dui, vestibulum vel rutrum in, euismod in eros. In tempus odio ac leo accumsan consectetur. Praesent sed dui nec ipsum malesuada rutrum. Donec posuere augue imperdiet tortor volutpat, quis tincidunt dolor congue. Nulla vel est accumsan, porttitor nulla et, viverra mi. Nam nec imperdiet sapien. Praesent in libero dapibus enim gravida aliquet.</p>

											<p>Nam tempus bibendum eros, eu lacinia lorem dignissim tincidunt. Maecenas sed nisl at massa rhoncus laoreet non non mi. Nam malesuada pulvinar pulvinar. Nullam bibendum, urna at eleifend convallis, orci orci suscipit orci, ut scelerisque turpis dolor ac velit. Ut fringilla, arcu at vulputate venenatis, sem purus bibendum lectus, sit amet semper erat elit nec justo. Nulla facilisi. Cras luctus nec erat sit amet interdum. Etiam malesuada lectus ac felis congue, sed dictum diam maximus. Phasellus eu facilisis libero. Donec mattis orci in purus cursus, sit amet commodo felis cursus. Sed aliquam, lacus eget condimentum varius, orci nunc condimentum ex, vel gravida ligula massa sit amet urna. Integer vitae turpis non massa molestie consequat et ut mauris.</p>

											<p>Vestibulum iaculis magna non dictum laoreet. Suspendisse potenti. Praesent congue nibh nec orci mollis maximus. Vestibulum non leo eget odio blandit tincidunt eu ac arcu. Maecenas varius augue at ligula ornare feugiat. Sed sed risus felis. Sed blandit finibus enim at suscipit. Sed dignissim venenatis eleifend. Sed nec libero elementum, ornare arcu sed, hendrerit dolor. Cras faucibus urna a scelerisque laoreet. Maecenas in mollis enim, at rhoncus magna. Nulla ut dui sem. Pellentesque eu cursus elit.</p>

											<p>Donec suscipit est et velit malesuada egestas. Sed ultrices massa sit amet hendrerit ullamcorper. Pellentesque nisl velit, semper nec ex at, iaculis rhoncus quam. Vivamus egestas non odio sed lobortis. Proin nec orci sed nisi auctor maximus. Nullam eget urna sed odio egestas vehicula at ac nibh. Curabitur efficitur aliquam velit, non viverra ipsum. Quisque tincidunt in velit eu scelerisque. Donec laoreet porttitor dolor, vel consequat diam pulvinar ut. Proin nibh arcu, pretium eget risus ut, sodales consequat felis.</p>

											<p>Duis luctus semper dolor vel ullamcorper. Nunc orci lorem, imperdiet in nisi ac, dignissim vulputate mi. Donec pellentesque odio nulla, vel sagittis velit ultricies vel. Morbi a nibh dui. Nulla dapibus magna eu est elementum facilisis. Integer leo lorem, venenatis id nisl ac, cursus tincidunt mi. Morbi a mattis tellus. Sed ac massa posuere, bibendum ligula at, aliquam sapien.</p>
										</textarea>
										<div class="clearfix"></div>
									  </div>
									</div>
								  </div>
								  
								  <div role="tabpanel" class="medias tab-pane fade in" id="tab_content3" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<div>
											<h2>Видеопрезентация проекта (ссылка)</h2>
											<input type="text" id="project-name" required="required" class="form-control col-xs-12" value ="https://www.youtube.com/watch?v=izv1Wh3vvTQ">
											<div class="clearfix"></div>
										</div>
										<div class="img">
											<h2>Фотоматериалы проекта (максимум 4 фото)</h2>
											<div class="row">
												<div class="col-sm-3 col-xs-12"><img src="http://daniellegibsonevents.com/wp-content/uploads/2014/06/16-9-dummy-image2.jpg" alt=""><div class="del">Удалить</div></div>
												<div class="col-sm-3 col-xs-12"><img src="http://daniellegibsonevents.com/wp-content/uploads/2014/06/16-9-dummy-image2.jpg" alt=""><div class="del">Удалить</div></div>
												<div class="col-sm-3 col-xs-12"><img src="http://daniellegibsonevents.com/wp-content/uploads/2014/06/16-9-dummy-image2.jpg" alt=""><div class="del">Удалить</div></div>
											</div>
											<span class="btn btn-primary btn-file">Загрузить <input type="file" multiple></span>
											<div class="clearfix"></div>
										</div>
									  </div>
									</div>
								  </div>
								  
								  <div role="tabpanel" class="team tab-pane fade in" id="tab_content4" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<a href="startup-experts.php"><button type="button" class="btn btn-success noborder pull-right"><i class="fa fa-wrench"></i> &nbsp;Найти эксперта</button></a>
										<h2>Команда проекта</h2>
										<div class="row">
											<div class="teamCard col-md-3 col-sm-4 col-xs-12">
												<div>
													<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt=""></div>
													<div class="name">Андрей Малахов</div>
													<div class="position">Технический директор</div>
													<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
													<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
													<div class="edit"><a href="#">изменить</a> | <a href="#">удалить</a></div>
												</div>
											</div>
											<div class="teamCard col-md-3 col-sm-4 col-xs-12">
												<div>
													<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt=""></div>
													<div class="name">Андрей Малахов</div>
													<div class="position">Технический директор</div>
													<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
													<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
													<div class="edit"><a href="#">изменить</a> | <a href="#">удалить</a></div>
												</div>
											</div>
											<div class="teamCard col-md-3 col-sm-4 col-xs-12">
												<div>
													<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt=""></div>
													<div class="name">Андрей Малахов</div>
													<div class="position">Технический директор</div>
													<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
													<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
													<div class="edit"><a href="#">изменить</a> | <a href="#">удалить</a></div>
												</div>
											</div>
										</div>
										<button type="button" class="btn btn-success noborder" data-toggle="modal" data-target="#addTeamModal">Добавить нового члена команды</button>
										
										<hr/>
										
										<h2>Советники проекта</h2>
										<div class="row">
											<div class="teamCard col-md-3 col-sm-4 col-xs-12">
												<div>
													<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt=""></div>
													<div class="name">Андрей Малахов</div>
													<div class="position">Технический директор</div>
													<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
													<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
													<div class="edit"><a href="#">изменить</a> | <a href="#">удалить</a></div>
												</div>
											</div>
										</div>
										<button type="button" class="btn btn-success noborder" data-toggle="modal" data-target="#addAdvModal">Добавить нового советника</button>
									  </div>
									</div>
								  </div>
								  
								</div>
							</div>

							<div class="btns"><button type="button" class="btn btn-success btn-lg">Принять изменения и отправить на модерацию</button><button type="button" class="btn btn-warning btn-lg">Отменить изменения</button><button type="button" class="btn btn-info btn-lg">Сохранить для дальнейшего редактирования</button></div>
						</div>
					</div>
				</section>
				
				<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
				<script>
					// подключение редактора
					CKEDITOR.replace( 'full-descr', {
						// extraPlugins: 'autogrow',
						// autoGrow_minHeight: 200,
						// autoGrow_maxHeight: 600,
						// autoGrow_bottomSpace: 50,
						// removePlugins: 'resize',
						// //autoGrow_onStartup: 'true'
					} );
					
					// показ кнопки удаления строки
					//if (sNum > 1) {$('.delRow').show();} else {$('.delRow').hide();}
					// $( ".btn" ).click(function() {
						// if (tNum > 1) {$('.delRow').show();} else {$('.delRow').hide();}
					// });
				</script>
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
  
<!-- окно добавления члена команды -->
<div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавить члена команды<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>ФИО</p>
				<input type="text" class="col-xs-12" />
				<p>Должность в проекте</p>
				<input type="text" class="col-xs-12" />
				<p>Описание</p>
				<input type="text" class="col-xs-12" />
				<p>Контакты</p>
				<p>Facebook: https://www.facebook.com/amasdds - <a href="#"><span class="text-danger">удалить</span></a><br/></p>
				<button type="button" class="btn btn-primary noborder addContactBtn" onclick="$('.addContact').slideDown('fast'); $(this).slideUp('fast');">Добавить новый контакт</button>
				<div class="row addContact">
					<div class="col-md-3 col-xs-12">
						<select class="form-control">
						  <option>Facebook</option>
						  <option>Twitter</option>
						  <option>Google+</option>
						</select>
					</div>
					<div class="col-md-6 col-xs-12">
						<input type="text" id="teamLink_1" class="docLink form-control" value="https://facebook.com/sfrjwoei">
					</div>
					<div class="col-md-3 col-xs-12">
						<button type="button" class="btn btn-success noborder vx"><i class="fa fa-check" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-warning noborder vx" onclick="$('.addContact').slideUp('fast'); $('.addContactBtn').slideDown('fast');"><i class="fa fa-times" aria-hidden="true"></i></button>
					</div>
				</div>
				<p>Фото</p>
				<span class="btn btn-primary btn-file">Добавить фото <input type="file" /></span>
			</div>
		</div>
	</div>
</div>
<!-- окно добавления советника -->
<div class="modal fade" id="addAdvModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавить советника<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>ФИО</p>
				<input type="text" class="col-xs-12" />
				<p>Должность в проекте</p>
				<input type="text" class="col-xs-12" />
				<p>Описание</p>
				<input type="text" class="col-xs-12" />
				<p>Контакты</p>
				<button type="button" class="btn btn-primary noborder" data-toggle="modal" data-target="#addContactModal">Добавить новый контакт</button>
				<p>Фото</p>
				<span class="btn btn-primary btn-file">Добавить фото <input type="file" /></span>
			</div>
		</div>
	</div>
</div>
<!-- окно добавления контакта -->
<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавить контакт<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-3 col-xs-12">
						<select class="form-control">
						  <option>Facebook</option>
						  <option>Twitter</option>
						  <option>Google+</option>
						</select>
					</div>
					<div class="col-md-6 col-xs-12">
						<input type="text" id="teamLink_1" class="docLink form-control" value="https://facebook.com/sfrjwoei">
					</div>
					<div class="col-md-2 col-xs-12">
						<button type="button" class="btn btn-success noborder">Добавить контакт</button>
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
