<!DOCTYPE html>
<html>
<head>
	<title>Страница не найдена — ЕРСМ</title>

	<?php require "templates/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="/css/_header.css">
	<link rel="stylesheet" type="text/css" href="/css/pages/404.css">

</head>

<body>
	<div class="p404-container">
		
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

			<section class="p404__info main-container">
				<div class="p404__title">Такой страницы не существует</div>
				<div class="p404__text">
					К сожалению, введенный Вами адрес недоступен. Скорее всего, это случилось по одной из следующих причин:
					<p></p>
					<ul>
						<li>1. Страница удалена (из-за утраты актуальности информации)</li>
						<li>2. Страница перенесена в другое место</li>
						<li>3. При вводе адреса была допущена ошибка</li>
					</ul>
				</div>
				<a class="p404__button" href="/">Перейти на главную</a>
			</section>
		</header>

		<!-- footer -->
		<?php require "templates/_footer.php"; ?>

	</div>

	<script>
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	</script>
</body>
</html>