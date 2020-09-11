<?php
/**
 * Configurações do post type
 */
$config = array(
	'label'           => 'Platforms',
	'public'          => true,
	'show_ui'         => true,
	'hierarchical'	  => true,
	'rewrite'         => array(
		'slug'		  => 'platforms',
		'with_front'  => true
	),
	'supports'        => array(
		'title',
		'editor'
	),
)
?>