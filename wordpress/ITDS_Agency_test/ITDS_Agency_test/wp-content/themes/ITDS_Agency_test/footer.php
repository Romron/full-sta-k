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
			<?php global $ITDS_Agency_options; ?>
			<div class="footer-menu__title">Контакты</div>
			<div class="footer-contacts__text">
				<a href="#">
					<span class="footer-contacts__text-row">
						<span class="block-icon">
							<img src="img/icon-telephone.png" alt="">
						</span>
						<span class="footer-contacts__text-text"><?php esc_html_e($ITDS_Agency_options['contact_fone-number'], 'ITDS_Agency_test_2'); ?></span>
					</span>
				</a>
				<a href="#">
					<span class="footer-contacts__text-row">
						<span class="block-icon">
							<img src="img/icon-maile.png" alt="">
						</span>
						<span class="footer-contacts__text-text"><?php esc_html_e($ITDS_Agency_options['contact_email'], 'ITDS_Agency_test_2'); ?></span>
					</span>
				</a>
				<a href="<?php echo esc_url($ITDS_Agency_options['contact_map-link']); ?>">
					<span class="footer-contacts__text-row">
						<span class="block-icon">
							<img src="img/icon-map.png" alt="">
						</span>
						<span class="footer-contacts__text-text">Локальные шоурумы</span>
					</span>
				</a>
				</span>
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


</body>

</html>