<?php


#$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']    = '{title_legend},name,headline,type;{config_legend},news_archives,numberOfItems,news_featured,perPage,skipFirst;{template_legend:hide},news_metaFields,news_template,customTpl;{image_legend:hide},imgSize;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['palettes']['newslist'] = str_replace('news_featured,','news_featured,news_sticky,', $GLOBALS['TL_DCA']['tl_module']['palettes']['newslist']);



$GLOBALS['TL_DCA']['tl_module']['fields']['news_sticky'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['sticky'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array(),
    'sql'                     => "char(1) NOT NULL default ''"
);