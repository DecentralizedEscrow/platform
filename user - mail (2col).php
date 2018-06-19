<?php require_once('_top.php'); ?>
				<section class="userMess col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Сообщения</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="left col-fixed">
								<?php $msg = '
								<a href="#"><div class="msg">
									<div class="img"><img src="images/des/slider-1-photo.png" alt="" class="img-circle profile_img"></div>
									<div class="msgr col-md-12">
										<div class="txt">
											<span class="name">John Smith</span>
											<span class="time">02:15:21</span>
										</div>
										<div class="message">Film festivals used to be do-or-die moments for movie makers...</div>
										<div class="clearfix"></div>
									</div>
								</div></a>
								';
								echo str_repeat($msg, 11);
								?>
							</div>
							<div class="right col-md-12 col-offset">
								<div class="x_panel">
									<div class="x_title">
									  <h2>Имя отправителя</h2>
									  <div class="msgAttr pull-right">
										<span class="date">23.12.2016 00:10:55</span>
										<button><a href="#"><i class="fa fa-star"></i></a></button>
										<button><a href="#"><i class="fa fa-trash"></i></a></button>
									  </div>
									  <div class="clearfix"></div>
									</div>
									<div class="x_content">
										<div class="longMsg">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ex tortor, porta vitae sem non, pretium molestie ante. Curabitur placerat venenatis sem, eu finibus risus porta eu. Nunc venenatis consequat finibus. Maecenas at massa in quam tristique feugiat ut et dolor. Praesent ultrices consectetur justo eu ullamcorper. Phasellus non ante in dolor congue commodo. Mauris faucibus rutrum tellus, ut bibendum ligula lobortis non. Fusce et semper sapien, vitae imperdiet ex. Maecenas placerat nisi ut tortor faucibus, eget euismod ligula sodales. Cras eleifend accumsan pharetra. Vestibulum nec finibus dolor, id fermentum turpis. Quisque gravida sodales fringilla. Maecenas sagittis a metus nec ornare. Proin molestie rutrum gravida. Praesent vel lectus nisl. Duis pretium ante id elit volutpat dapibus.</p>
											<p>Sed ultrices lorem ut bibendum finibus. Nunc ornare dignissim massa sit amet auctor. Suspendisse lacinia at nibh tincidunt pulvinar. Duis nec tortor sagittis enim placerat venenatis ut quis lectus. Duis velit turpis, ultricies nec dui et, fermentum aliquet quam. Phasellus vel odio consectetur, feugiat lorem et, malesuada urna. Proin porttitor nunc mauris. Praesent posuere risus nibh, id vulputate elit congue vel. Donec et fermentum eros. Cras ullamcorper nunc ultricies est porta, non accumsan massa pharetra. Aenean dignissim imperdiet volutpat. Donec aliquet pellentesque vestibulum. Maecenas mattis eros quis fringilla luctus. Nam ultrices, justo ut congue tempus, leo nunc tristique mauris, et interdum nisi libero sagittis neque. Donec id ex commodo nibh laoreet lacinia. Proin pellentesque leo metus, quis imperdiet odio aliquam eu.</p>
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

<style>
.userMess > .x_panel {min-height: 92vh;}
.userMess .col-fixed {
    width: 300px;
    position: absolute;
	left: 0;
    z-index: 1;
}
.userMess .col-offset {
	padding-left: 300px !important;
    z-index: 0;
}
.userMess .left {
	border-right: 1px solid #eee;
	height: 84vh;
    overflow-y: scroll;
}
.userMess .msg {
    margin-bottom: 4px;
	background: #eee;
    padding: 10px 0;
	position: relative;
	height: 77px;
}
.userMess .msg:hover {
	background: #ddd;
}
.userMess .msg .img {
	position: absolute;
	left: 7px;
}
.userMess .msg .img img {
	width: 60px;
	margin: 0;
}
.userMess .img-circle.profile_img {
	background: #eee;
	border: 1px solid #a8a8a8;
}
.userMess .msg .msgr {
	text-align: justify;
	padding-left: 75px;
}
.userMess .msg .msgr .txt .name {
	font-weight: bold;
}
.userMess .msg .msgr .txt .time {
	position: absolute;
    right: 10px;
    color: #aaa;
}

.userMess .right .x_panel {border: none;}
.userMess .right .x_title {border-bottom: 1px solid #eee;}
.userMess .right .x_content {
	text-align: justify;
	margin-top: 16px;
}
.userMess .msgAttr {margin-top: 5px;}
.userMess .msgAttr .date {
	margin-right: 12px;
	color: #446180;
}
.userMess textarea {background: #f5f5f5;}
.userMess .answer button {margin-top: 20px;}  
</style>  
  
  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>