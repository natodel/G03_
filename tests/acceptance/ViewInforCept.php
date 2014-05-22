<?php
	$I = new WebGuy($scenario);
	$I->wantTo('log in');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', 'ledotan');
	$I->click('Đăng nhập');
	$I->click('Sửa tài khoản');
	$I->see('Thông tin hiện tại của bạn');
	$I->see('Tài khoản: ledotan');
	$I->see('Họ và tên: Lê Đỗ Tân');
?>