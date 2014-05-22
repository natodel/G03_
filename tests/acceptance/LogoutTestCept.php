<?php
	$I = new WebGuy($scenario);
	$I->wantTo('Log out');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', "ledotan");
	$I->click('Đăng nhập');
	$I->click('Đăng xuất');
	$I->see('Đăng ký');
?>