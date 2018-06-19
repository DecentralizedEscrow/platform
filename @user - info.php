<?php require_once('_top.php'); ?>
				<div class="userInfo row">
					<div class="col-sm-4 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
							  <h2>Личные данные</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="data x_content">
								<p>ID: <span>02310232</span></p>
								<p>E-mail: <span contenteditable="true" spellcheck="false">a@a.com</span></p>
								<p>Имя: <span contenteditable="true" spellcheck="false">Сергей</span></p>
								<p>Фамилия: <span contenteditable="true" spellcheck="false">Беседин</span></p>
								<p>Город: <span contenteditable="true" spellcheck="false">Москва</span></p>
								<p>Телефон: <span contenteditable="true" spellcheck="false">+7 (903) 333-33-33</span></p>
								<div class="databtns"><button class="btn btn-warning">Отменить</button><button class="btn btn-success">Сохранить</button></div>
								<hr/>
								<div class="ava">
									<button class="btn btn-warning btn-block">Изменить аватар</button>
								</div>
							</div>
						</div>
						<script>
							$('body').on('focus', '[contenteditable]', function() {
								$(this).addClass('focused');
								$('.databtns').show();
							});
							$('body').on('blur', '[contenteditable]', function() {
								$(this).removeClass('focused');
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
								<button class="btn btn-success btn-block">Изменить</button>
								<div class="notice">Пароль изменен!</div>
							</div>
						</div>
					</div>
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
