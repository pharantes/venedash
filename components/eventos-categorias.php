<div class="sidebar__container">
	<h3 class="sidebar__title">Categorias</h3>
	<?php
	query_posts(array(
		'post_type' 		=> 'categorias',
		'posts_per_page' 	=> -1,
		'meta_key'			=> 'categoria',
		'orderby'			=> 'meta_value',
		'order'				=> 'ASC'
	));

	if( have_posts() ) :?>
		<ul class="sidebar__list">
		<?php
		while( have_posts() ) :
			the_post();?>
			<li class="sidebar__item">
				<a href="<?php echo the_permalink() ?>"><?php echo get_field('categoria'); ?></a>
			</li>
		<?php
		endwhile; ?>
		</ul>
	<?php
	endif;

	wp_reset_query();
	?>
</div>