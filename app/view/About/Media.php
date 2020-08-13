<?php
/**
 *  About/Media.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  about_media view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_AboutMedia extends Kpm_ViewClass
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

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$editorialList    = $commManager->getEditorialList();
		$interviewList    = $commManager->getInterviewList();
		$contributionList = $commManager->getContributionList();

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('editorialList',    $editorialList);
		$this->af->setApp('interviewList',    $interviewList);
		$this->af->setApp('contributionList', $contributionList);
    }
}

