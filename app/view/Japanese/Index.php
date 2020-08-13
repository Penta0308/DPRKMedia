<?php
/**
 *  Japanese/Index.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  japanese_index view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_JapaneseIndex extends Kpm_ViewClass
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
		$commManager =& $this->backend->getManager('commonjpn');

    	// Lastest Edit Date
		$lbl_LastEdit     = $commManager->getLastEdit();
		$lastestNews      = $commManager->getLatestNews();

		// Left MENU
		$journalList      = $commManager->getJournalList();

		// Center CONTENTS
		$article1List     = $commManager->getArticleAllList(15, -90);
		$article2List     = $commManager->getArticleKPTodayAllList(15, -90);
		//$lastestNotice    = $commManager->getLatestNotice();
		$lastestNotice    = $commManager->getLatestNoticeFromMSSQL();

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$interviewList    = $commManager->getInterviewList();

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('article1List',     $article1List);
		$this->af->setApp('article2List',     $article2List);
		$this->af->setApp('lastestNotice',  $lastestNotice);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('interviewList',    $interviewList);
	}
}

