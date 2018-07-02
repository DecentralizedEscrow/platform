<?php require_once('_top-startup.php'); ?>
				<section class="startupReg col-md-12">
						<div class="x_panel">
							<div class="x_title">
							  <h2>Регистрация стартапа</h2>
							  <div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Это первый документ перед запуском сбора средств на ваш проект, отнеситесь с должным вниманием к заполнению всех пунктов. Качество вашего проекта влияет на уровень первого транша, который вы можете запросить в RoadMap.</p>
								<div id="wizard" class="form_wizard wizard_horizontal">
									<ul class="wizard_steps anchor">
									  <li>
										<a href="#step-1" class="selected" isdone="1" rel="1">
										  <span class="step_no">0</span>
										  <span class="step_descr">
															Введение<br>
															<small>советы для ICO</small>
														</span>
										</a>
									  </li>
									  <li>
										<a href="#step-2" class="selected" isdone="1" rel="2">
										  <span class="step_no">1</span>
										  <span class="step_descr">
															О проекте<br>
															<small>основная информация</small>
														</span>
										</a>
									  </li>
									  <li>
										<a href="#step-3" class="done" isdone="1" rel="3">
										  <span class="step_no">2</span>
										  <span class="step_descr">
															Команда<br>
															<small>и консультанты</small>
														</span>
										</a>
									  </li>
									  <li>
										<a href="#step-4" class="done" isdone="1" rel="4">
										  <span class="step_no">3</span>
										  <span class="step_descr">
															Материалы<br>
															<small>загрузка файлов</small>
														</span>
										</a>
									  </li>
									  <li>
										<a href="#step-5" class="disabled" isdone="0" rel="5">
										  <span class="step_no">4</span>
										  <span class="step_descr">
															Завершение<br>
															<small>регистрации</small>
														</span>
										</a>
									  </li>
									</ul>
									
								<form id="wizardForm" method="POST" action="http://desdao.com/?mod=regStartup" <!--onsubmit="return regSt();-->">	
								  <div class="stepContainer"><div id="step-1" class="wizard_content" style="display: block;">
									<h3>Как провести успешное ICO?</h3>
									<p>Прежде чем продолжить, посмотрите короткое видео об основных ошибках начинающих стартапов и проверенных решениях по улучшению показателей вашего проекта:</p>
									<center><div style="max-width: 600px; padding: 20px 0;"><div class="thumb-wrap">
										<iframe id="ytplayer" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" width="100%" height="100%" src="https://www.youtube.com/embed/bNpx7gpSqbY"></iframe>
										<!-- <iframe src="https://www.youtube.com/embed/FG3o2MWWSY4" frameborder="0" allowfullscreen style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe> -->
									</div></div></center>
								  </div><div id="step-2" class="wizard_content" style="display: none;">
									  <form class="form-horizontal form-label-left">

										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="project-name">Язык анкеты <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<select data-placeholder="Choose a Language..." class="form-control col-md-7 col-xs-12">
											  <option value="AF">Afrikanns</option>
											  <option value="SQ">Albanian</option>
											  <option value="AR">Arabic</option>
											  <option value="HY">Armenian</option>
											  <option value="EU">Basque</option>
											  <option value="BN">Bengali</option>
											  <option value="BG">Bulgarian</option>
											  <option value="CA">Catalan</option>
											  <option value="KM">Cambodian</option>
											  <option value="ZH">Chinese (Mandarin)</option>
											  <option value="HR">Croation</option>
											  <option value="CS">Czech</option>
											  <option value="DA">Danish</option>
											  <option value="NL">Dutch</option>
											  <option value="EN">English</option>
											  <option value="ET">Estonian</option>
											  <option value="FJ">Fiji</option>
											  <option value="FI">Finnish</option>
											  <option value="FR">French</option>
											  <option value="KA">Georgian</option>
											  <option value="DE">German</option>
											  <option value="EL">Greek</option>
											  <option value="GU">Gujarati</option>
											  <option value="HE">Hebrew</option>
											  <option value="HI">Hindi</option>
											  <option value="HU">Hungarian</option>
											  <option value="IS">Icelandic</option>
											  <option value="ID">Indonesian</option>
											  <option value="GA">Irish</option>
											  <option value="IT">Italian</option>
											  <option value="JA">Japanese</option>
											  <option value="JW">Javanese</option>
											  <option value="KO">Korean</option>
											  <option value="LA">Latin</option>
											  <option value="LV">Latvian</option>
											  <option value="LT">Lithuanian</option>
											  <option value="MK">Macedonian</option>
											  <option value="MS">Malay</option>
											  <option value="ML">Malayalam</option>
											  <option value="MT">Maltese</option>
											  <option value="MI">Maori</option>
											  <option value="MR">Marathi</option>
											  <option value="MN">Mongolian</option>
											  <option value="NE">Nepali</option>
											  <option value="NO">Norwegian</option>
											  <option value="FA">Persian</option>
											  <option value="PL">Polish</option>
											  <option value="PT">Portuguese</option>
											  <option value="PA">Punjabi</option>
											  <option value="QU">Quechua</option>
											  <option value="RO">Romanian</option>
											  <option value="RU" selected>Russian</option>
											  <option value="SM">Samoan</option>
											  <option value="SR">Serbian</option>
											  <option value="SK">Slovak</option>
											  <option value="SL">Slovenian</option>
											  <option value="ES">Spanish</option>
											  <option value="SW">Swahili</option>
											  <option value="SV">Swedish </option>
											  <option value="TA">Tamil</option>
											  <option value="TT">Tatar</option>
											  <option value="TE">Telugu</option>
											  <option value="TH">Thai</option>
											  <option value="BO">Tibetan</option>
											  <option value="TO">Tonga</option>
											  <option value="TR">Turkish</option>
											  <option value="UK">Ukranian</option>
											  <option value="UR">Urdu</option>
											  <option value="UZ">Uzbek</option>
											  <option value="VI">Vietnamese</option>
											  <option value="CY">Welsh</option>
											  <option value="XH">Xhosa</option>
											</select>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="project-name">Категория проекта<span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<select class="form-control col-md-7 col-xs-12">
											  <option>Медицина</option>
											  <option>Ритейл/Торговля</option>
											  <option>Страхование</option>
											  <option>Банкинг/ФинТех</option>
											  <option>Гейминг</option>
											  <option>Программа лояльности</option>
											  <option>Общество/Благотворительность</option>
											  <option>Спорт</option>
											  <option>Искусство</option>
											  <option>Блокчейн</option>
											  <option>ИИ</option>
											  <option>Робототехника</option>
											  <option selected>Прочее</option>
											</select>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="project-name">Наименование проекта <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="project-name" required="required" class="form-control col-md-7 col-xs-12">
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="short-descr">Краткое описание проекта <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<textarea id="short-descr" required="required" class="form-control col-md-7 col-xs-12" rows="3" maxlength="1000"></textarea>
										  </div>
										</div>
										<div class="form-group">
										  <label for="full-descr" class="control-label col-md-4 col-sm-4 col-xs-12">Подробное описание проекта</label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<textarea id="full-descr" required="required" class="form-control col-md-7 col-xs-12" rows="10" maxlength="5000"></textarea>
										  </div>
										</div>
										<!--<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Gender</label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<div id="gender" class="btn-group" data-toggle="buttons">
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
											  </label>
											  <label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="gender" value="female" checked=""> Female
											  </label>
											</div>
										  </div>
										</div>-->
										<div class="form-group">
										  <label for="problems" class="control-label col-md-4 col-sm-4 col-xs-12">Проблемы, которые решает проект <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input id="problems" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
										  </div>
										</div>
										
										<div class="form-group">
										  <label for="problems-how" class="control-label col-md-4 col-sm-4 col-xs-12">Каким образом решаются эти проблемы <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input id="problems-how" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
										  </div>
										</div>
										<div class="form-group">
										  <label for="tech" class="control-label col-md-4 col-sm-4 col-xs-12">Технология / описание продукта <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input id="tech" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Стадия реализации продукта</label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<div id="project-state" class="btn-group" data-toggle="buttons">
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="1"> &nbsp; идея &nbsp;
											  </label>
											  <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="2" checked=""> прототип
											  </label>
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="3"> почти готовый продукт
											  </label>
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="project-state" value="4"> уже работающий продукт
											  </label>
											</div>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12">Цель регистрации</label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<div id="reg-purpose" class="btn-group" data-toggle="buttons">
											  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="reg-purpose" value="1"> Получение обратной связи
											  </label>
											  <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
												<input type="radio" name="reg-purpose" value="2" checked=""> Проведение ICO
											  </label>
											</div>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="project-name">Тэги проекта (через запятую)<span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" id="tags" class="form-control col-md-7 col-xs-12 optional">
										  </div>
										</div>
										<div class="form-group">
											<div class="control-label col-md-10 text-justify">
												Если вы еще не готовы проводить ICO и хотите, чтобы аудитория оценила ваш проект, вы можете отметить целью регистрации &laquo;получение обратной связи&raquo;. Таким образом, ваш проект появится в списке стартапов платфоримы с соответствующей пометкой, а вы сможете получить обратную связь от потенциальных инвесторов и понять, сколько они готовы инвестировать в ваш проект. Вы сможете изменить данный параметр в любой момент, что позволит вам организовать ICO по проекту с уже набранной аудиторией без необходимости повторной регистрации.
											</div>
										</div>
									  </form>

									</div><div id="step-3" class="wizard_content" style="display: none;">
									  <form class="form-horizontal form-label-left">

										<div class="form-group">
										  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="docs">Команда проекта <span class="required"></span>
										  </label>
										  <div class="col-md-10 col-sm-8 col-xs-12" style="margin-bottom: 20px;">
											<div class="row">
												<div class="addDoc col-md-4 col-xs-12"><input type="text" id="teamName_1" class="docName form-control" placeholder="ФИО" /></div>
												<div class="addDoc col-md-5 col-xs-12"><input type="text" id="teamLink_1" class="docLink form-control" placeholder="Должность в проекте" /></div>
												<div class="addDoc col-md-3 col-xs-12"><input type="text" id="teamLink_2" class="docLink form-control" placeholder="Контакты" /></div>
											</div>
											<div class="teamList"></div>
											<span class="addDocBtn btn btn-primary" onclick="addTeam()">Добавить строку</span>
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-2 col-sm-2 col-xs-12" for="docs">Советники проекта <span class="required"></span>
										  </label>
										  <div class="col-md-10 col-sm-8 col-xs-12" style="margin-bottom: 20px;">
											<div class="row">
												<div class="addDoc col-md-4 col-xs-12"><input type="text" id="advName_1" class="docName form-control optional" placeholder="ФИО" /></div>
												<div class="addDoc col-md-5 col-xs-12"><input type="text" id="advLink_1" class="docLink form-control optional" placeholder="Должность в проекте" /></div>
												<div class="addDoc col-md-3 col-xs-12"><input type="text" id="advLink_2" class="docLink form-control optional" placeholder="Контакты" /></div>
											</div>
											<div class="advList"></div>
											<span class="addDocBtn btn btn-primary" onclick="addAdv()">Добавить строку</span>
										  </div>
										</div>
										
									  </form>
									  
									  <!--<div class="advExpert">
										<p>Если для реализации или продвижения проекта у вас не хватает квалифицированных специалистов, вы можете воспользоваться функцией <b>&laquo;поиск эксперта&raquo;</b> по завершении заполнения данной формы. Чтобы найти требуемых экспертов, нажмите кнопку &laquo;найти эксперта&raquo; в левом меню и оставте соответствующую заявку.</p>
										<p><b>Также вы можете воспользоваться помощью квалифицированных специалистов в области ICO</b> (которые смогут помочь вам избежать юридических проблем, решат технические и организационные вопросы и организуют эффективное провижение) с помощью нашего сервиса <a href="#">&laquo;Descrow&nbsp;Expert&raquo;</a></p>
										<a href="#"><img src="images/dexpert.png" alt="" style="filter: invert(100%); max-width: 400px;" /></a>
									  </div>-->
									</div><div id="step-4" class="wizard_content" style="display: none;">
									  <form class="form-horizontal form-label-left">

										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="docs">Документы проекта <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
											<div class="row">
												<div class="addDoc col-md-4 col-xs-12"><input type="text" id="docName_1" class="docName form-control" placeholder="Название" /></div>
												<div class="addDoc col-md-8 col-xs-12"><input type="text" id="docLink_1" class="docLink form-control" placeholder="Ссылка на документ" /></div>
											</div>
											<div class="docList"></div>
											<span class="addDocBtn btn btn-primary" onclick="addDoc()">Добавить строку</span>
										  </div>
										  <script>
											//чисто для примера. здесь нужно реализовать присвоение адекватных id спаунящимся инпутам, прописать ограничения, критерии для появления и исчезновения строк
											function addDoc() {
												$('.docList').append('<div class="row"><div class="addDoc col-md-4 col-xs-12"><input type="text" id="docName" class="form-control" placeholder="Название" /></div><div class="addDoc col-md-8 col-xs-12"><input type="text" id="docLink" class="form-control" placeholder="Ссылка на документ" /></div></div>');
											}
											function addTeam() {
												$('.teamList').append('<div class="row"><div class="addDoc col-md-4 col-xs-12"><input type="text" id="teamName_1" class="docName form-control" placeholder="ФИО" /></div><div class="addDoc col-md-5 col-xs-12"><input type="text" id="teamLink_1" class="docLink form-control" placeholder="Должность в проекте" /></div><div class="addDoc col-md-3 col-xs-12"><input type="text" id="teamLink_1" class="docLink form-control" placeholder="Контакты" /></div></div>');
											}
											function addAdv() {
												$('.advList').append('<div class="row"><div class="addDoc col-md-4 col-xs-12"><input type="text" id="advName_1" class="docName form-control" placeholder="ФИО" /></div><div class="addDoc col-md-5 col-xs-12"><input type="text" id="advLink_1" class="docLink form-control" placeholder="Должность в проекте" /></div><div class="addDoc col-md-3 col-xs-12"><input type="text" id="advLink_1" class="docLink form-control" placeholder="Контакты" /></div></div>');
											}
										  </script>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="video">Видеопрезентация <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input id="video" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Ссылка на видеопрезентацию">
										  </div>
										</div>
										<div class="form-group">
										  <label class="control-label col-md-4 col-sm-4 col-xs-12" for="website">Сайт проекта <span class="required"></span>
										  </label>
										  <div class="col-md-6 col-sm-6 col-xs-12">
											<input id="website" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Ссылка на сайт проекта">
										  </div>
										</div>
										
									  </form>
									</div><div id="step-5" class="wizard_content" style="display: none;">
									  <h2 class="StepTitle">Процедура почти завершена!</h2>
									  <p>Оставьте контактные данные для связи</p>
									  <div class="row">
										<div class="col-md-3 col-sm-3 col-xs-12">
										  <div class="form-group">
											<input id="fio" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="ФИО">
										  </div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										  <div class="form-group">
											<input id="phone" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Телефон">
										  </div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										  <div class="form-group">
											<input id="social" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" placeholder="Профиль в соц. сетях">
										  </div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										  <div class="form-group">
											<div class="checkbox">
											  <label class="">
												<div class="icheckbox_flat-green checked" style="position: relative;"><input type="checkbox" id="tokenInsur" class="flat" checked="checked" style="position: absolute; opacity: 0;" onclick="calcPrice()"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											  </label><span> Согласен с <a href="#" data-toggle="modal" data-target="#termsModal" style="text-decoration: underline;">условиями</a></span>
											</div>
										  </div>
										</div>
										<!--<hr/>
										<a href="#"><img src="images/dexpert-banner.jpg" alt="" style="filter: invert(100%); max-width: 696px; width: 100%; margin-top: 20px; margin-left: 9px;" /></a>-->
									  </div>
									  <input type="submit" id="smbForm" style="display: none;">
									  <div class="clearfix"></div>
									</div></div></form></div>
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
  
