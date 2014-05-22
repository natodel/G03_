<?php
	$I = new WebGuy($scenario);
	$I->amOnPage('index.php');
	$I->fillField('Tên đăng nhập', 'ledotan');
	$I->fillField('Mật khẩu', 'ledotan');
	$I->click('Đăng nhập');
	$I->amOnPage('forum.php?category=giadinh');
	$I->click('Đăng bài');
	$I->fillField('Tiêu đề', 'abcde');
	$I->click('Đăng bài');
	$I->amOnPage('forum.php?category=giadinh');
	$I->see('abcde');
?>