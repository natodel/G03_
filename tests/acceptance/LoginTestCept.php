<?php
	$I = new WebGuy($scenario);
	$I->wantTo('log in');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', 'ledotan');
	$I->click('Đăng nhập');
	$I->see('Lê Đỗ Tân');
?>