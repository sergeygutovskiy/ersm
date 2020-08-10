<!DOCTYPE html>
<html>
<head>
	<title>Главная — ЕРСМ</title>

	<?php require "templates/_header.php"; ?>
	
	<link rel="stylesheet" type="text/css" href="/css/pages/index.css">
	<link rel="stylesheet" type="text/css" href="/css/_header.css">
</head>
<body>

	<!-- header with navigation template -->
	<header class="header">
		<div class="header-background"></div>

		<?php require "templates/_navigation.php"; ?>	

		<div class="header-shadow"></div>

		<section class="header-info main-container">
			<div class="header-info__item">
				<i class="fal fa-clock"></i>
				Работаем ежедневно
				<br>
				<time>
					с 9:00 до 21:00
				</time>
			</div>
			<div class="header-info__item">
				<i class="fas fa-car"></i>
				Бесплатный выезд мастера
			</div>
			<div class="header-info__item">
				<i class="fas fa-comments"></i>
				Бесплатная консультация
				<br>
				инженера
			</div>
			<div class="header-info__item">
				<i class="fas fa-phone-alt"></i>
				Нужен ремонт? Звоните!
				<br>
				<a href="">
					+7 (962) 684 76 15
				</a>
			</div>
		</section>

		<section class="swiper-container header__slider">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide header__slide">
					<img src="img/index-backgrounds/background-1.jpg">
				</div>
				<div class="swiper-slide header__slide">
					<img src="img/index-backgrounds/background-2.jpg">
				</div>
				<div class="swiper-slide header__slide">
					<img src="img/index-backgrounds/background-3.jpg">
				</div>
				<div class="swiper-slide header__slide">
					<img src="img/index-backgrounds/background-4.jpg">
				</div>
				<div class="swiper-slide header__slide">
					<img src="img/index-backgrounds/background-5.jpg">
				</div>
			</div>
		</section>

		<section>
			<div class="header__title">
				Ремонт парадных в Москве <br> и Санкт-Петербурге
			</div>
			<div class="header__button-container">
				<button class="header__button">Заказать консультацию</button>
			</div>
		</section>

		<section class="header__slider-pagination"></section>
	</header>

	<script>
		var headerSwiper = new Swiper('.swiper-container', {
			loop: true,
			speed: 1000,
			
			pagination: {
				el: '.header__slider-pagination',
			},

			autoplay: { delay: 2500 },

			breakpoints: {
				0: {
					autoplay: false
				},
				426: {
					autoplay: { delay: 2500 }
				}
			}
		});

		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	</script>

	<!-- последние работы -->
	<!-- 
	<section class="last-works main-container main-limited">
		<article>
			
		</article>

		<article class="last-works__item">
			<div class="last-works__image-container">
				<div class="last-works__image-background"></div>
				<img class="last-works__image" src="/img/index-backgrounds/background-3.jpg">
			</div>
			<div class="last-works__text">
				<span class="last-works__title">Ремонт парадной</span>
				<span class="last-works__location">
					г. Колпино, ул. Красная, д. 10 и 12
				</span>
			</div>
		</article>

		<article class="last-works__item">
			<div class="last-works__image-container">
				<div class="last-works__image-background"></div>
				<img class="last-works__image" src="/img/index-backgrounds/background-3.jpg">
			</div>
			<div class="last-works__text">
				<span class="last-works__title">Ремонт парадной</span>
				<span class="last-works__location">
					г. Санкт-Петербург, ул. Морской Пехоты, д. 8, корп. 1
				</span>
			</div>
		</article>

		<article class="last-works__item">
			<div class="last-works__image-container">
				<div class="last-works__image-background"></div>
				<img class="last-works__image" src="/img/index-backgrounds/background-3.jpg">
			</div>
			<div class="last-works__text">
				<span class="last-works__title">Ремонт парадной</span>
				<span class="last-works__location">
					г. Санкт-Петербург, ул. Ленсовета, д. 88
				</span>
			</div>
		</article>
	</section>
 	-->

	<!-- услуги -->
	<section class="services-container">
		<div class="main-container main-limited">
			<div class="main-title ">Услуги</div>

			<div class="services">
				<a href="services/group/kosmeticheskij-remont-paradnyh" class="services__item  wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-1.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Косметический ремонт <br> парадных
					</div>
				</a>

				<a href="services/group/prochee" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-2.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Общестроительные <br> работы
					</div>
				</a>

				<a href="services/group/blagoustrojstvo-pridomovoj-territorii" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-3.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Благоустройство <br> придомовой территории
					</div>
				</a>

				<a href="services/proektirovanie" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-4.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Проектирование и <br> согласование проектов
					</div>
				</a>

				<a href="services/group/zamena-okon-i-dverej" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-5.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Установка окон и <br> дверей
					</div>
				</a>

				<a href="services/inzhenernye-sistemy" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-6.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Ремонт общедомовых <br> инженерных систем
					</div>
				</a>

				<a href="services/izgotovlenie-metallokonstrukij" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-7.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Изготовление <br> металлоконструкций
					</div>
				</a>

				<a href="services/group/remont-fasadov" class="services__item wow animate__fadeIn" data-wow-duration="1s">
					<img class="services__image" src="img/index-icons/icon-8.png">
					<div class="services__circle"></div>
					<div class="services__text">
						Ремонт фасадов и <br> многоквартирных домов
					</div>
				</a>
			</div>
		</div>
	</section>

	<!-- как начать -->
	<section class="main-container start-work-container main-limited">
		<div class="main-title">Как начать работать с нами?</div>

		<div class="start-work">
			<div class="start-work__item wow animate__fadeIn" data-wow-duration="1s">
				<div class="start-work__number">1</div>
				<div class="start-work__text">
					Вызовите <span class="main-text-blue"> бесплатно  </span> 
					нашего специалиста для замера и обсуждения перечня работ
				</div>
			</div>

			<div class="start-work__item wow animate__fadeIn" data-wow-duration="1s">
				<div class="start-work__number">2</div>
				<div class="start-work__text">
					Получите смету <span class="main-text-blue">на следующий день </span>
				</div>
			</div>

			<div class="start-work__item wow animate__fadeIn" data-wow-duration="1s">
				<div class="start-work__number">3</div>
				<div class="start-work__text">
					Заключите <span class="main-text-blue"> договор</span>,
					оформление которого занимает 5 минут
				</div>
			</div>

			<div class="start-work__item wow animate__fadeIn" data-wow-duration="1s">
				<div class="start-work__number">4</div>
				<div class="start-work__text">
					Вызовите <span class="main-text-blue"> бесплатно  </span> 
					нашего специалиста для замера и обсуждения перечня работ
				</div>
			</div>

			<div class="start-work__item wow animate__fadeIn" data-wow-duration="1s">
				<div class="start-work__number">5</div>
				<div class="start-work__text">
					Получите <span class="main-text-blue">окончательный расчет </span>
					после завершения всех работ и подписания Акта
				</div>
			</div>

			<div class="start-work__item wow animate__fadeIn" data-wow-duration="1s">
				<div class="start-work__number">6</div>
				<div class="start-work__text">
					Наслаждайтесь <span class="main-text-blue"> ремонтом </span> 
					Вашей мечты!
				</div>
			</div>
		</div>
	</section>

	<?php require "templates/_callback.php"; ?>
	<?php require "templates/_footer.php"; ?>
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</body>
</html>