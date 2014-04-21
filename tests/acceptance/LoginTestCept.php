<?php
	$I = new WebGuy($scenario);
	$I->wantTo('log in');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'hson');
	$I->fillField('Mật khẩu', "hson");
	$I->click('Đăng nhập');
	$I->see('Nguyễn Hồng Sơn');
?>