<!DOCTYPE html>
<html>
<head>
	<title>Страница</title>

	<?php require "../../templates/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="/css/pages/services_group.css">
	<link rel="stylesheet" type="text/css" href="/css/_header.css">
	<link rel="stylesheet" type="text/css" href="/css/_header_all_pages.css">
</head>

<body>

	<!-- page header starts here -->
	<?php require "../../templates/_page_header-start.php"; ?>
		
		<img class="header-background-image" src="/img/index-backgrounds/background-1.jpg">
		<div class="header__title header__title--common-page ">
			Благоустройство придомовой территории
		</div>

	<?php require "../../templates/_page_header-end.php"; ?>
	<!-- page header ends here -->

	<!-- page content starts here -->

	<main class="main-container main-limited">
		
		<section class="services-group">
			
			<article class="services-group__item size-2">
				<div class="size__helper size__helper-2"></div>
				
				<img class="services-group__image" src="/img/index-backgrounds/background-2.jpg">
				<div class="services-group__background"></div>
				<div class="services-group__title">
					<a href="/">1</a>
				</div>
			</article>

			<article class="services-group__item size-2">
				<img class="services-group__image" src="/img/index-backgrounds/background-2.jpg">
				<div class="services-group__background"></div>
				<div class="services-group__title">
					<a href="/">2</a>
				</div>
			</article>

			<article class="services-group__item size-3">
				<img class="services-group__image" src="/img/index-backgrounds/background-2.jpg">
				<div class="services-group__background"></div>
				<div class="services-group__title">
					<a href="/">3</a>
				</div>
			</article>

			<article class="services-group__item size-1">
				<img class="services-group__image" src="/img/index-backgrounds/background-2.jpg">
				<div class="services-group__background"></div>
				<div class="services-group__title">
					<a href="/">4</a>
				</div>
			</article>

			<article class="services-group__item size-3">
				<div class="size__helper size__helper-3"></div>
				
				<img class="services-group__image" src="/img/index-backgrounds/background-2.jpg">
				<div class="services-group__background"></div>
				<div class="services-group__title">
					<a href="/">5</a>
				</div>
			</article>

		</section>

	</main>
	<!-- page content ends here -->

	<!-- callback form -->
	<?php require "../../templates/_callback.php"; ?>
	<!-- footer -->
	<?php require "../../templates/_footer.php"; ?>

</body>
</html>