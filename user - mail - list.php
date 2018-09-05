<?php require_once('_top.php'); ?>
				<section class="userMess col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Сообщения</h2>
						  <div class="bFilter">
							<button class="btn btn-info btn-xs noborder active"><a href="#">Все</a></button>
							<button class="btn btn-info btn-xs noborder"><a href="#">Личные</a></button>
							<button class="btn btn-info btn-xs noborder"><a href="#">Системные</a></button>
							<button class="btn btn-info btn-xs noborder"><a href="#">Проект <span class="label label-danger">3</span></a></button>
							<button class="btn btn-info btn-xs noborder"><a href="#">Избранные</a></button>
						  </div>
						  <div class="msgAttr pull-right">
							<span class="date"></span>
							<button title="Пометить выделенные сообщения"><a href="#"><i class="fa fa-star"></i></a></button>
							<button title="Удалить выделенные сообщения"><a href="#"><i class="fa fa-trash"></i></a></button>
							<button class="selectAll" title="Выделить все сообщения"><a href="#"><i class="fa fa-check-square-o"></i></a></button>
						  </div>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="xleft">
								<a href="#" data-toggle="modal" data-target="#conversDesModal"><div class="msg unread">
									<div class="tags"></div>
									<div class="img"><img src="images/des/des-user.jpg" alt="" class="img-circle profile_img"></div>
									<div class="msgr col-md-12">
										<div class="txt">
											<span class="name">Платформа Descrow</span>
											<!--<span class="topic">[ тема сообщения ]</span>-->
											<span class="time">02:15:21</span>
										</div>
										<div class="message">Уведомление о начале голосования по проекту &laquo;Название проекта&raquo;. Требуется ваше участие в голосовании!</div>
										<div class="msgAttr inlist pull-right">
											<button class="star"><a href="#"><i class="fa fa-star"></i></a></button>
											<button class="trash" ><a href="#"><i class="fa fa-trash"></i></a></button>
											<button class="select"><a href="#"><i class="fa fa-check-square-o"></i></a></button>
										  </div>
										<div class="clearfix"></div>
									</div>
								</div></a>
								<a href="#" data-toggle="modal" data-target="#conversModal"><div class="msg unread">
									<div class="tags"></div>
									<div class="img"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
									<div class="msgr col-md-12">
										<div class="txt">
											<span class="name">John Smith</span>
											<!--<span class="topic">[ тема сообщения ]</span>-->
											<span class="time">02:15:21</span>
										</div>
										<div class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ex tortor, porta vitae sem non, pretium molestie ante. Curabitur placerat venenatis sem, eu finibus risus porta eu. Nunc venenatis consequat finibus...</div>
										<div class="msgAttr inlist pull-right">
											<button class="star"><a href="#"><i class="fa fa-star"></i></a></button>
											<button class="trash" ><a href="#"><i class="fa fa-trash"></i></a></button>
											<button class="select"><a href="#"><i class="fa fa-check-square-o"></i></a></button>
										  </div>
										<div class="clearfix"></div>
									</div>
								</div></a>
							</div>
							<script>
								// чисто для примера выделения
								$('.select').click(function() {
									if ($(this).closest('.msg').hasClass('selected')) {
										$(this).closest('.msg').removeClass('selected');
									} else {
										$(this).closest('.msg').addClass('selected');
									}
								});
								$('.selectAll').click(function() {
									if ($('.msg').hasClass('selected')) {
										$('.msg').removeClass('selected');
									} else {
										$('.msg').addClass('selected');
									}
								});
							</script>
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
  
<!-- окно жалобы на сообщение -->
<div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Пожаловаться на сообщение<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				<p>Вы уверены, что хотите отправить жалдобу на сообщение пользователя &laquo;Константин Пивоваров&raquo;?</p>
				<p>
					<select name="sField">
					  <option selected disabled hidden>Укажите причину жалобы</option>
					  <option>Спам</option>
					  <option>Оскорбления</option>
					  <option>Другая</option>
					</select>
				</p>
				<p>Комментарий (необязательно):</p>
				<textarea class="form-control" rows="2"></textarea><br/>
				<center><button type="button" class="btn btn-warning btn-lg">Отправить</button></center>
			</div>
		</div>
	</div>
</div> 
 
<!-- окно уведомлений от платформы -->
<div class="modal fade" id="conversDesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Уведомления от платформы Descrow<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
				
				<div class="questions">
					<div class="question">
					<div class="ava"><img src="images/des/des-user.jpg" alt="" class="img-circle profile_img"></div>
						<div class="header">
							<div class="name">Платформа Descrow <span class="pull-right date text-muted">10.12.2017 10:55:24</span></div>
							<div class="clearfix"></div>
						</div>
						<div class="txt">
							<p>Уведомляем вас о начале голосования по проекту <b>&laquo;Название проекта&raquo;</b>, которое продлится с <b>23.05.2018</b> до <b>28.05.2018</b>.</p>
							<hr/>
							<p>Стартап предоставил плановый отчет:</p>
							<p>&laquo;Описание отчета текст. Описание отчета текст. Описание отчета текст. Описание отчета текст. Описание отчета.&raquo;</p>
							<p><a href="#"><b>Посмотреть полный отчет</b></a></p>
							<hr/>
							<p>Имейте в виду, что если вы не проголосуете до 28.05.2018, ваш голос будет автоматически засчитан как положительный!</p>
							<a href="startup.php#tab_content5"><button type="button" class="btn btn-success btn-md">Перейти к голосованию</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 

<!-- окно конкретной беседы -->
<div class="modal fade" id="conversModal" class="conversModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Беседа с пользователем - Иван Грозный<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
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
							<i class="fa fa-exclamation-circle repBtn text-danger" title="Пожаловаться на сообщение" data-dismiss="modal" data-toggle="modal" data-target="#reportModal"></i>
						</div>
					</div>
				</div>
				<hr/>
				<div class="answer">
					<textarea id="answer" required="required" class="form-control" rows="3" placeholder="Ваш ответ..."></textarea>
					<button type="button" class="btn btn-info btn-lg">Отправить</button>
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