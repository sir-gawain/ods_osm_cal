<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ods_osm_cal".
 *
 * Auto generated 10-11-2018 22:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title'            => 'OpenStreetMap for cal',
	'description'      => 'This extends ods_osm to use tx_cal_location and tx_cal_organizer records.',
	'author'           => 'Robert Heel',
	'author_email'     => 'typo3@bobosch.de',
	'constraints'      =>
		array(
			'depends'   =>
				array(
					'cal'     => '1.0.0-',
					'ods_osm' => '2.0.0-',
					'typo3'   => '8.0.0-9.99.99',
				),
			'conflicts' =>
				array(),
			'suggests'  =>
				array(),
		),
	'state'            => 'stable',
	'version'          => '2.0.0',
	'category'         => NULL,
	'uploadfolder'     => false,
	'createDirs'       => NULL,
	'clearcacheonload' => false,
	'author_company'   => NULL,
);

