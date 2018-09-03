<?php require_once('_top.php'); ?>
				<div class="userInfo r1 row">
					<div class="col-sm-4 col-xs-12">
						<div class="ava x_panel">
							<div class="x_title">
							  <h2>Аватар</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="data x_content">
								<img width="100%" src="images/des/default-ava.png" alt="" />
								<div class="ava">
									<button class="btn btn-warning btn-block">Изменить аватар</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
							  <h2>Личные данные</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="data x_content">
								<div class="info">
									<p>ID: <span>02310232</span></p>
									<p>E-mail: <span>a@a.com</span></p>
									<p>Имя: <span>Сергей</span></p>
									<p>Фамилия: <span>Беседин</span></p>
									<p>Город: <span>Москва</span></p>
									<p>Телефон: <span>+7 (903) 333-33-33</span></p>
								</div>
								<div class="edit">
									<div class="row">
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">E-mail:</label>
										  <div class="col-md-8 col-sm-8 col-xs-12">
											<input type="text" class="form-control" placeholder="a@a.com">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Имя:</label>
										  <div class="col-md-8 col-sm-8 col-xs-12">
											<input type="text" class="form-control" placeholder="Сергей">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Фамилия:</label>
										  <div class="col-md-8 col-sm-8 col-xs-12">
											<input type="text" class="form-control" placeholder="Беседин">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Город:</label>
										  <div class="col-md-8 col-sm-8 col-xs-12">
											<input type="text" class="form-control" placeholder="Москва">
										  </div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Телефон:</label>
										  <div class="col-md-8 col-sm-8 col-xs-12">
											<input type="text" class="form-control" placeholder="+7 (903) 333-33-33">
										  </div>
										</div>
									</div>
								</div>
								<hr/>
								<div class="editBtn"><button class="btn btn-warning btn-block">Изменить информацию</button></div>
								<div class="databtns"><button class="btn btn-warning decline">Отменить</button><button class="btn btn-success">Сохранить</button></div>
							</div>
						</div>
						<script>
							$('.editBtn').click( function() {
								$('.edit').show();
								$('.databtns').show();
								$('.info').hide();
								$('.editBtn').hide();
							});
							$('.decline').click( function() {
								$('.edit').hide();
								$('.databtns').hide();
								$('.info').show();
								$('.editBtn').show();
							});
						</script>
					</div>
					<div class="col-sm-4 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
							  <h2>Сменить пароль</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="pass x_content">
								<input type="text" placeholder="Введите текущий пароль" />
								<input type="text" placeholder="Введите новый пароль" />
								<input type="text" placeholder="Повторите новый пароль" />
								<button class="btn btn-warning btn-block">Изменить</button>
								<div class="notice">Пароль изменен!</div>
							<hr/>
							<button class="btn btn-success btn-block">Подключить двухфакторную авторизацию</button>
							</div>
						</div>
					</div>
				</div>
				<div class="userInfo row">
					<div class="col-sm-4 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
							  <h2>Привязка соц. сетей</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="social x_content">
								<div class="row">
									<div class="col-xs-4"><a href="#"><i class="fa fa-facebook"></i></a></div>
									<div class="col-xs-4"><a href="#"><i class="fa fa-twitter"></i></a></div>
									<div class="col-xs-4"><a href="#"><i class="fa fa-google-plus active"></i></a></div>
								</div>
								<div class="notice">Привязано!</div>
							</div>
						</div>
					</div>
				</div>
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
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>

</body>

</html>
