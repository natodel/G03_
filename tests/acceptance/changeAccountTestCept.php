<?php
	$I = new WebGuy($scenario);
	$I->wantTo('change information for account');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', 'ledotan');
	$I->click('Đăng nhập');
	$I->see('Sửa tài khoản');
	$I->click('Sửa tài khoản');
	$I->see('Họ và tên: Lê Đỗ Tân');
	$I->fillField('Điện thoại', '123456');
	$I->fillField('Mật khẩu hiện tại', 'ledotan');
	$I->click('Hoàn Thành');
	$I->see('Đăng xuất');
	$I->click('Sửa tài khoản');
	$I->see('Số điện thoại: 123456');
?>
