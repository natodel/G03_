<?php
	$I = new WebGuy($scenario);
	$I->wantTo('see notification when user wnat to chang information but dont fill in old password');
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', 'ledotan');
	$I->click('Đăng nhập');
	$I->click('Sửa tài khoản');
	$I->fillField('Điện thoại', '1234');
	$I->click('Hoàn Thành');
	$I->see('Mật khẩu hiện thời của bạn không chính xác!');
?>