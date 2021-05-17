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

<section class="features">
	<div class="container features__wrap">
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#guarantee"></use>
			</svg>
			<div class="features__feature-title">Пожизненная <span class="line-break">гарантия</span></div>
		</div>
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#health-report"></use>
			</svg>
			<div class="features__feature-title">Бесплатная <span class="line-break">диагностика</span> </div>
		</div>
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#gear"></use>
			</svg>
			<div class="features__feature-title">Ремонт <span class="line-break">любой сложности</span> </div>
		</div>
	</div>
</section>

<section class="prices">
	<div class="container prices__wrap">
		<h2 class="section__title section__title_alt prices__title">Услуги сервисного центра <?= $company_name?></h2>

		<div class="prices__devices">
			<button data-device="laptops" class="prices__devices-button">Ноутбуки</button>
			<button data-device="monoblocks" class="prices__devices-button prices__devices-button_active">Моноблоки</button>
			<button data-device="computers" class="prices__devices-button">Компьютеры</button>
			<button data-device="servers" class="prices__devices-button">Серверы</button>
		</div>
		<div class="prices__models">
			<button data-model="Acer" class="prices__models-button">Acer</button>
			<button data-model="Asus" class="prices__models-button prices__models-button_active">Asus</button>
			<button data-model="Apple" class="prices__models-button">Apple</button>
			<button data-model="Samsung" class="prices__models-button">Samsung</button>
			<button data-model="Huawei" class="prices__models-button">Huawei</button>
			<button data-model="Xiaomi" class="prices__models-button">Xiaomi</button>
			<button data-model="Honor" class="prices__models-button">Honor</button>
		</div>

		<div class="prices__common-blocks">
			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/display-replacement.webp" type="image/webp">
					<img src="./assets/images/display-replacement.jpg" alt="замена дисплея на ноутбуке" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Замена дисплея</span>
					<span class="prices__common-block-price">1 000 ₽</span>
				</div>
			</div>

			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/laptop-clean.webp" type="image/webp">
					<img src="./assets/images/laptop-clean.jpg" alt="Чистка ноутбука" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Чистка ноутбука</span>
					<span class="prices__common-block-price line-break">390 ₽</span>
				</div>
			</div>

			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/keyboard-repair.webp" type="image/webp">
					<img src="./assets/images/keyboard-repair.jpg" alt="Ремонт клавиатуры" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Ремонт клавиатуры</span>
					<span class="prices__common-block-price line-break">250 ₽</span>
				</div>
			</div>

			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/cooling-system-repair.webp" type="image/webp">
					<img src="./assets/images/cooling-system-repair.jpg" alt="Ремонт системы охлаждения" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Ремонт системы охлаждения</span>
					<span class="prices__common-block-price line-break">390 ₽</span>
				</div>
			</div>

			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/power-chains-repair.webp" type="image/webp">
					<img src="./assets/images/power-chains-repair.jpg" alt="Ремонт цепей питания" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Ремонт цепей питания</span>
					<span class="prices__common-block-price line-break">590 ₽</span>
				</div>
			</div>

			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/motherboard-repair.webp" type="image/webp">
					<img src="./assets/images/motherboard-repair.jpg" alt="Ремонт цепей питания" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Ремонт материнской платы</span>
					<span class="prices__common-block-price line-break">690 ₽</span>
				</div>
			</div>

			<div class="prices__common-block">
				<picture>
					<source srcset="./assets/images/webp/software-install.webp" type="image/webp">
					<img src="./assets/images/software-install.jpg" alt="Установка программ" class="prices__common-block-img">
				</picture>
				<div class="prices__common-block-info">
					<span class="prices__common-block-name">Установка и настройка ПО</span>
					<span class="prices__common-block-price line-break">250 ₽</span>
				</div>
			</div>
		</div>

		<ul class="prices__pricelist">
			<li class="prices__pricelist-item">
				<span class="prices__pricelist-item-name">Ремонт материнской платы ноутбука</span>
				<div class="prices__pricelist-item-wrap">
					<div class="prices__pricelist-item-label">+ скидка 20%</div>
					<button class="prices__pricelist-item-button">Вызвать мастера</button>
					<div class="prices__pricelist-item-price">1 990 ₽</div>
				</div>
			</li>
			<li class="prices__pricelist-item">
				<span class="prices__pricelist-item-name">Ремонт материнской платы ноутбука</span>
				<div class="prices__pricelist-item-wrap">
					<div class="prices__pricelist-item-label">+ скидка 20%</div>
					<button class="prices__pricelist-item-button">Вызвать мастера</button>
					<div class="prices__pricelist-item-price">1 990 ₽</div>
				</div>
			</li>
			<li class="prices__pricelist-item">
				<span class="prices__pricelist-item-name">Ремонт материнской платы ноутбука</span>
				<div class="prices__pricelist-item-wrap">
					<div class="prices__pricelist-item-label">+ скидка 20%</div>
					<button class="prices__pricelist-item-button">Вызвать мастера</button>
					<div class="prices__pricelist-item-price">1 990 ₽</div>
				</div>
			</li>
			<li class="prices__pricelist-item">
				<span class="prices__pricelist-item-name">Ремонт материнской платы ноутбука</span>
				<div class="prices__pricelist-item-wrap">
					<div class="prices__pricelist-item-label">+ скидка 20%</div>
					<button class="prices__pricelist-item-button">Вызвать мастера</button>
					<div class="prices__pricelist-item-price">1 990 ₽</div>
				</div>
			</li>
		</ul>

		<button class="button button_accent prices__pricelist-unroll">Показать всё</button>
	</div>
</section>
</body>
</html>