<!-- окно соглашения -->
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				Условия использования<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
			</div>
			<div class="modal-body">
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
			</div>
		</div>
	</div>
</div>
  
  <style>#wizardForm .warning {background: #fff3f3;}</style>
  
  <script src="js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>

  <script src="js/custom.js"></script>
  <!-- form wizard -->
  <script type="text/javascript" src="js/wizard/jquery.smartWizard.js"></script>
  <!-- jq validate -->
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      // Smart Wizard
      $('#wizard').smartWizard({
		labelNext:'Далее', // label for Next button
		labelPrevious:'Вернуться', // label for Previous button
		labelFinish:'Зарегистрировать',  // label for Finish button
		onFinish: onFinishCallback,
		onLeaveStep:leaveAStepCallback,
		keyNavigation:false  // disable arrow step navigation
	  });
	
	function leaveAStepCallback(obj, context){
		// alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
		// return false to stay on step and true to continue navigation 
        return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
		
	}
	
	function validateSteps(stepnumber){
		var isStepValid = true;
		if(stepnumber == 2){
			$('#wizardForm #step-2 input:not(.optional)').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
			$('#wizardForm #step-2 textarea').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		} else if (stepnumber == 3){
			$('#wizardForm #step-3 input:not(.optional)').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		} else if (stepnumber == 4){
			$('#wizardForm #step-4 input:not(.optional)').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		} else if (stepnumber == 5){
			$('#wizardForm #step-5 input[type=text]:not(.optional)').each(function (){
				if ( !$(this).val() ) {
					$(this).addClass('warning');
					isStepValid = false;
				} else {$(this).removeClass('warning');}
			})
		}
		return isStepValid;
	}
	
      function onFinishCallback() {
		  if (validateSteps(5)){  
			alert('здесь вызов отправки формы');
		  }
      }
    });
			//document.getElementById('smbForm').click();

    $(document).ready(function() {
      // Smart Wizard
      $('#wizard_verticle').smartWizard({
        transitionEffect: 'slide'
      });

    });
	
	$("textarea[maxlength]").on("propertychange input", function() {
		var limit = parseInt($(this).attr('maxlength'));
		if (this.value.length >= limit) {
			this.value = this.value.substring(0, this.maxlength);
			alert('Максимально допустимое количество символов для данного поля:' + limit);
		}  
	});
  </script>

</body>

</html>
