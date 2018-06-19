<?php require_once('_top.php'); ?>
				<section class="startupCard col-md-12">
				  <!-- актуально для проектов на стадии идеи -->
				  <div class="announcement hidden">
					<h4>Этот проект находится на стадии оценки идеи.</h4>
					Вы можете задать вопрос его создателям или помочь им советом.<br/>
					Если вы заинтересованы в инвестировании в данный проект, нажмите на кнопку "Поддержать" и выбирите желаемую сумму инвестирования. Стартап увидит вашу заинтересованность, а в случае решения о запуске ICO получит указаное финансирование в обмен на токены по установленному курсу. Вы можете отменить резервирование средств в любой момент до начала ICO.
				  </div>
				  
				  <div class="x_panel">
					<div class="x_title">
					  <h2>Test project 8</h2>
						<!-- показывается в случае, если карточку просматривает создатель стартапа -->
						<a href="startup-edit.php"><button type="button" class="changeInfo pull-right btn btn-info noborder">Изменить информацию</button></a>
					  <div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="pShortInfo">
							Краткое описание проекта. Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis. Vivamus consectetur purus id lacus efficitur, semper iaculis arcu pellentesque. Pellentesque sit amet purus eget nulla cursus molestie nec at sem. Sed congue dolor purus, sed tempor purus blandit id. Sed facilisis turpis a augue vestibulum, a imperdiet eros malesuada. Donec gravida hendrerit lacus nec dapibus.
						</div>
						<hr>
						
						<!-- медиаблок -->
						<div class="pMedia col-sm-7 col-xs-12">
							<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vpyeQeTDGFA" frameborder="0" allowfullscreen></iframe></div>
							
							<!-- галерея -->
							<div class="row gallery">

								<div class="col-lg-12">
									<div class="col-sm-3 thumb">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Заголовок" data-caption="описание" data-image="https://wallpapercave.com/wp/kh0XwXE.jpg" data-target="#image-gallery">
											<img class="img-responsive" src="https://wallpapercave.com/wp/kh0XwXE.jpg" alt="">
										</a>
									</div>
									<div class="col-sm-3 thumb">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Заголовок 2" data-caption="описание" data-image="https://s-media-cache-ak0.pinimg.com/originals/4c/0e/97/4c0e9708d8471a84794f87d66784dcd2.jpg" data-target="#image-gallery">
											<img class="img-responsive" src="https://s-media-cache-ak0.pinimg.com/originals/4c/0e/97/4c0e9708d8471a84794f87d66784dcd2.jpg" alt="">
										</a>
									</div>
									<div class="col-sm-3 thumb">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Заголовок 3" data-caption="описание" data-image="http://cdn.wallpapersafari.com/86/27/qSYXsu.jpg" data-target="#image-gallery">
											<img class="img-responsive" src="http://cdn.wallpapersafari.com/86/27/qSYXsu.jpg" alt="">
										</a>
									</div>
									<div class="col-sm-3 thumb">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Заголовок 4" data-caption="описание" data-image="https://hdwallsource.com/img/2014/5/game-wallpapers-9024-9367-hd-wallpapers.jpg" data-target="#image-gallery">
											<img class="img-responsive" src="https://hdwallsource.com/img/2014/5/game-wallpapers-9024-9367-hd-wallpapers.jpg" alt="">
										</a>
									</div>
								</div>	
							</div>
							<script>	
							$(document).ready(function(){

								loadGallery(true, 'a.thumbnail');

								//This function disables buttons when needed
								function disableButtons(counter_max, counter_current){
									$('#show-previous-image, #show-next-image').show();
									if(counter_max == counter_current){
										$('#show-next-image').hide();
									} else if (counter_current == 1){
										$('#show-previous-image').hide();
									}
								}

								/**
								 *
								 * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
								 * @param setClickAttr  Sets the attribute for the click handler.
								 */

								function loadGallery(setIDs, setClickAttr){
									var current_image,
										selector,
										counter = 0;

									$('#show-next-image, #show-previous-image').click(function(){
										if($(this).attr('id') == 'show-previous-image'){
											current_image--;
										} else {
											current_image++;
										}

										selector = $('[data-image-id="' + current_image + '"]');
										updateGallery(selector);
									});

									function updateGallery(selector) {
										var $sel = selector;
										current_image = $sel.data('image-id');
										//$('#image-gallery-caption').text($sel.data('caption'));
										$('#image-gallery-title').text($sel.data('title'));
										$('#image-gallery-image').attr('src', $sel.data('image'));
										disableButtons(counter, $sel.data('image-id'));
									}

									if(setIDs === true){
										$('[data-image-id]').each(function(){
											counter++;
											$(this).attr('data-image-id',counter);
										});
									}
									$(setClickAttr).on('click',function(){
										updateGallery($(this));
									});
								}
							});
							</script>	
						</div>
						
						<!-- статблок для проекта на стадии идеи -->
						<div class="stats col-sm-5 col-xs-12 hidden">
							<div class="row" style="margin-top: 20px;">
								Проектом заинтересовано <b>24</b> инвестора,<br/>
								готовых выделить на реализацию <b>$ 375 000</b>
							</div>
							<div class="earn row">
								<div class="num">$ 1 513 354</div>
								<div class="txt">требуется на реализацию</div>
							</div>
							<div class="btns row">
								<div class="col-xs-3" style="padding-right: 10px;"><button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#askModal"><i class="fa fa-envelope"></i></button></div>
								<div class="col-xs-9"><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#BuyIdeaModal">Поддержать</button></div>
							</div>
							<div class="row"><hr></div>
							<div class="tags row">
								<div class="col-md-6 col-xs-12">
									Теги: 
									<button type="button" class="btn btn-info noborder btn-xs">тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег-тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег</button>
								</div>
								<div class="col-md-6 col-xs-12"><a href="#"><i class="fa fa-folder-open"></i> <span>Название категории</span></a></div>
							</div>
							<div class="row"><hr></div>
							<div class="footer row">
								<div class="pull-left"><button type="button" class="btn btn-info noborder btn-xs"><i class="fa fa-eye"></i> Следить</button></div>
								<div class="pull-right social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-link"></i></a></div>
							</div>
						</div>
						
						<!-- статблок для проекта СКОРО -->
						<div class="stats col-sm-5 col-xs-12 hidden">
							<div class="row" style="margin-top: 20px;">
								<h4><b>Старт ICO через 12 дней</b></h4>
								Проектом заинтересовано <b>24</b> инвестора,<br/>
								готовых выделить на реализацию <b>$ 375 000</b>
							</div>
							<div class="earn row">
								<div class="num">$ 1 513 354</div>
								<div class="txt">требуется на реализацию</div>
							</div>
							<div class="btns row">
								<div class="col-xs-3" style="padding-right: 10px;"><button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#askModal"><i class="fa fa-envelope"></i></button></div>
								<div class="col-xs-9"><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#BuyIdeaModal">Поддержать</button></div>
							</div>
							<div class="row"><hr></div>
							<div class="tags row">
								<div class="col-md-6 col-xs-12">
									Теги: 
									<button type="button" class="btn btn-info noborder btn-xs">тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег-тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег</button>
								</div>
								<div class="col-md-6 col-xs-12"><a href="#"><i class="fa fa-folder-open"></i> <span>Название категории</span></a></div>
							</div>
							<div class="row"><hr></div>
							<div class="footer row">
								<div class="pull-left"><button type="button" class="btn btn-info noborder btn-xs"><i class="fa fa-eye"></i> Следить</button></div>
								<div class="pull-right social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-link"></i></a></div>
							</div>
						</div>
						
						<!-- статблок для проекта на ICO -->
						<div class="stats col-sm-5 col-xs-12 hidden">
							<div class="row">
								<div class="pull-left">Прогресс 50%</div>
								<div class="pull-right">Ост: 11 дней</div>
							</div>
							<div class="progress row">
							  <div class="progress-bar progress-bar-info" data-transitiongoal="50" style="width: 50%;" aria-valuenow="50"></div>
							</div>
							<div class="earn row">
								<div class="num"><span title="$ 531 855 по текущему курсу">890 ETH</span></div>
								<div class="txt">собрано из запрашиваемой суммы<br/><span title="$ 1 063 710 по текущему курсу">1780 ETH</span></div>
							</div>
							<div class="btns row">
								<div class="col-xs-3" style="padding-right: 10px;"><button type="button" class="btn btn-info btn-lg btn-block" data-toggle="modal" data-target="#askModal"><i class="fa fa-envelope"></i></button></div>
								<div class="col-xs-9"><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#buyModal">Купить токены</button></div>
							</div>
							<div class="row"><hr></div>
							<div class="tags row">
								<div class="col-md-6 col-xs-12">
									Теги: 
									<button type="button" class="btn btn-info noborder btn-xs">тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег-тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег</button>
								</div>
								<div class="col-md-6 col-xs-12"><a href="#"><i class="fa fa-folder-open"></i> <span>Название категории</span></a></div>
							</div>
							<div class="row"><hr></div>
							<div class="footer row">
								<div class="pull-left"><button type="button" class="btn btn-info noborder btn-xs"><i class="fa fa-eye"></i> Следить</button></div>
								<div class="pull-right social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-link"></i></a></div>
							</div>
						</div>
						
						<!-- статблок для проекта в работе - выполнение этапа -->
						<div class="stats col-sm-5 col-xs-12 ">
							<div class="row">
								<div class="pull-left">Этап #2 (из 3)</div>
								<div class="pull-right">Ост: 35 дней</div>
							</div>
							<div class="progress row">
							  <div class="progress-bar progress-bar-info" data-transitiongoal="45" style="width: 45%;" aria-valuenow="45"></div>
							</div>
							<div class="earn row">
								<div class="num">ПРОЕКТ В РАБОТЕ</div>
								<div class="txt">$ 3 518 564 собрано на ICO<br/>Реализация до: 24.12.2018</div>
							</div>
							<div class="btns row">
								<div class="col-xs-3" style="padding-right: 10px;"><button type="button" class="btn btn-info btn-lg btn-block"><i class="fa fa-envelope"></i></button></div>
								<div class="col-xs-9"><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#buyFreezeModalList">Купить замороженные токены</button></div>
							</div>
							<div class="row"><hr></div>
							<div class="tags row">
								<div class="col-md-6 col-xs-12">
									Теги: 
									<button type="button" class="btn btn-info noborder btn-xs">тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег-тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег</button>
								</div>
								<div class="col-md-6 col-xs-12"><a href="#"><i class="fa fa-folder-open"></i> <span>Название категории</span></a></div>
							</div>
							<div class="row"><hr></div>
							<div class="footer row">
								<div class="pull-left"><button type="button" class="btn btn-info noborder btn-xs"><i class="fa fa-eye"></i> Следить</button></div>
								<div class="pull-right social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-link"></i></a></div>
							</div>
						</div>
						
						<!-- статблок для проекта в работе - голосование -->
						<div class="stats col-sm-5 col-xs-12 hidden">
							<div class="row" style="margin-top: 20px;">
								<h4><b>Идет голосование за этап 3</b></h4>
							</div>
							<div class="earn row">
								<div class="num">ПРОЕКТ В РАБОТЕ</div>
								<div class="txt">$ 3 518 564 собрано на ICO<br/>Реализация до: 24.12.2018</div>
							</div>
							<div class="btns row">
								<div class="col-xs-3" style="padding-right: 10px;"><button type="button" class="btn btn-info btn-lg btn-block"><i class="fa fa-envelope"></i></button></div>
								<div class="col-xs-9"><button type="button" class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#buyFreezeModalList">Купить замороженные токены</button></div>
							</div>
							<div class="row"><hr></div>
							<div class="tags row">
								<div class="col-md-6 col-xs-12">
									Теги: 
									<button type="button" class="btn btn-info noborder btn-xs">тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег-тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег</button>
								</div>
								<div class="col-md-6 col-xs-12"><a href="#"><i class="fa fa-folder-open"></i> <span>Название категории</span></a></div>
							</div>
							<div class="row"><hr></div>
							<div class="footer row">
								<div class="pull-left"><button type="button" class="btn btn-info noborder btn-xs"><i class="fa fa-eye"></i> Следить</button></div>
								<div class="pull-right social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-link"></i></a></div>
							</div>
						</div>
						
						<!-- статблок для завершенного проекта -->
						<div class="stats col-sm-5 col-xs-12 hidden">
							<h4><b>Проект завершился <span class="text-success">успешно</span></b></h3>
							Завершен: 24.12.2018
							<div class="earn row">
								<div class="num">$ 3 518 564</div>
								<div class="txt">собрано на ICO</div>
							</div>
							<div class="btns row">
								<div class="col-xs-12" style="padding-right: 10px;"><button type="button" class="btn btn-info btn-lg btn-block"><i class="fa fa-envelope"></i> &nbsp;Написать проекту</button></div>
							</div>
							
							<div class="row"><hr></div>
							<div class="tags row">
								<div class="col-md-6 col-xs-12">
									Теги: 
									<button type="button" class="btn btn-info noborder btn-xs">тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег-тег</button>
									<button type="button" class="btn btn-info noborder btn-xs">тег-тег</button>
								</div>
								<div class="col-md-6 col-xs-12"><a href="#"><i class="fa fa-folder-open"></i> <span>Название категории</span></a></div>
							</div>
							<div class="row"><hr></div>
							<div class="footer row">
								<div class="pull-left"><button type="button" class="btn btn-info noborder btn-xs"><i class="fa fa-eye"></i> Следить</button></div>
								<div class="pull-right social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-link"></i></a></div>
							</div>
						</div>
					</div>
				  </div>
				</section>
				
				<!-- детали проекта -->
				<section class="pDetails col-md-12">
				  <div class="x_panel">

					<div class="x_content">


					  <div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="infoTab" class="nav nav-tabs" role="tablist">
						  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Описание</a>
						  </li>
						  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="tab3" data-toggle="tab" aria-expanded="false">Команда</a>
						  </li>
						  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">RoadMap</a>
						  </li>
						  <li role="presentation" class=""><a href="#tab_content4" role="tab" id="tab4" data-toggle="tab" aria-expanded="false">Отчеты</a>
						  </li>
						  <li role="presentation" class=""><a href="#tab_content5" role="tab" id="tab5" data-toggle="tab" aria-expanded="false">Голосование</a>
						  </li>
						  <li role="presentation" class=""><a href="#tab_content6" role="tab" id="tab6" data-toggle="tab" aria-expanded="false">Вопросы</a>
						  </li>
						</ul>
						<div id="infoTabContent" class="tab-content">
						
						  <!-- описание -->
						  <div role="tabpanel" class="info tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
							<div class="x_panel">
							  <div class="x_title">
								<h2>Описание проекта</h2>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ex tortor, porta vitae sem non, pretium molestie ante. Curabitur placerat venenatis sem, eu finibus risus porta eu. Nunc venenatis consequat finibus. Maecenas at massa in quam tristique feugiat ut et dolor. Praesent ultrices consectetur justo eu ullamcorper. Phasellus non ante in dolor congue commodo. Mauris faucibus rutrum tellus, ut bibendum ligula lobortis non. Fusce et semper sapien, vitae imperdiet ex. Maecenas placerat nisi ut tortor faucibus, eget euismod ligula sodales. Cras eleifend accumsan pharetra. Vestibulum nec finibus dolor, id fermentum turpis. Quisque gravida sodales fringilla. Maecenas sagittis a metus nec ornare. Proin molestie rutrum gravida. Praesent vel lectus nisl. Duis pretium ante id elit volutpat dapibus.
								</p><p>
									Sed ultrices lorem ut bibendum finibus. Nunc ornare dignissim massa sit amet auctor. Suspendisse lacinia at nibh tincidunt pulvinar. Duis nec tortor sagittis enim placerat venenatis ut quis lectus. Duis velit turpis, ultricies nec dui et, fermentum aliquet quam. Phasellus vel odio consectetur, feugiat lorem et, malesuada urna. Proin porttitor nunc mauris. Praesent posuere risus nibh, id vulputate elit congue vel. Donec et fermentum eros. Cras ullamcorper nunc ultricies est porta, non accumsan massa pharetra. Aenean dignissim imperdiet volutpat. Donec aliquet pellentesque vestibulum. Maecenas mattis eros quis fringilla luctus. Nam ultrices, justo ut congue tempus, leo nunc tristique mauris, et interdum nisi libero sagittis neque. Donec id ex commodo nibh laoreet lacinia. Proin pellentesque leo metus, quis imperdiet odio aliquam eu.
								</p><p>
									Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis. Nam ultrices scelerisque tortor. Sed id varius leo. Aliquam erat volutpat. Aliquam massa massa, condimentum eget dolor nec, porttitor tristique lorem. Duis aliquam dolor quis nisl ultrices vehicula. Suspendisse facilisis molestie lorem, nec suscipit sem sollicitudin ut. Aliquam quam urna, tempor at felis eleifend, molestie semper justo. Proin magna risus, feugiat ac volutpat id, imperdiet eget enim. Vestibulum id arcu laoreet, dapibus mi vel, egestas nisl. Suspendisse vitae blandit purus.
								</p><p>
									Quisque cursus, est et viverra commodo, orci nisl imperdiet dolor, vel convallis massa ligula vitae ligula. Curabitur sodales purus lacus, id rutrum tortor eleifend at. Maecenas pulvinar orci ornare, ultricies velit id, finibus urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris feugiat leo et augue ultrices, in condimentum ligula mattis. Nulla tristique ac diam porttitor scelerisque. Duis auctor suscipit magna, eu scelerisque eros auctor finibus. Pellentesque odio sapien, auctor fermentum ex sed, egestas bibendum erat.
								</p><p>
									Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis. Vivamus consectetur purus id lacus efficitur, semper iaculis arcu pellentesque. Pellentesque sit amet purus eget nulla cursus molestie nec at sem. Sed congue dolor purus, sed tempor purus blandit id. Sed facilisis turpis a augue vestibulum, a imperdiet eros malesuada. Donec gravida hendrerit lacus nec dapibus.
								</p>
								<img src="images/picture2.jpg" class="img-responsive" alt="" />
							  </div>
							</div>
						  </div>
						  
						  <!-- roadmap -->
						  <div role="tabpanel" class="roadmap tab-pane fade" id="tab_content2" aria-labelledby="tab2">
							<div class="x_panel">
							  <div class="x_title">
								<h2>RoadMap - Дорожная карта проекта</h2>
								<ul class="nav navbar-right panel_toolbox">
								  <li><a href="#" data-toggle="modal" data-target="#roadChangeModal"><i class="fa fa-calendar"></i> <span>История изменений</span></a>
								  </li>
								</ul>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">
							  
								<table class="table table-striped">
									<thead>
									  <tr>
										<th width="135">Этап</th>
										<th>Что будет сделано</th>
										<th class="text-right">Сколько нужно<br/>средств в % от сборов</th>
									  </tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							  
								<ul class="list-unstyled timeline">
								  <li>
									<div class="block">
									  <div class="tags">
										<a href="" class="tag inprogress">
										  <span>#3 - 01.11.2018</span>
										</a>
									  </div>
									  <div class="block_content">
										<table><tr>
											<td class="descr">
												<h2 class="title"><a>Заголовок этапа</a></h2>
												<p class="excerpt">Краткое содержание этапа. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward</p>
											</td>
											<td class="percentage">
												<span class="align-middle">25%</span>
											</td>
										</tr></table>
									  </div>
									</div>
								  </li>
								  <li>
									<div class="block">
									  <div class="tags">
										<a href="" class="tag done">
										  <span>#2 - 01.10.2018</span>
										</a>
									  </div>
									  <div class="block_content">
										<table><tr>
											<td class="descr">
												<h2 class="title"><a>Заголовок этапа</a></h2>
												<p class="excerpt">Краткое содержание этапа. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward</p>
											</td>
											<td class="percentage">
												<span class="align-middle">25%</span>
											</td>
										</tr></table>
									  </div>
									</div>
								  </li>
								  <li>
									<div class="block">
									  <div class="tags">
										<a href="" class="tag done">
										  <span>#1 - 01.08.2018</span>
										</a>
									  </div>
									  <div class="block_content">
										<table><tr>
											<td class="descr">
												<h2 class="title"><a>Заголовок этапа</a></h2>
												<p class="excerpt">Краткое содержание этапа. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward</p>
											</td>
											<td class="percentage">
												<span class="align-middle">25%</span>
											</td>
										</tr></table>
									  </div>
									</div>
								  </li>
								</ul>

							  </div>
							</div>
						  </div>
						  
						  <!-- Команда -->
						  <div role="tabpanel" class="questions tab-pane fade" id="tab_content3" aria-labelledby="tab3">
							<div class="icoTeam x_panel">
							  <div class="x_title">
								<h2>Команда проекта</h2>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">
								<div class="teamCard col-md-3 col-sm-4 col-xs-12">
									<div>
										<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt="" /></div>
										<div class="name">Андрей Малахов</div>
										<div class="position">Технический директор</div>
										<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
										<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
									</div>
								</div>
								<div class="teamCard col-md-3 col-sm-4 col-xs-12">
									<div>
										<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt="" /></div>
										<div class="name">Андрей Малахов</div>
										<div class="position">Технический директор</div>
										<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
										<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
									</div>
								</div>
								<div class="teamCard col-md-3 col-sm-4 col-xs-12">
									<div>
										<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt="" /></div>
										<div class="name">Андрей Малахов</div>
										<div class="position">Технический директор</div>
										<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
										<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
									</div>
								</div>
								<div class="teamCard col-md-3 col-sm-4 col-xs-12">
									<div>
										<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt="" /></div>
										<div class="name">Андрей Малахов</div>
										<div class="position">Технический директор</div>
										<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
										<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
									</div>
								</div>
							  </div>
							</div>
							<hr/>
							<div class="icoTeam x_panel">
							  <div class="x_title">
								<h2>Советники проекта</h2>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">
								<div class="teamCard col-md-3 col-sm-4 col-xs-12">
									<div>
										<div class="img"><img src="http://www.epochtimes.ru/eet-content/uploads/06/cinema/161_PV.jpg" alt="" /></div>
										<div class="name">Андрей Малахов</div>
										<div class="position">Технический директор</div>
										<div class="desc">Описание. Cras dui nibh, elementum non tincidunt pulvinar, laoreet commodo felis. Vestibulum malesuada lorem iaculis metus auctor lobortis.</div>
										<div class="social"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a></div>
									</div>
								</div>
								
							  </div>
							</div>
						  </div>
						  
						  <!-- отчеты -->
						  <div role="tabpanel" class="reports tab-pane fade" id="tab_content4" aria-labelledby="tab4">
							<div class="x_panel">
								<div class="x_title">
								  <h2>Текущий этап 3 из 4</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">

								  <table class="table table-striped">
									<thead>
									  <tr>
										<th>Номер</th>
										<th>Срок&nbsp;выполнения</th>
										<th>Что будет сделано</th>
										<th>Статус</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<th scope="row" style="text-align: center;">3</th>
										<td>19.04.2018&nbsp;-&nbsp;25.04.2018</td>
										<td>
											<p>Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают. Описание задачи, кторую делают.</p>
											<p><a href="#"><i class="fa fa-file"></i> Прикрепленный файл</a></p>
										</td>
										<td>В работе</td>
									  </tr>
									  <tr>
										<th scope="row" style="text-align: center;">2</th>
										<td>19.02.2018 - 25.03.2018</td>
										<td><p>Описание отчета. Описание отчета. Описание отчета. Описание отчета. Описание отчета. Описание отчета.</p></td>
										<td>Выполнено</td>
									  </tr>
									  <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td>19.01.2018 - 25.01.2018</td>
										<td><p>Описание отчета. Описание отчета. Описание отчета. Описание отчета.</p></td>
										<td>Выполнено</td>
									  </tr>
									</tbody>
								  </table>

								</div>
							  </div>
						  </div>
						  
						  <!-- Голосование -->
						  <div role="tabpanel" class="voting tab-pane fade" id="tab_content5" aria-labelledby="tab5">
							<div class="x_panel inProcess">
								<div class="x_title">
								  <h2>Голосование за 3 этап</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table class="table" style="width:100%"><tbody>
									  <tr>
										<td style="padding-right: 30px;">
											<div class="date">14.04.2018 - 19.04.2018</div>
											<div class="desc"><a href="#">Описание отчета текст. Описание отчета текст. Описание отчета текст. Описание отчета текст. Описание отчета.</a></div>
											<div class="status">Голосование в процессе!</div>
											<div class="yourVote"><!-- пока юзер еще не проголосовал -->
												Ваш голос: <br/>
												<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#voteYesModal">За</button>
												<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#voteNoModal">Против</button>
											</div>
											<div class="yourVote hidden"><!-- юзер проголосовал (в данном случае "за") -->
												Вы проголосовали &laquo;ЗА&raquo;
											</div>
										</td>
										<td>
											<div class="percentage" style="min-width: 200px;">
												<p style="font-size: 15px;">Продолжение финансирования</p>
												<p><i class="fa fa-square green"></i> -% (- холд.) - ЗА</p>
												<p><i class="fa fa-square blue"></i> -% (- холд.) - МОЛЧУНЫ</p>
												<p><i class="fa fa-square red"></i> -% (- холд.) - ПРОТИВ</p>
											</div>
										</td>
										<td><div class="voteChart" style="width:140px; margin-top: 20px;"><img src="images/des/doughnut-blank.jpg" alt="" /></div></td>
									  </tr>
									</tbody></table>
								</div>
							</div>
							<div class="x_panel">
								<div class="x_title">
								  <h2>Голосование за 2 этап</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table class="table" style="width:100%"><tbody>
									  <tr>
										<td style="padding-right: 30px;">
											<div class="date">19.01.2018</div>
											<div class="desc"><a href="#">Описание отчета текст. Описание отчета текст. Описание отчета текст. Описание отчета текст. Описание отчета.</a></div>
											<div class="status">Голосование завершено успешно!</div>
										</td>
										<td>
											<div class="percentage" style="min-width: 200px;">
												<p style="font-size: 15px;">Продолжение финансирования</p>
												<p><i class="fa fa-square green"></i> 60% (804 холд.) - ЗА</p>
												<p><i class="fa fa-square blue"></i> 15% (201 холд.) - МОЛЧУНЫ</p>
												<p><i class="fa fa-square red"></i> 25% (335 холд.) - ПРОТИВ</p>
											</div>
										</td>
										<td><div class="voteChart" style="width:140px; margin-top: 20px;"><canvas id="canvasDoughnut" height="140" width="140"></canvas></div></td>
									  </tr>
									</tbody></table>
								</div>
							</div>
						  </div>
						  
						  <script src="js/chartjs/chart.min.js"></script>
						  <script>
						  Chart.defaults.global.legend = {
							  enabled: false
							};

							  // Doughnut chart
								var ctx = document.getElementById("canvasDoughnut");
								var data = {
								  labels: [
									"ЗА",
									"МОЛЧУНЫ",
									"ПРОТИВ"
								  ],
								  datasets: [{
									data: [804, 201, 335],
									backgroundColor: [
									  "#1ABB9C",
									  "#3498DB",
									  "#E74C3C"
									],
									hoverBackgroundColor: [
									  "#4ACBAC",
									  "#64B8DB",
									  "#F75C5C"
									]

								  }]
								};

								var canvasDoughnut = new Chart(ctx, {
								  type: 'doughnut',
								  tooltipFillColor: "rgba(51, 51, 51, 0.55)",
								  data: data,
								  responsive: true,
								maintainAspectRatio: false,
								scales: {
									yAxes: [{
										ticks: {
											beginAtZero:true
										}
									}]
								}
								});
						  </script>
						  
						  <!-- Вопросы -->
						  <div role="tabpanel" class="questions tab-pane fade" id="tab_content6" aria-labelledby="tab6">
							<div class="x_panel">
								<div class="x_title">
								  <h2>Вопросы проекту</h2>
								  <div class="clearfix"></div>
								</div>
								<div class="x_content">
									<div class="question">
										<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
										<div class="header">
											<div class="name">Сергей беседин <span class="date text-muted">2 дня назад</span></div>
											<div class="clearfix"></div>
										</div>
										<div class="txt">
											Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis. Vivamus consectetur purus id lacus efficitur, semper iaculis arcu pellentesque. Pellentesque sit amet purus eget nulla cursus molestie nec at sem. Sed congue dolor purus, sed tempor purus blandit id. Sed facilisis turpis a augue vestibulum, a imperdiet eros malesuada. Donec gravida hendrerit lacus nec dapibus?
										</div>
										<div class="answer text-muted"><a href="#">Ответить</a></div>
									</div>
									<div class="question bg-grey">
										<div class="ava"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img bg-grey"></div>
										<div class="header">
											<div class="name">Вирасетакул Апичатпонг (название проекта) <span class="date text-muted">2 дня назад</span></div>
											<div class="clearfix"></div>
										</div>
										<div class="txt">
											Nunc et mi in nisl semper elementum eu sed sapien. Mauris vehicula enim vel quam mollis lobortis. Vivamus consectetur purus id lacus efficitur, semper iaculis arcu pellentesque. Pellentesque sit amet purus eget nulla cursus molestie nec at sem. Sed congue dolor purus, sed tempor purus blandit id. Sed facilisis turpis a augue vestibulum, a imperdiet eros malesuada. Donec gravida hendrerit lacus nec dapibus?
										</div>
										<div class="answer text-muted"><a href="#">Ответить</a></div>
									</div>
									
									<div class="qForm">
									<form id="demo-form" data-parsley-validate>
										<div class="col-xs-12 col-offset messageArea" style="z-index:0;">
											<textarea id="message" class="form-control bg-grey" name="message"></textarea>
										</div>
										<div class="col-fixed">
											<span class="btn btn-primary">Задать вопрос</span>
										</div>
									</form>
									</div>
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

