<?php
	$validResult = ($_POST['email'] == '1@1.com') ? 'Пользователь с данным email уже зарегистрирован на платформе!' : 'ok'; //simulating email existance error while '1@1.com' recieved
	$rURL = 'ico-list.php'; // url to redirect if 'ok' status
	$reply = ['res' => $validResult, 'rURL' => $rURL];
	echo json_encode($reply);
?>