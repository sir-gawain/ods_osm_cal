<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'OpenStreetMap for cal',
	'description' => 'This extends ods_osm to use tx_cal_location and tx_cal_organizer records.',
	'author' => 'Robert Heel',
	'author_email' => 'typo3@bobosch.de',
	'constraints' => array(
		'depends' => array(
			'cal' => '1.0.0-',
			'ods_osm' => '2.0.0-',
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'state' => 'stable',
	'version' => '1.0.0',
);
?>