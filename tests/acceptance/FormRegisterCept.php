<?php
	$I = new WebGuy($scenario);
	$I->amOnPage('index.php');
	$I->see('Đăng ký');
	$I->click('Đăng ký');
	$I->see('Thông tin cá nhân');
?>
