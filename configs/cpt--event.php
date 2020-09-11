<?php
/**
 * Configurações do post type
 */
$config = array(
	'label'           => 'Event',
	'public'          => true,
	'show_ui'         => true,
	'hierarchical'	  => true,
	'rewrite'         => array(
		'slug'		  => 'event',
		'with_front'  => true
	),
	'supports'        => array(
		'title',
		'editor'
	),
)
?>