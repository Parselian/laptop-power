<?php
require_once(__DIR__ . '/assets/configs/config.php');
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/fonts.css">
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
	<header class="header header_scrolled">
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
					<a href="tel: <?= $phone_link; ?> " class="header__contacts-phone"><?= $phone_format ?></a>
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
			<div class="features__feature-title">Бесплатная <span class="line-break">диагностика</span></div>
		</div>
		<div class="features__feature">
			<svg class="features__feature-icon">
				<use xlink:href="./assets/stack/sprite.svg#gear"></use>
			</svg>
			<div class="features__feature-title">Ремонт <span class="line-break">любой сложности</span></div>
		</div>
	</div>
</section>

<section class="prices">
	<div class="container prices__wrap">
		<h2 class="section__title section__title_alt prices__title">Услуги сервисного центра <?= $company_name;?></h2>

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

	<div class="container">
		<div class="delivery-form">
			<div class="delivery-form__title">Приедем к вам за 30 минут <span class="line-break">Бесплатно!</span></div>
			<div class="delivery-form__subtitle">Оставьте свой номер телефона <span class="line-break">перезвоним через 2 минуты</span>
			</div>
			<form action="./assets/configs/mail.php" method="POST">
				<input type="text" class="delivery-form__input" placeholder="+7 (___) ___-__-__">
				<button type="submit" class="button button_callback delivery-form__button">Перезвоните мне</button>
			</form>
			<picture>
				<source srcset="./assets/images/webp/delivery-car.webp" type="image/webp">
				<img src="./assets/images/delivery-car.png" alt="Машина" class="delivery-form__img">
			</picture>
		</div>
	</div>
</section>

<section class="advantages">
	<div class="container advantages__wrap">

		<div class="advantages__col advantages__info">
			<h3 class="advantages__title">Наши преимущества</h3>
			<div class="advantages__slider">
				<div class="advantages__slide">
					<picture>
						<source srcset="./assets/images/webp/steps-bg.webp" type="image/webp">
						<img src="./assets/images/steps-bg.jpg" alt="Срочный ремонт" class="advantages__slide-img">
					</picture>
					<div class="advantages__slide-info">
						<h4 class="advantages__slide-title">Бесплатная диагностика</h4>
						<p class="advantages__slide-text">
							Диагностика необходима для того, чтобы определить точную причину неисправности. Только после диагностики будет
							известен
							срок и стоимость ремонта. Если вас интересует типичная услуга (например, замена клавиши ноутбука), то инженер
							выполнит
							осмотр техники на возможность оказания данной услуги, назовет стоимость, заполнит договор и после этого начнется
							ремонт.
						</p>
					</div>
				</div>
			</div>
			<div class="advantages__static">
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Фиксированные цены</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Бесплатный выезд</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Пожизненная гарантия</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Срочный ремонт</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Оригинальные запчасти</div>
				</div>
				<div class="advantages__static-item">
					<svg class="advantages__static-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#check"></use>
					</svg>
					<div class="advantages__static-item-text">Бесплатная диагностика</div>
				</div>

			</div>
			<button class="button button_callback advantages__button">Вызвать мастера</button>
		</div>

		<div class="advantages__col advantages__controls">
			<h3 class="advantages__controls-title">Преимущества</h3>
			<div class="advantages__controls-buttons">
				<div class="advantages__controls-button">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Сроки</h5>
						<div class="advantages__controls-button-text">Ремонт от 20 минут</div>
					</div>
				</div>
				<div class="advantages__controls-button advantages__controls-button_active">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Гарантия</h5>
						<div class="advantages__controls-button-text">Пожизненная гарантия</div>
					</div>
				</div>
				<div class="advantages__controls-button">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Доставка</h5>
						<div class="advantages__controls-button-text">Выезд и доставка</div>
					</div>
				</div>
				<div class="advantages__controls-button">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Диагностика</h5>
						<div class="advantages__controls-button-text">Бесплатная диагностика</div>
					</div>
				</div>
				<div class="advantages__controls-button">
					<svg class="advantages__controls-button-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="advantages__controls-button-info">
						<h5 class="advantages__controls-button-title">Запчасти</h5>
						<div class="advantages__controls-button-text">Оригинальные запчасти</div>
					</div>
				</div>
			</div>

			<svg class="advantages__controls-more">
				<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
			</svg>
		</div>
	</div>