<!-- окно галереи -->
<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<img id="image-gallery-image" class="img-responsive" src="">
			</div>
			<div class="modal-footer">

				<div class="col-md-2" style="text-align: left;">
					<button type="button" class="btn btn-primary" id="show-previous-image"><i class="fa fa-arrow-left"></i></a></button>
				</div>

				<div class="col-md-8 text-justify" id="image-gallery-caption">
					<!-- This text will be overwritten by jQuery - убрано за ненадобностью описания -->
				</div>

				<div class="col-md-2">
					<button type="button" id="show-next-image" class="btn btn-primary"><i class="fa fa-arrow-right"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
  
<!-- окно покупки токенов -->
<div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Купить токены проекта &laquo;Test project 8&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<table class="table valign-m" style="width:100%"><tbody>
				  <tr>
					<td>
						<div>Токены проекта <input type="text" id="tokenAmount" class="form-control" placeholder="Кол-во"> шт.</div>
					</td>
					<td>
						<div title="$ 23.9 по текущему курсу"><span id="tokenPrice">0.04</span> ETH</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div>Первый транш составит:</div>
					</td>
					<td>
						<div>0.02 ETH</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div>Будет зарезервировано:</div>
					</td>
					<td>
						<div>0.03 ETH</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div class="checkbox">
						  <label class="">
							<div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" id="tokenInsur" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <span>Застраховать первый транш</span>
						  </label>
						</div>
						<div class="checkbox">
						  <label class="">
							<div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" id="tokenInsur" class="flat" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> <span>Согласен с <a href="#">условиями</a> страховки</span>
						  </label>
						</div>
					</td>
					<td>
						<div><span id="insurancePrice">0.01</span> ETH</div>
					</td>
				  </tr>
				  <tr>
					<td>
						<div>ОСТАТОК НА СЧЕТУ: 15 ETH</div>
					</td>
					<td>
						<div>Итого: <span id="tokenSum">0.05</span> ETH</div>
					</td>
				  </tr>
				</tbody></table>
				<button type="button" class="btn btn-success btn-lg pull-right">Купить токены</button>
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
</div>

