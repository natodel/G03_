<?php
	$I = new WebGuy($scenario);
	$I->wantTo('see notification when user wnat to chang information but dont fill in old password');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'hson');
	$I->fillField('Mật khẩu', "hson");
	$I->click('Đăng nhập');
	$I->click('Thay đổi thông tin tài khoản');
	$I->fillField('Điện thoại', '1234');
	$I->click('Hoàn Thành');
	$I->see('Mật khẩu hiện thời của bạn không chính xác!');
?>