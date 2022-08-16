<?php get_header() ?>

<?php /* Template Name: order-page */ ?>


<div class="test-php-block">


	<?php

	the_title();
	the_content();
	?>



</div>




<main>
	<div class="breadcrumb-nav">
		<a href="">Главная</a>
		<img src="img/arow-cat-right.png" alt="">
		<a href="">Кухня и столовая</a>
	</div>
	<div class="cat-title">Оформление заказа</div>

	<form action="#">
		<div class="order-block">
			<div class="contaner-1">
				<div class="contact-block">
					<div class="order-block__title">Контактная информация</div>
					<div class="contact-block__filds">
						<input type="text" name="name" class="contact-block__filds-name" placeholder="Имя"></input>
						<input type="text" name="surname" class="contact-block__filds-surname" placeholder="Фамилия"></input>
						<input type="text" name="phone-namber" class="contact-block__filds-phone-namber" placeholder="Номер телефона"></input>
						<input type="text" name="address" class="contact-block__filds-address" placeholder="Адрес"></input>
					</div>
				</div>
				<div class="delive-block">
					<div class="order-block__title">Доставка</div>
					<div class="order-block__fild">
						<input type="radio" name="delive-block" value="">
						<div class="order-block__fild-text">
							<div class="order-block__fild-title">Новая почта</div>
							<div class="order-block__fild-text-text"><a href="#">Дополнительная информация по доставке Новой
									почтой</a></div>
						</div>
					</div>
					<div class="order-block__fild">
						<input type="radio" name="delive-block" value="">
						<div class="order-block__fild-text">
							<div class="order-block__fild-title">Meest Express</div>
							<div class="order-block__fild-text-text"><a href="#">Дополнительная информация по доставке Новой
									почтой</a></div>
						</div>
					</div>
					<div class="order-block__fild">
						<input type="radio" name="delive-block" value="">
						<div class="order-block__fild-text">
							<div class="order-block__fild-title">Justin</div>
							<div class="order-block__fild-text-text"><a href="#">Дополнительная информация по доставке Новой
									почтой</a></div>
						</div>
					</div>
				</div>
				<div class="payment-block">
					<div class="order-block__title">Доставка</div>
					<div class="order-block__fild">
						<input type="radio" name="payment-block" value="">
						<div class="order-block__fild-text">
							<div class="order-block__fild-title">Новая почта</div>
							<div class="order-block__fild-text-text"><a href="#">Дополнительная информация по доставке Новой
									почтой</a></div>
						</div>
					</div>
					<div class="order-block__fild">
						<input type="radio" name="payment-block" value="">
						<div class="order-block__fild-text">
							<div class="order-block__fild-title">Meest Express</div>
							<div class="order-block__fild-text-text"><a href="#">Дополнительная информация по доставке Новой
									почтой</a></div>
						</div>
					</div>
					<div class="order-block__fild">
						<input type="radio" name="payment-block" value="">
						<div class="order-block__fild-text">
							<div class="order-block__fild-title">Justin</div>
							<div class="order-block__fild-text-text"><a href="#">Дополнительная информация по доставке Новой
									почтой</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="contaner-2">
				<div class="your-oder-block">
					<div class="order-block__title">Ваш заказ</div>
					<div class="goods-card-oder__block">
						<div class="goods-card-oder">
							<div class="goods-card-oder__foto">
								<img src="img/produkt-foto.png" alt="produkt foto">
							</div>
							<div class="goods-card-oder__contaner">
								<div class="goods-card-oder__title">Статуэтка-корзинка</div>
								<div class="goods-card-oder__price">100 800 ₴</div>
							</div>
							<div class="goods-card-oder__amount">1 шт</div>
							<div class="goods-card-oder__del">
								<img src="img/delete-icon.png" alt="удалить товар">
							</div>
						</div>
						<div class="goods-card-oder">
							<div class="goods-card-oder__foto">
								<img src="img/produkt-foto.png" alt="produkt foto">
							</div>
							<div class="goods-card-oder__contaner">
								<div class="goods-card-oder__title">Статуэтка-корзинка</div>
								<div class="goods-card-oder__price">100 800 ₴</div>
							</div>
							<div class="goods-card-oder__amount">1 шт</div>
							<div class="goods-card-oder__del">
								<img src="img/delete-icon.png" alt="удалить товар">
							</div>
						</div>
					</div>
					<div class="result-block">
						<div class="result-block__text">Итого</div>
						<div class="result-block__summa">201 600 ₴</div>
					</div>
				</div>
				<button id="order" type="submit">Оформить заказ</button>
			</div>
		</div>
	</form>
</main>

<div class="wrap-footer">
	<footer>
		<div class="footer-logo">
			<div class="block__logo"><img src="img/logo.png" alt="logo"></div>
			<div class="footer-log__text">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor mattis egestas arcu vitae
			</div>
			<div class="footer__block-icon">
				<div class="block-icon"><a href="#"><img src="img/icons_inst.png" alt=""></a></div>
				<div class="block-icon"><a href="#"><img src="img/icons_fb.png" alt=""></a></div>
			</div>
		</div>
		<div class="footer-menu">
			<div class="footer-menu__title">Меню</div>
			<div class="footer-menu__text">
				<a href="#">Сотрудничетсво</a>
				<a href="#">Блог</a>
				<a href="#">FAQ</a>
				<a href="#">Доставка и оплата</a>
				<a href="#">Контакты</a>
			</div>
		</div>
		<div class="footer-categories">
			<div class="footer-menu__title">Категории</div>
			<div class="footer-menu__text">
				<a href="#">Кухня и столовая</a>
				<a href="#">Керамическая посуда</a>
				<a href="#">Текстиль для кухни</a>
				<a href="#">Идеи подарков</a>
			</div>
		</div>
		<div class="footer-contacts">
			<div class="footer-menu__title">Контакты</div>
			<div class="footer-contacts__text">
				<div class="footer-contacts__text-row">
					<div class="block-icon">
						<a href="#"> <img src="img/icon-telephone.png" alt=""></a>
					</div>
					<div class="footer-contacts__text-text">+380 (66) 238 44 66</div>
				</div>
				<div class="footer-contacts__text-row">
					<div class="block-icon">
						<a href="#"> <img src="img/icon-maile.png" alt=""></a>
					</div>
					<div class="footer-contacts__text-text">mooddecor@gmail.com</div>
				</div>
				<div class="footer-contacts__text-row">
					<div class="block-icon">
						<a href="#"> <img src="img/icon-map.png" alt=""></a>
					</div>
					<div class="footer-contacts__text-text">Локальные шоурумы</div>
				</div>
			</div>
		</div>


	</footer>

</div>
<div class="copyright-block">
	MoodDecor 2021 Все права защищены
</div>
</div>
</div>
<script src="js/script.js"></script>
<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

</body>

</html>