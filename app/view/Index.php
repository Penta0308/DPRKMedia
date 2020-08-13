<?php
/**
 *  Index.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 213d11c251104242f9806527d410cf7dad779c54 $
 */

/**
 *  Index view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_Index extends Kpm_ViewClass
{
    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
		$commManager =& $this->backend->getManager('common');

    	// Lastest Edit Date
		$lbl_LastEdit     = $commManager->getLastEdit();
		$lastestNews      = $commManager->getLatestNews();

		// Left MENU
		$journalList      = $commManager->getJournalList();

		// Center CONTENTS
		$article1List     = $commManager->getArticleAllList(15, -20);
		$article2List     = $commManager->getArticleListByMediaID('1001', 5, -20);
		$article3List     = $commManager->getArticleListByMediaID('1002', 5, -20);
		$article4List     = $commManager->getArticleListByMediaID('1003', 5, -30);
		$article5List     = $commManager->getArticleListByMediaID('1004', 5, -30);
		$article6List     = $commManager->getArticleListByMediaID('1005', 5, -30);
		$article7List     = $commManager->getArticleListByMediaID('1006', 5, -30);
		//$lastestNotice    = $commManager->getLatestNotice();
		$lastestNotice    = $commManager->getLatestNoticeFromMSSQL();

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$editorialList    = $commManager->getEditorialList();
		$interviewList    = $commManager->getInterviewList();
		$contributionList = $commManager->getContributionList();

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('article1List',     $article1List);
		$this->af->setApp('article2List',     $article2List);
		$this->af->setApp('article3List',     $article3List);
		$this->af->setApp('article4List',     $article4List);
		$this->af->setApp('article5List',     $article5List);
		$this->af->setApp('article6List',     $article6List);
		$this->af->setApp('article7List',     $article7List);
		$this->af->setApp('lastestNotice',    $lastestNotice);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('editorialList',    $editorialList);
		$this->af->setApp('interviewList',    $interviewList);
		$this->af->setApp('contributionList', $contributionList);
    }
}

