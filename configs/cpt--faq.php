<?php
/**
 * Configurações do post type
 */
$config = array(
	'label'           => 'FAQ',
	'public'          => true,
	'show_ui'         => true,
	'hierarchical'	  => true,
	'rewrite'         => array(
		'slug'		  => 'faq',
		'with_front'  => true
	),
	'supports'        => array(
		'title',
		'editor'
	),
)
?>