<?php require_once('_top.php'); ?>
				<section class="userWallet col-md-12">
					<div class="announcement">
						<h4>Обратите вниминие</h4>
						Голосование за продолжение финансирования проекта &laquo;Название проекта&raquo; было завершено положительно.<br/>
						С вашей стороны требуется подтвердить перечисление средств на следующий этап реализации проекта.<br/>
						Пока вы не совершите данное действи, прочие финансовые функции вашего аккаунта будут недоступны.
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Кошелек</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="balance">
								Ваш баланс: 
							</div>
							<!--<div class="ethAddr row">
								<div class="col-md-2 col-xs-12">Ethereum адрес</div>
								<div class="col-md-8 col-xs-12"><input type="text" id="ethAddr" placeholder="0x..." /> <i class="fa fa-info-circle" title="подсказка"></i></div>
								<div class="col-md-2 col-xs-12"><button class="btn btn-success">Сохранить</button></div>
							</div>-->
							<div class="row">
								<div class="oper col-md-6 col-xs-12">
									<div class="eth row">
										<div class="col-md-3 col-xs-12"><h6><b>49.26351&nbsp;ETH</b></h6></div>
										<div class="col-md-7 col-xs-12"><button class="btn btn-success">Пополнить</button> <button class="btn btn-warning">Перевести</button></div>
									</div>
									<div class="des row">
										<div class="col-md-3 col-xs-12"><h6><b>203&nbsp;912&nbsp;DES</b></h6></div>
										<div class="col-md-7 col-xs-12"><button class="btn btn-success">Пополнить</button> <button class="btn btn-warning">Перевести</button></div>
									</div>
								</div>
							</div>
							<div class="tokenList">
							<h2>Токены проектов</h2>
								<table class="table table-striped">
									<thead>
									  <tr>
										<th style="text-align: center;">#</th>
										<th>Название проекта</th>
										<th title="Зарезервированные средства">Зарез. средства</th>
										<th>Активные токены</th>
										<th>Замороженные токены</th>
										<th>Транш</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href=""><button class="btn btn-warning">Продать</button></a></td>
										<td><button class="btn btn-info" data-toggle="modal" data-target="#acceptNextModal">Подтвердить</button></td>
									  </tr>
									   <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href=""><button class="btn btn-warning">Продать</button></a></td>
										<td></td>
									  </tr>
									   <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href=""><button class="btn btn-warning">Продать</button></a></td>
										<td></td>
									  </tr>
									   <tr>
										<th scope="row" style="text-align: center;">1</th>
										<td><a href="#">Ансамбль гипотетического вакуума</a></td>
										<td><span>220 ETH</span></td>
										<td><span>120 000 (XTH)</span> <button class="btn btn-success" data-toggle="modal" data-target="#transferModal">Перевести</button></td>
										<td><span>64 000 (XTH)</span> <a href=""><button class="btn btn-warning">Продать</button></a></td>
										<td></td>
									  </tr>
									</tbody>
								  </table>
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

<!-- окно вывода токенов -->
<div class="modal fade" id="transferModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Перевести токены проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div><span>Перевести</span> <input type="text" id="tokenAmount" placeholder="Кол-во токенов"></div>
						<div><span>На адрес</span> <input type="text" id="tokenAmount" placeholder="0x..."></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Перевести</button></div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

<!-- окно подтверждения следующего транша -->
<div class="modal fade" id="acceptNextModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Подтверждение транша для проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				Подтвердите перевод <b><span class="text-success">$ 1 345</span></b> на следующий этап реализации проекта <b>&laquo;Металлургический завод&raquo;</b>. Совершив данный транш вы переведете <b><span class="text-success">234</span></b> замороженных токена проекта в разряд активных.<br/>
				Для подтверждения транша введите ваш приватный ключ: &nbsp; <input type="text" />
				<hr/>
				<center><button type="button" class="btn btn-success btn-lg">Подтвердить</button></center>
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