</section>

<section class="steps">
	<div class="container steps__wrap">
		<h2 class="section__title section__title_alt steps__title">Как мы работаем?</h2>
		<div class="steps__blocks">
			<div class="steps__block">
				<div class="steps__block-number">1</div>
				<div class="steps__block-text">
					<span class="text_accent">Оставьте заявку</span> на ремонт по телефону или на сайте
				</div>
			</div>
			<div class="steps__block">
				<div class="steps__block-number">2</div>
				<div class="steps__block-text">
					Ожидайте мастера. выезд и диагностика - <span class="text_accent">бесплатно</span>
				</div>
			</div>
			<div class="steps__block">
				<div class="steps__block-number">3</div>
				<div class="steps__block-text">
					Ремонтируем Ваше устройство. Ремонт занимает <span class="text_accent">от 30 минут</span>
				</div>
			</div>
			<div class="steps__block">
				<div class="steps__block-number">4</div>
				<div class="steps__block-text">
					Проверяете качество ремонта и получаете <span class="text_accent">пожизненную</span> гарантию
				</div>
			</div>
		</div>
	</div>
	<picture>
		<source srcset="./assets/images/webp/steps-bg.webp" type="image/webp">
		<img src="./assets/images/steps-bg.jpg" alt="Материнская плата MacBook" class="steps__bg">
	</picture>
</section>

<section class="team">
	<div class="container team__wrap">
		<h2 class="section__title">Опытные мастера</h2>
		<div class="section__subtitle">
			В сервисном центре <?= $company_name ?> работают только <span class="line-break">мастера с опытом работы от 3-х лет.</span>
		</div>

		<div class="team__cards">
			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_1.webp" type="image/webp">
					<img src="./assets/images/engineer_1.jpg" alt="Фото инженера" class="team__card-img">
				</picture>
				<h3 class="team__card-name">Илья Федоров</h3>
				<h3 class="team__card-position">Старший инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2014 г.</div>
				<a href="#" class="team__card-link">Посмотреть сертификат</a>
			</div>

			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_2.webp" type="image/webp">
					<img src="./assets/images/engineer_2.jpg" alt="Фото инженера" class="team__card-img"></picture>
				<h3 class="team__card-name">Илья Федоров</h3>
				<h3 class="team__card-position">Инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2017 г.</div>
				<a href="#" class="team__card-link">Посмотреть сертификат</a>
			</div>

			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_3.webp" type="image/webp">
					<img src="./assets/images/engineer_3.jpg" alt="Фото инженера" class="team__card-img"></picture>
				<h3 class="team__card-name">Илья Федоров</h3>
				<h3 class="team__card-position">Инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2018 г.</div>
				<a href="#" class="team__card-link">Посмотреть сертификат</a>
			</div>

			<div class="team__card">
				<picture>
					<source srcset="./assets/images/webp/engineer_4.webp" type="image/webp">
					<img src="./assets/images/engineer_4.jpg" alt="Фото инженера" class="team__card-img"></picture>
				<h3 class="team__card-name">Илья Федоров</h3>
				<h3 class="team__card-position">Инженер</h3>
				<div class="team__card-experience">Ремонтирует компьютерную технику с 2016 г.</div>
				<a href="#" class="team__card-link">Посмотреть сертификат</a>
			</div>
		</div>
		<button class="button button_callback team__button">Вызвать мастера</button>
	</div>
</section>