<!-- окно голосования "за" -->
<div class="modal fade" id="voteYesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Голосовать за продолжение финансирования<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				Вы уверены, что хотите проголосовать за продолжение финансирования проекта?<br/>
				Если у вас есть вопросы или пожелания стартапу, вы можете изложить их в форме отбратной связи:<br/><br/>
				<b>Форма обратной связи</b>
				<textarea id="votefeedback" class="form-control" rows="6"></textarea><br/>
				<center><button type="button" class="btn btn-success btn-lg">Голосовать &laquo;ЗА&raquo;</button></center>
			</div>
		</div>
	</div>
</div>

<!-- окно голосования "против" -->
<div class="modal fade" id="voteNoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Голосовать против продолжения финансирования<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				Вы уверены, что хотите проголосовать против продолжение финансирования проекта?<br/>
				Заполните форму обратной связи со стартапом. Постарайтесь изложить причины своего решения и указать на ошибки со стороны стартапа (если они имеются), чтобы его создатели понимали, что именно им следует исправить в будущем:<br/><br/>
				<b>Форма обратной связи</b>
				<textarea id="votefeedback" class="form-control" rows="6"></textarea><br/>
				<center><button type="button" class="btn btn-danger btn-lg">Голосовать &laquo;ПРОТИВ&raquo;</button></center>
			</div>
		</div>
	</div>
