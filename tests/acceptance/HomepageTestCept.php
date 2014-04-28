<?php
	$I = new WebGuy($scenario);
	$I->wantTo('see button register');
	$I->amOnPage('index.php');
	$I->see('Đăng ký');
?>
