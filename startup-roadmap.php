<?php require_once('_top-startup.php'); ?>
				<section class="startupRoadmap col-md-12">
					<div class="announcement">
						<h4>Обратите вниминие</h4>
						Имейте в виду, что в ходе ICO кампании вы сможете внести изменения в дорожную карту проекта не более одного раза за этап. Причем эти изменения облагаются комиссией в токенах платформы DES в размере, который может зависеть от размера сборов ICO проекта, хода реализации проекта, наличия изменений дорожной карты в прошлом и иных параметров важных для успеха проекта. Также суммарный перенос сроков реализации этапов не может быть больше 6 месяцев. Поэтому мы настоятельно рекомендуем заранее выбирать оптимальные сроки реализации этапов и адекватно рассчитывать свои возможности и прикладывать все усилия для реализации проекта.
					</div>
					<div class="x_panel">
						<div class="x_title">
						  <h2>Дорожная карта проекта &laquo;<a href="my-startup.php">Test project 12</a>&raquo;</h2>
						  <div class="clearfix"></div>
						</div>
						<div class="x_content">
							<div>Опишите каждый этап как можно более подробно, эта информация поступает инвесторам и сильно влияет на их решение об инвестировании в ваш проект. Минимальное количество этапов - 3. Максимально допустимый процент средств, необходимых на реализацию первого этапа - 30.<br/></div>
							<hr/>
							<table id="roadmap" class="table table-striped">
								<thead>
								  <tr>
									<th>Номер этапа</th>
									<th>Срок выполнения (дней)</th>
									<th>Что будет сделано</th>
									<th>% <i class="fa fa-question-circle" title="процент средств от общей суммы, необходимый для конкретного этапа" style="cursor: pointer;"></i></th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
								  </tr>
								</tbody>
							  </table>
							<div class="addBtn"><button type="button" class="btn btn-success btn-lg" onclick="addRow();">Добавить этап</button><button type="button" class="btn btn-danger btn-lg delRow" onclick="delRow();">Удалить этап</button></div>
							<hr/>
							<div>Убедитесь в правильности внесения сроков и обязательств перед инвесторами, после фактического создания все изменения в RoadMap будут доступны согласно <a href="#">условиям платформы</a>.</div>
							<div class="createBtn"><button type="button" class="btn btn-success btn-lg">Сохранить RoadMap</button></div>
						</div>
					</div>
				</section>
				<script>
					// показ кнопки удаления этапа
					//if (sNum > 1) {$('.delRow').show();} else {$('.delRow').hide();}
					$( ".btn" ).click(function() {
						if (sNum > 1) {$('.delRow').show();} else {$('.delRow').hide();}
					});
				
					// добавление и удаление этапов
					var sNum = 1;
					function addRow () {
						$('#roadmap tr:last').after('<tr><th scope="row" style="text-align: center;"><span class="mobile">Номер этапа</span>' + sNum + '</th><td><span class="mobile">Срок выполнения (дней)</span><input id="date-'+sNum+'"></td><td style="width: 100%;"><span class="mobile">Что будет сделано</span><textarea id="descr-'+sNum+'" style="width: 100%; resize: vertical;"></textarea></td><td><span class="mobile">необходимый % от общей суммы</span><input type="number" min="1" max="30" id="percent-'+sNum+'" style="max-width: 40px;"></td></tr>'); // max="30" для input процента актуально только для первого этапа
						sNum++;
					}
					function delRow () {
						if (sNum > 1) {
							$('#roadmap tr:last').remove();
							sNum--;							
						}
					}
				</script>
				<!-- Описание работ. Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward. -->
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
