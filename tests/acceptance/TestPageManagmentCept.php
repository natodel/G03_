<?php
	$I = new WebGuy($scenario);
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', 'ledotan');
	$I->click('Đăng nhập');
	$I->click('Quản lý diễn đàn');
	$I->see('Xin chào Administrator!');
	$I->see('Quản lý diễn đàn');
	$I->see('Trang chủ');
	$I->see('Quản lý bài viết');
	$I->see('Quản lý thành viên');
?>