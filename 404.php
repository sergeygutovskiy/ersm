<!DOCTYPE html>
<html>
<head>
	<title>Страница не найдена — ЕРСМ</title>

	<?php require "templates/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="/css/pages/404.css">
	<link rel="stylesheet" type="text/css" href="/css/_header.css">

</head>

<body>
	<div class="404-container">
		
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
	</header>

	<!-- footer -->
	<?php require "templates/_footer.php"; ?>

	</div>
</body>
</html>