</div>

<!-- окно поддержки проекта -->
<div class="modal fade" id="BuyIdeaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Готов купить токены проекта &laquo;Тормозной завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<i class="fa fa-check"></i> Вы можете отменить резервирование средств в любой момент до начала ICO.<br/>
				<i class="fa fa-check"></i> В случае решения о запуске ICO получит указаное финансирование в обмен на токены по установленному курсу.
				<hr/>
				<div class="text-center">Поддержать проект на сумму &nbsp; <input type="text" id="tokenAmount" placeholder="$"><br/><br/>
				<button type="button" class="btn btn-success btn-lg">Поддержать</button>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<!-- окно покупки замороженных токенов -->
<div class="modal fade" id="buyFreezeModalList" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Купить токены проекта &laquo;Тормозной завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				
				<div class="status">На данный момент доступно <b>17 000</b> замороженных токенов проекта</div>
				<table class="table table-striped valign-m">
					<tbody>
					  <tr>
						<td><a href="#">#1</a></td>
						<td>12.02.2018</td>
						<td>10 000<span class="mobile"> токенов = 1 ETH</span></td>
						<td><div><button type="button" class="btn btn-success btn-md" data-dismiss="modal" data-toggle="modal" data-target="#buyFreezeModal">Купить</button></div></td>
					  </tr>
					  <tr>
						<td><a href="#">#2</a></td>
						<td>12.02.2018</td>
						<td>10 000<span class="mobile"> токенов = 1 ETH</span></td>
						<td><div><button type="button" class="btn btn-success btn-md" data-dismiss="modal" data-toggle="modal" data-target="#buyFreezeModal">Купить</button></div></td>
					  </tr>
					</tbody>
				</table>
				<hr/>
				<button type="button" class="btn btn-warning btn-md">Все предложения</button>
				
			</div>
		</div>
	</div>
