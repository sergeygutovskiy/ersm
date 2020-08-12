<!DOCTYPE html>
<html>
<head>
	<title>ЭраСтройМонтаж</title>

	<?php require "../../templates/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="/css/pages/services_group.css">
	<link rel="stylesheet" type="text/css" href="/css/_header.css">
	<link rel="stylesheet" type="text/css" href="/css/_header_all_pages.css">
</head>

<body>

	<!-- page header starts here -->
	<?php require "../../templates/_page_header-start.php"; ?>
		
		<img class="header-background-image" src="/img/page-headers/services/remont-fasadov-2.jpg">
		<div class="header__title header__title--common-page ">
			Ремонт фасадов
		</div>

	<?php require "../../templates/_page_header-end.php"; ?>
	<!-- page header ends here -->

	<!-- page content starts here -->

	<main class="main-container main-limited">
		
		<section class="services-group">
			
			<article class="services-group__item size-2">
				<div class="size__helper size__helper-2"></div>
				<a href="/services/otmostka-fundamenta">
					<img class="services-group__image" src="/img/page-headers/services/remont-fasadov.jpg">
					<div class="services-group__background"></div>
					<div class="services-group__title">
						<a href="/services/otmostka-fundamenta">Ремонт отмостки фундамента</a>
					</div>
				</a>
			</article>

			<article class="services-group__item size-2">
				<a href="/services/krylco-poduezda">
					<img class="services-group__image" src="/img/page-headers/services/remont-i-oblicovka-krylec-poduezdov.jpg">
					<div class="services-group__background"></div>
					<div class="services-group__title">
						<a href="/services/krylco-poduezda">Ремонт и облицовка крылец подъездов</a>
					</div>
				</a>
			</article>

			<article class="services-group__item size-2">
				<div class="size__helper size__helper-2"></div>
				<a href="/services/trotuary-i-dorozhki">
					<img class="services-group__image" src="/img/page-headers/services/trotuary-i-dorozhki-iz-asfalta-i-plitki.jpg">
					<div class="services-group__background"></div>
					<div class="services-group__title">
						<a href="/services/trotuary-i-dorozhki">Тротуары и дорожки из асфальта и плитки</a>
					</div>
				</a>
			</article>

			<article class="services-group__item size-2">
				<a href="/services/fasadnye-raboty">
					<img class="services-group__image" src="/img/page-headers/services/fasadnye-raboty.jpg">
					<div class="services-group__background"></div>
					<div class="services-group__title">
						<a href="/services/fasadnye-raboty">Фасадные работы</a>
					</div>
				</a>
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