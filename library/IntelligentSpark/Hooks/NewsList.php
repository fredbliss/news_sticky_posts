<?php

namespace IntelligentSpark\Hooks;

use \NewsCategories\News as NCNews;

class NewsList extends NCNews {

    public function fetchItems($newsArchives, $blnFeatured, $limit, $offset, $objNewsList) {
        $newsFinal = array();

        $news = \NewsModel::findPublishedByPids($newsArchives, $blnFeatured, $limit, $offset);

        if($objNewsList->news_sticky=='1') {

            while($news->next()) {
                if($news->sticky=='1')
                    $newsFinal[] = $news;
            }

            return $newsFinal;
        }else{
            while($news->next()) {
                if($news->sticky!='1')
                    $newsFinal[] = $news;
            }

            return $newsFinal;
        }
    }
}