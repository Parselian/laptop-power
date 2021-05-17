<?php
	require_once (__DIR__ . '/assets/configs/config.php');
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<title>Laptop Power</title>
</head>
<body>
<div class="burger-menu">
	<ul class="burger-menu__list">
		<li class="burger-menu__list-item">
			<a href="#" class="burger-menu__list-link">Цены</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
		<li class="burger-menu__list-item">
			<a href="#" class="burger-menu__list-link">О нас</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
		<li class="burger-menu__list-item">
			<a href="#" class="burger-menu__list-link">Отзывы</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
		<li class="burger-menu__list-item">
			<a href="#" class="burger-menu__list-link">Контакты</a>
			<svg class="burger-menu__list-item-icon">
				<use xlink:href="./images/stack/sprite.svg#right-arrow"></use>
			</svg>
		</li>
	</ul>
</div>
<section class="promo">
	<header class="header">
		<div class="container header__wrap">
			<svg class="header__col header__logo">
				<use xlink:href="./assets/stack/sprite.svg#logo"></use>
			</svg>
			<nav class="header__col header__nav">
				<a href="#" class="header__nav-item">Цены</a>
				<a href="#" class="header__nav-item">О нас</a>
				<a href="#" class="header__nav-item">Отзывы</a>
				<a href="#" class="header__nav-item">Контакты</a>
			</nav>
			<div class="header__col">
				<div class="header__contacts">
					<a href="tel: <?= phone_link;?> " class="header__contacts-phone"><?= $phone_format?></a>
					<div class="header__contacts-worktime">8:00 — 23:00 без выходных</div>
				</div>
				<label for="check" class="burger-btn">
					<input type="checkbox" id="check"/>
					<span></span>
					<span></span>
					<span></span>
				</label>
			</div>
		</div>
	</header>

	<div class="container promo__wrap">
		<h1 class="promo__title">
			Ремонт компьютерной техники <span class="line-break">в СПб</span>
		</h1>
		<ul class="promo__list">
			<li class="promo__list-item">— Профессиональные мастера</li>
			<li class="promo__list-item">— Ремонт любой сложности</li>
			<li class="promo__list-item">— Бесплатный выезд и диагностика</li>
		</ul>
		<div class="promo__buttons">
			<button class="button button_callback promo__button">Срочный ремонт</button>
			<button class="button button_accent-transparent promo__button">Получить скидку</button>
		</div>
	</div>
</section>
</body>
</html>