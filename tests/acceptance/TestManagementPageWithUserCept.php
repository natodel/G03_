<?php
	$I = new WebGuy($scenario);
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'hson');
	$I->fillField('Mật khẩu', 'hson');
	$I->click('Đăng nhập');
	$I->dontsee('Quản lý diễn đàn');
?>