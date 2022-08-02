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
			<?php wp_nav_menu(
				array(
					'theme_location' => 'footer_nav_menu-1',
					'container' => 'div',
					'container_class' => 'footer-menu__items'
				)
			); ?>
		</div>
		<div class="footer-categories">
			<div class="footer-menu__title">Категории</div>
			<?php wp_nav_menu(
				array(
					'theme_location' => 'footer_nav_menu-2',
					'container' => 'div',
					'container_class' => 'footer-menu__items'
				)
			); ?>
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
<?php wp_footer(); ?>


<script>
	document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')
</script>

</body>

</html>