<?php require_once('_top-admin.php'); ?>
				<section class="dashboard">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel addWidget" data-toggle="modal" data-target="#addWModal"><i class="fa fa-plus-circle"></i> Добавить виджет</div>
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

<!-- окно добавления виджета -->
<div class="modal fade" id="addWModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Добавить виджет<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<div class="wList">
					<div>Название виджета</div>
					<div>Название виджета</div>
					<div>Название виджета</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- окно изменения реф ставки -->
<div class="modal fade in" id="changeRefModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Реферальная ставка<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
				<h4 class="modal-title" id="image-gallery-title"></h4>
			</div>
			<div class="modal-body">
			
				<p>Реферальная ставка проекта:</p>
				<p><input type="text" placeholder="%"></p>
				<p><button type="button" class="btn btn-success">Установить</button></p>
				<hr>
				<div class="notice">
					<p><i class="fa fa-check"></i> Реферальная ставка определяет процент вознаграждения пользователя от суммы вложений привлеченных им клиентов.</p>
					<p><i class="fa fa-check"></i> Вознаграждение поступает пользователю по факту очередных траншей токенами платформы Descrow (DES) по текущему на тот момент курсу.</p>
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
