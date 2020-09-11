<div class="sidebar__container">
	<h3 class="sidebar__title">Mais Recentes</h3>
	<?php

	$custom_args = array(
		'post_type' => 'eventos',
		'posts_per_page' => 5
	);

	$custom_query = new WP_Query( $custom_args );

	if ( $custom_query->have_posts() ) : ?>
		<ul class="sidebar__list">
			<?php
			while ( $custom_query->have_posts() ) :

				$custom_query->the_post();
				$url = get_permalink();?>
				<li class="sidebar__item">
					<a href="<?php echo $url; ?>"><?php echo get_field('titulo'); ?></a>
				</li>
			<?php
			endwhile;
			?>
		</ul>
		<?php
		
		wp_reset_postdata();

	endif; ?>
</div>