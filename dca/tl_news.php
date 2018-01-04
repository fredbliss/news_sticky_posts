<?php


$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('{teaser_legend}','{sticky_legend},sticky;{teaser_legend}', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_news']['fields']['sticky'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_news']['sticky'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array(),
    'sql'                     => "char(1) NOT NULL default ''"
);