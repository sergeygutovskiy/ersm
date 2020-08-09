<!DOCTYPE html>
<html>
<head>
	<title>Контакты — ЕРСМ</title>

	<?php require "templates/_header.php"; ?>

	<link rel="stylesheet" type="text/css" href="/css/pages/contacts.css">
	<link rel="stylesheet" type="text/css" href="/css/_header.css">
	<link rel="stylesheet" type="text/css" href="/css/_header_all_pages.css">
</head>

<body>

	<!-- page header -->
	<?php require "templates/_page_header-start.php"; ?>
		<img class="header-background-image" src="/img/page-headers/header-contacts.jpg">
		<div class="header__title">
			Контакты
		</div>
	<?php require "templates/_page_header-end.php"; ?>

	<main class="main-contacts main-container main-limited">

		<iframe  class="map-contacts"src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa988eec542455be88c6ca9327145ffed7dfe60bbf225852d6966fdaf45e34210&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>

		<div class="down-contacts">

			<div class="left-down">
				<p><span>Адрес нашего офиса Спб:</span><br>
				Санкт-Петербург, проспект Обуховской Обороны д. 86, лит. К, оф. 603</p>

				<p><span>Адрес нашего офиса Москва:</span><br>
				г. Москва, ул. Крылатская д. 5, ком. 53.
				</p>

				<p><span>Режим работы:</span><br>
				ПН-ВС с 9:00 до 21:00
				</p>

				<p><span>Звоните нам по телефону:</span><br>
				<a href="tel:+78126760256">+7 (812) 676-02-56</a>
				</p>
			</div>
	
			<div class="right-down">
				<p><span>Пишите нам на почту:</span><br>
				<a href="mailto:office@ersm-spb.ru">office@ersm-spb.ru</a></p>

				<p><span>Аварийные службы:</span><br>
				Круглосуточно   <a href="tel:+79626847615">+7 (962) 684-76-15</a></p>

				<p><span>Отдел контроля качества:</span><br>
				<a href="tel:+79646101828">+7 (964) 610-18-28</a></p>

				<p><span>Банковские реквизиты:</span><br>
				р/с 40702810290150000867
				в ПАО «Банк Санкт-Петербург»
				БИК 044030790 Корр. счет 30101810900000000790
				</p>
			</div>
		</div>
	</main>

	<!-- footer -->
	<?php require "templates/_footer.php"; ?>
</body>
</html>