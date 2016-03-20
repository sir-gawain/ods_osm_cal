<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ods_osm']['tables']['tx_cal_location'] = array(
	'FORMAT' => '%01.16f',
	'lon' => 'longitude',
	'lat' => 'latitude',
	'street' => 'street',
	'zip' => 'zip',
	'city' => 'city',
	'state' => 'country_zone',
	'country' => 'country',
);

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['ods_osm']['tables']['tx_cal_organizer'] = array(
	'FORMAT' => '%01.6f',
	'lon' => 'tx_odsosm_lon',
	'lat' => 'tx_odsosm_lat',
	'street' => 'street',
	'zip' => 'zip',
	'city' => 'city',
	'state' => 'country_zone',
	'country' => 'country',
);
?>