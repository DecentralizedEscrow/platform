<?php require_once('_top.php'); ?>
				<section class="icoList col-md-12">
					<a href="startup-reg.php"><button type="button" class="addStartup pull-right btn btn-success noborder">Добавить свой стартап</button></a>
					<div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="infoTab" class="nav nav-tabs" role="tablist">
						  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-database"></i> &nbsp;Все проекты</a>
						  </li>
						  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false"><i class="fa fa-eye"></i> &nbsp;Избранные проекты</a>
						  </li>
						</ul>
						<div id="infoTabContent" class="tab-content">
						  <div role="tabpanel" class="main tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
							<div class="x_panel">
								<div class="x_title">
								  <h2>Проекты на стадии привлечения инвестиций</h2>
								  <ul class="nav navbar-right panel_toolbox">
									  <!--<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Суммы в USD <i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">
										  <li><a href="#">Показывать в ETH</a></li>
										</ul>
									  </li>-->
									  <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Статус <i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">
										  <li><a href="#">Идея</a></li>
										  <li><a href="#">Скоро</a></li>
										  <li><a href="#">На ICO</a></li>
										  <li><a href="#">В работе</a></li>
										  <li><a href="#">Завершено</a></li>
										</ul>
									  </li>
									  <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Сортировать <i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">
										  <li><a href="#">Дата добавления</a></li>
										  <li><a href="#">Собрано средств (всего)</a></li>
										  <li><a href="#">Процент собранных средств</a></li>
										  <li><a href="#">Дней до начала ICO</a></li>
										  <li><a href="#">Дней до конца ICO</a></li>
										  <li><a href="#">Добавлено в избранное</a></li>
										</ul>
									  </li>
									  <li class="displayLine"><a><i class="fa fa-th"></i></a>
									  </li>
									  <li class="displayBlock muted"><a><i class="fa fa-list"></i></a>
									  </li>
									</ul>
								  <div class="clearfix"></div>
								</div>
							  <div class="x_content">
								<div class="row">
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="statusP idea">Идея</div>
										<div class="img"><a href="startup.php"><img src="https://www.esa.int/var/esa/storage/images/esa_multimedia/images/2015/05/saint_george_basin_australia/15411139-1-eng-GB/Saint_George_Basin_Australia.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 4</a></div>
											<div class="descr">Mauris pellentesque leo lorem, id dapibus eros vehicula et. Aliquam consectetur mauris non laoreet feugiat.</div>
											<div style="padding: 11px 0;">
												<b>Обсуждение идеи проекта</b>
											</div>
											<div class="money">
												Заинтересовано: 12<br/>
												На сумму: $ 21 400
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="statusP soon">Скоро</div>
										<div class="img"><a href="startup.php"><img src="http://vunature.com/wp-content/uploads/2017/02/landscapes-stones-nature-wallpapers-hd-live.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 7</a></div>
											<div class="descr">Описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis.</div>
											<div style="padding: 11px 0;">
												<b>Старт ICO через 12 дней</b>
											</div>
											<div class="money">
												Собрано: -<br/>
												Цель: $ 1 000 000
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="statusP ico">ICO</div>
										<div class="img"><a href="startup.php"><img src="data:image/jpeg;base64,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" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 6</a></div>
											<div class="descr">Praesent luctus ultricies nunc, viverra laoreet mauris maximus sit amet. Aliquam metus lacus, mollis quis pulvinar at, efficitur vel</div>
											<div class="">
												<div class="pull-left">Прогресс 92%</div>
												<div class="pull-right">Осталось: 29 дней</div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="92" style="width: 92%;" aria-valuenow="92"></div></div>
											<div class="money">
												Собрано: $ 924 000<br/>
												Цель: $ 1 000 000
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
								</div>
								<div class="row">
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="statusP work">В работе</div>
										<div class="img"><a href="startup.php"><img src="https://www.aussiespecialist.com/content/asp/en/sales-resources/image-and-video-galleries/jcr:content/mainParsys/hero/image.adapt.1663.medium.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 5</a></div>
											<div class="descr">Vestibulum id gravida mi, nec porta mauris. Cras tellus neque, pharetra vel vulputate facilisis, dapibus in neque.</div>
											<div class="">
												<div class="pull-left">Этап #2 (из 3)</div>
												<div class="pull-right">Осталось: 58 дней</div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="12" style="width: 12%;" aria-valuenow="12"></div></div>
											<div class="money">
												Собрано: $ 1 000 000<br/>
												Реализация до: 27.12.2018
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="statusP work">В работе</div>
										<div class="img"><a href="startup.php"><img src="https://www.aussiespecialist.com/content/asp/en/sales-resources/image-and-video-galleries/jcr:content/mainParsys/hero/image.adapt.1663.medium.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 5</a></div>
											<div class="descr">Vestibulum id gravida mi, nec porta mauris. Cras tellus neque, pharetra vel vulputate facilisis, dapibus in neque.</div>
											<div style="padding: 11px 0;">
												<b>Идет голосование за 3 этап (ост. 2 дня)</b>
											</div>
											<div class="money">
												Собрано: $ 1 000 000<br/>
												Реализация до: 27.12.2018
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
									<div class="icoCard col-sm-4 col-xs-12 finished"><div>
										<div class="statusP finished">Завершено</div>
										<div class="img"><a href="startup.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT70rNulBU2tHWkHOOgkC0rQ1_PGhUXrv5HwfTQlT3XDQq7ks0gjw" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 3</a></div>
											<div class="descr">Cras iaculis odio congue, bibendum nisi vitae, consectetur mi. Integer massa libero, rhoncus vitae ex et, feugiat consectetur ligula.</div>
											<div style="padding: 11px 0;">
												<b>Проект завершился <span class="text-success">успешно</span></b>
											</div>
											<div class="money">
												Собрано: $ 1 000 000<br/>
												Завершено: 13.05.2018
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
								</div>
								<div class="row">
									<div class="icoCard col-sm-4 col-xs-12"><div>
									<div class="statusP finished">Завершено</div>
										<div class="img"><a href="startup.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVzX_Ty7JmDui_LTe5BmCU3vRgyBzd2EAto7dvqZGOC6kjmGhYsg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Test project 2</a></div>
											<div class="descr">Maecenas sit amet rhoncus lorem, vitae vulputate diam. Mauris eget suscipit lacus, id ullamcorper ex.</div>
											<div style="padding: 11px 0;">
												<b>Проект завершился <span class="text-danger" title="было собрано недостаточно средств на ICO">неудачно</span></b>
											</div>
											<div class="money">
												Собрано: $ 450 000<br/>
												Завершено: 13.05.2018
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
								</div>							
							  </div>
							</div>
						  </div>
						  <div role="tabpanel" class="main tab-pane fade in" id="tab_content2" aria-labelledby="favorite">
							<div class="x_panel">
								<div class="x_title">
								  <h2>Избранные проекты</h2>
								  <ul class="nav navbar-right panel_toolbox">
									  <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Категория <i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">
										  <li><a href="#">Категория 1</a>
										  </li>
										  <li><a href="#">Категория 2</a>
										  </li>
										</ul>
									  </li>
									  <li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Сортировать <i class="fa fa-caret-down"></i></a>
										<ul class="dropdown-menu" role="menu">
										  <li><a href="#">Параметр 1</a>
										  </li>
										  <li><a href="#">Параметр 2</a>
										  </li>
										</ul>
									  </li>
									  <li class="displayLine"><a><i class="fa fa-th"></i></a>
									  </li>
									  <li class="displayBlock muted"><a><i class="fa fa-list"></i></a>
									  </li>
									</ul>
								  <div class="clearfix"></div>
								</div>
							  <div class="x_content">
								<div class="row">
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="img"><a href="startup.php"><img src="http://daniellegibsonevents.com/wp-content/uploads/2014/06/16-9-dummy-image2.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Название проекта</a></div>
											<div class="descr">Описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis.</div>
											<div class="">
												<div class="pull-left">Прогресс 45%</div>
												<div class="pull-right">Осталось: 35 дней</div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div></div>
											<div class="money">
												Собрано: $ 1 583 354<br/>
												Цель: $ 1 000 000
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye-slash"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="img"><a href="startup.php"><img src="http://daniellegibsonevents.com/wp-content/uploads/2014/06/16-9-dummy-image2.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Название проекта</a></div>
											<div class="descr">Описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis.</div>
											<div class="">
												<div class="pull-left">Прогресс 45%</div>
												<div class="pull-right">Осталось: 35 дней</div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div></div>
											<div class="money">
												Собрано: $ 1 583 354<br/>
												Цель: $ 1 000 000
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye-slash"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
									<div class="icoCard col-sm-4 col-xs-12"><div>
										<div class="img"><a href="startup.php"><img src="http://daniellegibsonevents.com/wp-content/uploads/2014/06/16-9-dummy-image2.jpg" alt="" /></a></div>
										<div class="summary">
											<div class="name"><a href="startup.php">Название проекта</a></div>
											<div class="descr">Описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis.</div>
											<div class="">
												<div class="pull-left">Прогресс 45%</div>
												<div class="pull-right">Осталось: 35 дней</div>
											</div>
											<div class="progress"><div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div></div>
											<div class="money">
												Собрано: $ 1 583 354<br/>
												Цель: $ 1 000 000
											</div>
											<div class="btns"><div>
												<div><i class="fa fa-eye-slash"></i></div>
												<div><a href="startup.php"><button type="button" class="btn btn-info noborder btn-xs"> Подробнее</button></a></div>
											</div></div>
										</div>
									</div></div>
								</div>							
							  </div>
							</div>
						  </div>
						</div>
					</div>
									  
						<script>
							$(function () {
								$('.displayBlock').click(function () {
									$('.icoList').addClass('displayBlock');
									$('.displayBlock').removeClass('muted');
									$('.displayLine').addClass('muted');
								});
								$('.displayLine').click(function () {
									$('.icoList').removeClass('displayBlock');
									$('.displayLine').removeClass('muted');
									$('.displayBlock').addClass('muted');
								});
							});
						</script>
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

  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>
