<?php

/**
 * Doctrine DBAL Bridge
 * Copyright (C) 2013 Tristan Lins
 *
 * PHP version 5
 *
 * @copyright  bit3 UG 2013
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @package    doctrine-dbal
 * @license    LGPL
 * @filesource
 */


/**
 * Custom types
 */
$GLOBALS['DOCTRINE_TYPES']['binaryString']     = 'Contao\Doctrine\DBAL\Types\BinaryStringType';
$GLOBALS['DOCTRINE_TYPES']['contaoBoolean']    = 'Contao\Doctrine\DBAL\Types\ContaoBooleanType';
$GLOBALS['DOCTRINE_TYPES']['serializedBinary'] = 'Contao\Doctrine\DBAL\Types\SerializedBinaryType';
$GLOBALS['DOCTRINE_TYPES']['serialized']       = 'Contao\Doctrine\DBAL\Types\SerializedType';
$GLOBALS['DOCTRINE_TYPES']['timestamp']        = 'Contao\Doctrine\DBAL\Types\TimestampType';
