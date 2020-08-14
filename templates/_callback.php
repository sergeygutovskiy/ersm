<section class="main-container main-limited">

	<div class="main-form">
		<div class="left-form">
			<h3>Заполните форму, и мы вам перезвоним</h3>
			<p>
				Заполните специальную форму на бесплатный вызов мастера или позвоните по телефонам 
				<br class="br-form"><a  href="tel:+79626847615" class="main-text-blue">+7 (962) 684-76-15</a> 
				или 
				<br class="br-form"><a href="tel:+79992383008" class="main-text-blue">+7 (999) 238-30-08</a> 
				с 9:00 до 21:00.
			</p>
			<p>
				Сметчик подъедет в заранее согласованное с Вами время и поможет спланировать ход работ и будущий бюджет ремонта!
			</p>
		</div>

		<div class="right-form">
			<form id="form">
				<input name="name" placeholder="Имя" class="form-input" require>
				<input name="phone" placeholder="Телефон" require>
				<textarea 
					name="text"
					placeholder="Уточните все необходимые детали и пожелания по заявке"
				></textarea>
				<button class="main-btn" type="submit">Заказать звонок</button>
			</form>
		</div>
	</div>

</section>

<script>
	$(document).ready(function() {
		$("#form").submit(function() {
			$.ajax({
				type: "POST",
				url: "/php/mail",
				data: $(this).serialize()
			}).done(function() {
				$(this).find("input").val("");
				alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
				$("#form").trigger("reset");
			});
			return false;
		});
	});
</script>