<section class="reviews">
	<div class="container reviews__wrap">
		<h2 class="section__title">Нас выбирают клиенты</h2>
		<div class="section__subtitle">
			Наши квалифицированные мастера дарят
			<span class="line-break">Вашим устройствам вторую жизнь</span>
		</div>
		<div class="reviews__slider">
			<div class="reviews__slide">
				<p class="reviews__slide-text">
					Обращался в эту мастерскую после того как уронил макбук, у которого разбился экран и погнулся корпус. Неисправность
					устранили, для этого пришлось заменить экран и винчестер. После ремонта ноутбук работает без замечаний. Из неприятных
					моментов только ситуация с неперезвоном- пообещали что мастер перезвонит через 5 минут, но так и не позвонил. Пришлось
					звонить самому. В остальном все хорошо.
				</p>
				<div class="reviews__slide-info">
					<div class="reviews__slide-rating">
						<div class="reviews__slide-rating-title">Рейтинг:</div>
						<div class="reviews__slide-rating-number">4.4</div>
					</div>
					<div class="reviews__slide-reviewer">
						<div class="reviews__slide-reviewer-info">
							<div class="reviews__slide-reviewer-name">Валентин П.</div>
							<div class="reviews__slide-reviewer-problem">Замена матрицы на ноутбуке</div>
						</div>
						<picture>
							<source srcset="./assets/images/webp/reviewer_1.webp" type="image/webp">
							<img src="./assets/images/reviewer_1.jpg" alt="фото клиента" class="reviews__slide-reviewer-img">
						</picture>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="misc">
	<div class="container misc__wrap">
		<div class="faq">
			<h2 class="section__title faq__title">Ответы на частые вопросы</h2>
			<ul class="faq__list">
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Сколько длится ремонт?
						<svg class="faq__list-item-title-icon faq__list-item-title-icon_active">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Как проверяете качество ремонта?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Как проходит ремонт устройства в СЦ?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
				<li class="faq__list-item">
					<div class="faq__list-item-title">
						Какие бренды ноутбуков вы ремонтируете?
						<svg class="faq__list-item-title-icon">
							<use xlink:href="./assets/stack/sprite.svg#faq-arrow"></use>
						</svg>
					</div>
					<p class="faq__list-item-text">
						Допустим ноутбук перегревался и мы заменили кулер. Проверка показала, что перегрев снизился, но не исчез.
						Это значит, что не справляются 4 возможные детали: кулер, процессор, видеочип, ОЗУ.
						Мастер разобрал ноутбук еще раз и выяснил, что на видеочипе высохла термопаста. После замены термопасты ноутбук
						окончательно перестал перегреваться. Отдел контроля качества справился с задачей.
					</p>
				</li>
			</ul>
		</div>

		<div class="gallery">
			<h2 class="section__title gallery__title">
				Галерея
			</h2>
			<div class="gallery__images">
				<picture>
					<source srcset="./assets/images/webp/gallery.webp" type="image/webp">
					<img src="./assets/images/gallery.jpg" alt="Процесс работы" class="gallery__image"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery.webp" type="image/webp">
					<img src="./assets/images/gallery.jpg" alt="Процесс работы" class="gallery__image"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery.webp" type="image/webp">
					<img src="./assets/images/gallery.jpg" alt="Процесс работы" class="gallery__image"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery.webp" type="image/webp">
					<img src="./assets/images/gallery.jpg" alt="Процесс работы" class="gallery__image"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery.webp" type="image/webp">
					<img src="./assets/images/gallery.jpg" alt="Процесс работы" class="gallery__image"></picture>
				<picture>
					<source srcset="./assets/images/webp/gallery.webp" type="image/webp">
					<img src="./assets/images/gallery.jpg" alt="Процесс работы" class="gallery__image"></picture>
			</div>
		</div>
	</div>
</section>

<section class="questions">
	<div class="container questions__wrap">
		<h2 class="section__title questions__title">Остались вопросы?</h2>
		<div class="section__subtitle questions__subtitle">Оставьте свой номер телефона, мы свяжемся с вами через 2 минуты</div>
		<form action="" class="questions__form">
			<input type="text" class="questions__form-input" placeholder="+7 (___) ___-__-__">
			<button type="submit" class="button questions__form-button">Перезвоните мне</button>
		</form>
		<div class="questions__form-footnote">Нажимая на кнопку "Перезвоните мне" вы соглашаетесь с политикой обработки
			<a href="#" class="text_accent questions__form-link">персональных данных</a></div>
	</div>
</section>

<section class="contacts">
	<div class="container contacts__wrap">
		<div class="contacts__block">
			<div class="contacts__block-wrap">
				<h3 class="contacts__block-title">Наши контакты:</h3>
				<div class="contacts__block-item">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#placeholder"></use>
					</svg>
					<div class="contacts__block-item-text">
						190015, Санкт-Петербург, Московский пр-т д.7
					</div>
				</div>
				<div class="contacts__block-item">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#phone-call"></use>
					</svg>
					<a href="tel:<?= $phone_link ?>" class="contacts__block-item-link"><?= $phone_format ?></a>
				</div>
			</div>


			<div class="contacts__block-wrap">
				<h3 class="contacts__block-title">Мы работаем:</h3>
				<div class="contacts__block-item">
					<svg class="contacts__block-item-icon">
						<use xlink:href="./assets/stack/sprite.svg#clock"></use>
					</svg>
					<div class="contacts__block-item-text">
						с 8:00 до 23:00 <span class="line-break">Без выходных</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map" class="contacts__map"></div>
