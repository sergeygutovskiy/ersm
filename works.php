<!DOCTYPE html>
<html>
<head>
	<title>ЭраСтройМонтаж</title>

	<?php require "templates/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="/css/pages/works.css">
	<link rel="stylesheet" type="text/css" href="/css/_header.css">
	<link rel="stylesheet" type="text/css" href="/css/_header_all_pages.css">
</head>

<body>

	<!-- page header -->
	<?php require "templates/_page_header-start.php"; ?>
		<img class="header-background-image" src="/img/page-headers/header-contacts.jpg">
		<div class="header__title">
			Работы
		</div>
	<?php require "templates/_page_header-end.php"; ?>

	<main class="main-container main-limited">

		<section class="works">
			
			<article class="last-works__item">
				<div class="last-works__image-container">
					<img class="last-works__image" src="\img\work2.jpeg">
					<div class="last-works__image-background"></div>
				</div>
				<div class="last-works__text">
					<span class="last-works__title">Ремонт козырька</span>
					<span class="last-works__location">
					Ул. Оборонная д.2 - Колпино
					</span>
				</div>
			</article>

			<article class="last-works__item">
				<div class="last-works__image-container">
					<img class="last-works__image" src="\img\work1.jpeg">
					<div class="last-works__image-background"></div>
				</div>
				<div class="last-works__text">
					<span class="last-works__title">Ремонт крыши</span>
					<span class="last-works__location">
					ул. Морской Пехоты д.8 корп.1
					</span>
				</div>
			</article>

			<article class="last-works__item">
				<div class="last-works__image-container">
					<img class="last-works__image" src="\img\work3.jpeg">
					<div class="last-works__image-background"></div>
				</div>
				<div class="last-works__text">
					<span class="last-works__title">Ремонт парадной</span>
					<span class="last-works__location">
						г. Санкт-Петербург, ул. Ленсовета, д. 88
					</span>
				</div>
			</article>

			<article class="last-works__item">
				<div class="last-works__image-container">
					<img class="last-works__image" src="\img\work4.jpeg">
					<div class="last-works__image-background"></div>
				</div>
				<div class="last-works__text">
					<span class="last-works__title">Ремонт парадной</span>
					<span class="last-works__location">
						Г. Колпино, ул. Красная д.10 и д.12
					</span>
				</div>
			</article>

			

		</section>
	</main>

	<!-- callback form -->
	<?php require "templates/_callback.php"; ?>
	<!-- footer -->
	<?php require "templates/_footer.php"; ?>
</body>
</html>