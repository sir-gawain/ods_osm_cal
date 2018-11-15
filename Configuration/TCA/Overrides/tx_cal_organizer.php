<?php

defined('TYPO3_MODE') or die();

$tempColumns = array(
    'tx_odsosm_lon' => array( // DECIMAL(9,6)
        'exclude' => 1,
        'label' => 'LLL:EXT:ods_osm/locallang_db.xml:tx_odsosm_lon',
        'config' => array(
            'type' => 'input',
            'size' => 11,
            'max' => 11,
            'checkbox' => 0,
            'default' => '0.000000',
            'eval' => \Bobosch\OdsOsm\Evaluation\LonLat::class,
            'fieldControl' => [
                'coordinatepickerControl' => [
                    'renderType' => 'coordinatepickerControl'
                ]
            ]
        )
    ),
    'tx_odsosm_lat' => array( // DECIMAL(8,6)
        'exclude' => 1,
        'label' => 'LLL:EXT:ods_osm/locallang_db.xml:tx_odsosm_lat',
        'config' => array(
            'type' => 'input',
            'size' => 10,
            'max' => 10,
            'default' => '0.000000',
            'eval' => \Bobosch\OdsOsm\Evaluation\LonLat::class,
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tx_cal_organizer', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tx_cal_organizer', 'tx_odsosm_lon', '', 'after:zip');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToAllPalettesOfField('tx_cal_organizer', 'tx_odsosm_lon', 'tx_odsosm_lat');
