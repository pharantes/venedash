<?php
/**
 * Configurações do post type
 */
$config = array(
	'label'           => 'Blog',
	'public'          => true,
	'show_ui'         => true,
	'hierarchical'	  => true,
	'rewrite'         => array(
		'slug'		  => 'blog',
		'with_front'  => true
	),
	'supports'        => array(
		'title',
		'editor'
	),
)
?>