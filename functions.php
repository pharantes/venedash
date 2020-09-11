<?php

/**
 * Registra os CPT
 */
function register_custom_post_type()
{
	/**
	 * coloquei os cpt em arquivos para deixar aqui mais organizado
	 */
	$custom_post_type = array(
		'blog'		=> 'configs/cpt--blog.php',
		'faq'		=> 'configs/cpt--faq.php',
		'event'		=> 'configs/cpt--event.php',
		'platforms' => 'configs/cpt--platforms.php'
	);

	/**
	 * Realiza o loop registrando os cpts com suas configs
	 */
	foreach ($custom_post_type as $label => $config_file) {
		unset($config);

		require($config_file);

		register_post_type($label, $config);
	}
}
add_action('init', 'register_custom_post_type');
add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head()
{

?>
	<script type="text/javascript">
		(function($) {

			$(document).ready(function() {

				$('.acf-field-54cf2c4fcfbfe .acf-input').append($('#postdivrich'));

			});

		})(jQuery);
	</script>
	<style type="text/css">
		.acf-field #wp-content-editor-tools {
			background: transparent;
			padding-top: 0;
		}
	</style>
<?php

}

/**
 * Páginação Customisada
 */
function vb_pagination($query = null)
{

	global $wp_query;
	$query = $query ? $query : $wp_query;
	$big = 999;

	$paginate = paginate_links(
		array(
			'base'		=> str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'type'		=> 'array',
			'total'		=> $query->max_num_pages,
			'format'	=> '?paged=%#%',
			'current'	=> max(1, get_query_var('paged')),
			'prev_text'	=> __('&laquo;'),
			'next_text'	=> __('&raquo;'),
		)
	);

	if ($query->max_num_pages > 1) :
		echo '<div class="row">';
		echo '<div class="col">';
		echo '<nav aria-label="navigation">';
		echo '<ul class="pagination">';
		foreach ($paginate as $page) {
			echo '<li class="page-item">' . $page . '</li>';
		}
		echo '</ul>';
		echo '</nav>';
		echo '</div>';
		echo '</div>';
	endif;
}