</section>

<footer class="footer">
	<div class="container footer__wrap">
		<div class="footer__col">
			<img src="./assets/images/svg/logo.svg" alt="logo" class="footer__logo">
			<div class="footer__billings">
				<img src="./assets/images/svg/visa.svg" alt="visa" class="footer__billing">
				<img src="./assets/images/svg/mastercard.svg" alt="mastercard" class="footer__billing">
				<img src="./assets/images/sber.png" alt="sber" class="footer__billing">
				<img src="./assets/images/rub.png" alt="cash" class="footer__billing">
			</div>
		</div>
		<nav class="footer__col footer__nav">
			<a href="#prices" class="footer__nav-link">Цены</a>
			<a href="#about" class="footer__nav-link">О нас</a>
			<a href="#faq" class="footer__nav-link">Отзывы</a>
			<a href="#contacts" class="footer__nav-link">Контакты</a>
		</nav>
		<div class="footer__col footer__contacts">
			<a href="tel:<?= $phone_link ?>" class="footer__phone"><?= $phone_format ?></a>
			<div class="footer__worktime">C 8:00 до 23:00 без выходных</div>
		</div>
	</div>
	<div class="container footer__footnote">
		Сервисный центр <?= $company_name ?>. Acer, Asus, HP, Apple, Lenovo, MSI, Dell, Xiaomi, Sony, Samsung, LG, Honor, Huawei, Prettec,
		Irbis и их логотипы являются зарегистрированными товарными знаками в США и других странах. Информация опубликованная на сайте не
		является публичной офертой, определяемой положениями Статьи 437 ГК РФ. Цены указаны за услугу, запчасти в эту стоимость не входят.
	</div>
</footer>

<div class="popup popup-order">
	<form action="" method="POST" class="popup-form popup-form_order">
		<h2 class="popup-form__title">Заказать ремонт матрицы ноутбука со <span class="text_accent">cкидкой 20%</span></h2>
		<div class="popup-form__subtitle">Мы свяжемся с вами через 2 минуты</div>
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#close"></use>
		</svg>
		<div class="popup-form__row">
			<div class="popup-form__col">
				<div class="popup-form__input-wrap">
					<label for="" class="popup-form__input-label">Ваше имя:</label>
					<input type="text" class="popup-form__input" placeholder="Ваше имя">
				</div>
				<div class="popup-form__input-wrap">
					<label for="" class="popup-form__input-label">Ваш телефон</label>
					<input type="text" class="popup-form__input" placeholder="+7 (___) ___-__-__">
				</div>
				<button type="submit" class="button button_callback popup-form__button">Оставить заявку</button>
				<div class="popup-form__footnote">
					Нажимая на кнопку "Оставить заявку" я даю согласие на
					<a href="#" class="popup-form__footnote-link">обработку персональных данных</a>
				</div>
			</div>
			<div class="popup-form__col">
				<div class="popup-form__phone-wrap">
					<div class="popup-form__phone-label">Или позвоните нам:</div>
					<a href="tel: <?=$phone_link?>" class="popup-form__phone"><?= $phone_format?></a>
				</div>
				<picture>
					<source srcset="./assets/images/webp/asus-laptop.webp" type="image/webp">
					<img src="./assets/images/asus-laptop.jpg" alt="Заказать ремонт" class="popup-form__img">
				</picture>
			</div>
		</div>
	</form>
</div>

<div class="popup popup-thanks">
	<div class="popup-form popup-form_thanks">
		<svg class="popup-form__close">
			<use xlink:href="./assets/stack/sprite.svg#close"></use>
		</svg>
		<h2 class="popup-form__title popup-form__title_thanks">Спасибо!</h2>
		<div class="popup-form__subtitle">Мы свяжемся с вами через 2 минуты</div>
		<button class="button button_callback popup-form__button popup-form__button_thanks">Закрыть</button>
	</div>
</div>
</body>
</html>