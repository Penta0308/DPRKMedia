<?php
/**
 *  Japanese/Viewarticle.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  japanese_viewarticle view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_JapaneseViewarticle extends Kpm_ViewClass
{
    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
		$commManager =& $this->backend->getManager('common');

    	// Lastest Edit Date
		$lbl_LastEdit = $commManager->getLastEdit();
		$lastestNews      = $commManager->getLatestNews();

		// Left MENU
		$journalList      = $commManager->getJournalList();

		// Center CONTENTS
		$id               = $this->af->get('ArticleID');
		$articleInfo      = $commManager->getArticleInfoByArticleID($id);
		$relArticle       = $commManager->getRelArticleList($articleInfo['LinkArticles']);

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$interviewList    = $commManager->getInterviewList();

file_put_contents('C:\FrontWebSite\test.txt', $articleInfo['Nayong1']);
//		$articleInfo['Nayong1'] = str_replace("    ", "\r\n\r\n", $articleInfo['Nayong1']);
//		$articleInfo['Nayong2'] = str_replace("    ", "\r\n\r\n", $articleInfo['Nayong2']);

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setAppNE('articleInfo',      $articleInfo);
		$this->af->setApp('relArticle',       $relArticle);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('interviewList',    $interviewList);
    }
}

