<nav class="navigation">
	<section class="navigation__left-container">
		<img src="img/logo.png" class="navigation__logo">
		
		<div class="navigation__hamburger-container">
			<div class="navigation__hamburger">
				<span class="line"></span>
				<span class="line"></span>
				<span class="line"></span>
			</div>
		</div>
	</section>

	<section class="navigation__right-container">
		<ul class="navigation__list">
			<li class="navigation__item"> <a href="services.php">Услуги</a> </li>
			<li class="navigation__item"> <a href="/">Работы</a> </li>
			<li class="navigation__item"> <a href="/">О нас</a> </li>
			<li class="navigation__item"> <a href="/">Стоимость</a> </li>
			<li class="navigation__item"> <a href="/">Контакты</a> </li>
		</ul>
	</section>
</nav>

<script>
	var isNavigationActive = false;
	var navigationList     = document.getElementsByClassName("navigation__right-container")[0];
	var navigationButton   = document.getElementsByClassName("navigation__hamburger")[0];

	var toogleNavigation = function () {
		if (isNavigationActive) 
		{
			navigationButton.classList.remove("is-active");
			navigationList.classList.remove("navigation__right-container--active");
		}
		else
		{
			navigationButton.classList.add("is-active");
			navigationList.classList.add("navigation__right-container--active")
		}

		isNavigationActive = !isNavigationActive;
	}

	navigationButton.onclick = toogleNavigation;
</script>