</div>
<!-- окно покупки замороженных токенов 2 -->
<div class="modal fade" id="buyFreezeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Купить токены проекта &laquo;Тормозной завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-8 col-xs-12">
						<div><span>Купить</span> <input type="text" id="tokenAmount" placeholder="Кол-во токенов"></div>
						<div><span>На сумму</span> <input type="text" id="tokenAmount" placeholder="... ETH"></div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Отправить заявку</button></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- окно история изменений родмапа -->
<div class="modal fade" id="roadChangeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				История измененией дорожной карты проекта<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<table class="table table-striped valign-m">
					<thead>
					  <tr>
						<th width="135">Дата изменения</th>
						<th>Что было изменено</th>
						<th>Отчет об изменении</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td width="135">27.01.2018</td>
						<td>Сроки реализации второго этапа перенесены на 12.03.2018.</td>
						<td><p><a href="#"><i class="fa fa-file"></i> Скачать</a></p></td>
					  </tr>
					  <tr>
						<td width="135">27.01.2018</td>
						<td>Сроки реализации второго этапа перенесены на 12.03.2018.</td>
						<td><p><a href="#"><i class="fa fa-file"></i> Скачать</a></p></td>
					  </tr>
					  <tr>
						<td width="135">27.01.2018</td>
						<td>Сроки реализации второго этапа перенесены на 12.03.2018.</td>
						<td><p><a href="#"><i class="fa fa-file"></i> Скачать</a></p></td>
					  </tr>
					</tbody>
				</table>
				<div class="clearfix"></div>
				
			</div>
		</div>
	</div>
</div>
<!-- окно лс стартапу -->
<div class="modal fade in" id="askModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Написать стартапу<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<div class="notice">
					<p><i class="fa fa-check"></i> Если вы хотите обратиться к стартапу публично, воспользуйтесь формой &laquo;задать вопрос&raquo; на вкладке &laquo;вопросы&raquo;.</p>
					<p><i class="fa fa-check"></i> Здесь вы можете написать личное сообщение стартапу:</p>
				</div>
				<p><textarea id="adv-descr" required="required" class="form-control col-xs-12" rows="4" placeholder="Вопрос или обращение к стартапу"></textarea>
				   <div class="clear"></div></p>
				<p class="text-center"><button type="button" class="btn btn-success">Отправить</button></p>
				
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
    $(document).ready(function() {
      $('.progress .bar').progressbar(); // bootstrap 2
      $('.progress .progress-bar').progressbar(); // bootstrap 3
    });
  </script>

</body>

</html>
