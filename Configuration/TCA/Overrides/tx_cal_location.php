<?php

if (!defined('TYPO3_MODE')) die('Access denied.');

$GLOBALS['TCA']['tx_cal_location']['columns']['longitude']['config']['eval'] = \Bobosch\OdsOsm\Evaluation\LonLat::class;
$GLOBALS['TCA']['tx_cal_location']['columns']['longitude']['config']['readOnly'] = 0;
$GLOBALS['TCA']['tx_cal_location']['columns']['longitude']['config']['fieldControl'] = [
    'coordinatepickerControl' => [
        'renderType' => 'coordinatepickerControl'
    ]
];

$GLOBALS['TCA']['tx_cal_location']['columns']['latitude']['config']['eval'] = \Bobosch\OdsOsm\Evaluation\LonLat::class;
$GLOBALS['TCA']['tx_cal_location']['columns']['latitude']['config']['readOnly'] = 0;

?>