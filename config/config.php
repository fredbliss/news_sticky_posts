<?php
/**
 * Frontend Module Skeleton for Contao Open Source CMS
 *
 * Copyright (C) 2017 Intelligent Spark
 *
 * @package    Contao Module Skeleton
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */

//Filter out sticky news items (turn on/off here)
$GLOBALS['TL_HOOKS']['newsListFetchItems'][] = array('IntelligentSpark\Hooks\NewsList','fetchItems');
