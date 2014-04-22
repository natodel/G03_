<?php
	$I = new WebGuy($scenario);
	$I->wantTo('change information for account');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'hson');
	$I->fillField('Mật khẩu', "hson");
	$I->click('Đăng nhập');
	$I->see('Thay đổi thông tin tài khoản');
	$I->click('Thay đổi thông tin tài khoản');
	$I->see('Họ và tên: Nguyễn Hồng Sơn');
	$I->fillField('Điện thoại', '1234');
	$I->fillField('Mật khẩu hiện tại', 'hson');
	$I->click('Hoàn Thành');
	$I->see('Đăng xuất');
	$I->click('Thay đổi thông tin tài khoản');
	$I->see('Số điện thoại: 1234');
?>
