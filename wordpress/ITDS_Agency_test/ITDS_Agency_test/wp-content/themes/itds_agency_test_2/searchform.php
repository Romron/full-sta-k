<form action="<?php echo esc_url(home_url("/")); ?>" method="get">
	<input class="serch" type="search" name="s" value="<?php the_search_query(); ?>" />
	<!-- <input type="hidden" value="goods" name="post_type" /> -->
</form>