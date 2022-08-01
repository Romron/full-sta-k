<div class="instagram__row">
	<div class="instagram__title">лента Instagram</div>
</div>
<div class="instagram__foto-block">

	<?php $args = array(
		'post_type' => 'instagram_tape',
		'posts_per_page' => 4,
	);
	$instagram_tape = new WP_Query($args);

	if ($instagram_tape->have_posts()) : while ($instagram_tape->have_posts()) : $instagram_tape->the_post(); ?>
			<?php if (has_post_thumbnail(get_the_ID())) the_post_thumbnail('instagram-post'); ?>
		<?php endwhile;
	else : ?>
		постов нет
	<?php endif;
	wp_reset_postdata(); ?>

</div>