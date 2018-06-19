<?php require_once('_top.php'); ?>
				<section class="tokenExchange col-md-12">
					<div class="x_panel">
						<div class="x_title">
						  <h2>Биржа токенов</h2>
						  <div class="pull-right"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#tRequestModal"><i class="fa fa-plus-circle"></i> &nbsp;Подать новую заявку</button></div>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div class="tabParent" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="infoTab" class="nav nav-tabs" role="tablist">
								  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Продажа / покупка замороженных токенов</a>
								  </li>
								  <li role="presentation" class=""><a href="#tab_content2" role="tab" id="tab2" data-toggle="tab" aria-expanded="false">Мои заявки</a>
								  </li>
								</ul>
								<div id="infoTabContent" class="tab-content">

								  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
									<div class="x_panel">
									  <div class="x_content">
										<table class="table table-striped valign-m">
											<thead>
											  <tr>
												<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Тип сделки  <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Дата  <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Кол-во токенов  <i class="fa fa-caret-down"></i></a></th>
												<th><a href="#">Сумма, ETH  <i class="fa fa-caret-down"></i></a></th>
												<th></th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<td><a href="#">Test project 6</a></td>
												<td><span class="buy">Продажа</span></td>
												<td>22.04.2018</td>
												<td><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt="" /> 100 XBR<span class="mobile"> токенов</span></td>
												<td>5.4452<span class="mobile"> ETH</span></td>
												<td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tSellModal">Продать</button></td>
											  </tr>
											  <tr>
												<td><a href="#">Test project 1</a></td>
												<td><span class="sell">Покупка</span></td>
												<td>22.04.2018</td>
												<td><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt="" /> 500 XBR<span class="mobile"> токенов</span></td>
												<td>1.4329<span class="mobile"> ETH</span></td>
												<td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#tBuyModal">Купить</button></td>
											  </tr>
											  <tr>
												<td><a href="#">Test project 2</a></td>
												<td><span class="buy">Покупка</span></td>
												<td>22.04.2018</td>
												<td><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt="" /> 320 XBR<span class="mobile"> токенов</span></td>
												<td>3.4391<span class="mobile"> ETH</span></td>
												<td><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#tSellModal">Продать</button></td>
											  </tr>
											  <tr>
												<td><a href="#">Test project 6</a></td>
												<td><span class="sell">Продажа</span></td>
												<td>22.04.2018</td>
												<td><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt="" /> 400 XBR<span class="mobile"> токенов</span></td>
												<td>1.5762<span class="mobile"> ETH</span></td>
												<td><button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#tBuyModal">Купить</button></td>
											  </tr>
											</tbody>
										</table>
									  </div>
									</div>
								  </div>

								  <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="tab2">
									<div class="x_panel">
									  <div class="x_content">
											<table class="table table-striped valign-m">
												<thead>
												  <tr>
													<th><a href="#">Название <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Тип сделки  <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Дата  <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Кол-во токенов  <i class="fa fa-caret-down"></i></a></th>
													<th><a href="#">Сумма, ETH  <i class="fa fa-caret-down"></i></a></th>
													<th></th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td><a href="#">Название проекта</a></td>
													<td><span class="buy">Покупка</span></td>
													<td>12.02.2018</td>
													<td><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt="" /> 10 000 XBR<span class="mobile"> токенов</span></td>
													<td>0.002<span class="mobile"> ETH</span></td>
													<td><a href="#">Отменить</a></td>
												  </tr>
												  <tr>
													<td><a href="#">Название проекта</a></td>
													<td><span class="sell">Продажа</span></td>
													<td>12.02.2018</td>
													<td><img src="https://s2.coinmarketcap.com/static/img/coins/16x16/1.png" alt="" /> 10 000 XBR<span class="mobile"> токенов</span></td>
													<td>0.0012<span class="mobile"> ETH</span></td>
													<td><a href="#">Отменить</a></td>
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

<!-- окно покупки токенов -->
<div class="modal fade" id="tBuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Купить токены проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div><span>Купить</span> <input type="text" id="tokenAmount" placeholder="Кол-во токенов"></div>
						<div><span>На сумму</span> <input type="text" id="tokenAmount" placeholder="... ETH"></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Купить</button></div>
					</div>
				</div>
				<div>Цена покупки одного токена проекта - 0.0012 ETH</div>
			</div>
		</div>
	</div>
</div>
<!-- окно продажи токенов -->
<div class="modal fade" id="tSellModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Продать токены проекта &laquo;Металлургический завод&raquo;<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-9 col-xs-12">
						<div><span>Продать</span> <input type="text" id="tokenAmount" placeholder="Кол-во токенов"></div>
						<div><span>На сумму</span> <input type="text" id="tokenAmount" placeholder="... ETH"></div>
					</div>
					<div class="col-sm-3 col-xs-12">
						<div><button type="button" class="btn btn-success btn-lg">Продать</button></div>
					</div>
				</div>
				<div>Цена продажи одного токена проекта - 0.002 ETH</div>
			</div>
		</div>
	</div>
</div>
<!-- окно подачи заявки -->
<div class="modal fade" id="tRequestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Подать заявку<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
				<div class="text-center">
					<select name="orderType">
					  <option value="default">Тип заявки</option>
					  <option value="buy">Покупка</option>
					  <option value="sell">Продажа</option>
					</select>
					<select name="token">
					  <option value="default">Токен</option>
					  <option value="buy">SPARLA</option>
					  <option value="sell">DSPL</option>
					  <option value="sell">XSPEA</option>
					</select>
					<input type="text" id="tokenAmount" placeholder="количество">
					<input type="text" id="tokenAmount" placeholder="сумма">
					<div class="clear"></div><br/>
					<button type="button" class="btn btn-success noborder btn-sm">Подать заявку</button>
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
