<?php
/**
 *  Japanese/Listphoto.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */
define('LINES_PER_PAGE', 20);

/**
 *  japanese_listphoto view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_JapaneseListphoto extends Kpm_ViewClass
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
		$lbl_LastEdit = $commManager->getLastEdit();
		$lastestNews      = $commManager->getLatestNews();

		// Left MENU
		$journalList      = $commManager->getJournalList();

		// Center CONTENTS
		$ddlSelectSection = $this->af->get('ddlSelectSection') == null ? 0 : (int)$this->af->get('ddlSelectSection');
		$offset           = $this->af->get('offset') == null ? 0 : (int)$this->af->get('offset');
		$sectionList      = $commManager->getSectionList();
		$photoAllList     = $commManager->getMediaAllList(201, 0, $ddlSelectSection, $offset, LINES_PER_PAGE);
		$this->getPager($photoAllList['allListCnt'], $offset, LINES_PER_PAGE);

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$interviewList    = $commManager->getInterviewList();

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setApp('sectionList',      $sectionList);
		$this->af->setApp('photoAllList',     $photoAllList);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('interviewList',    $interviewList);
    }

	function getPager($total, $offset, $limit)
	{
		$pager = Ethna_Util::getDirectLinkList($total, $offset, $limit);
		$next = $offset + $limit;

		if($next < $total){
			$last = ceil($total / $limit);
			$this->af->setApp('hasnext', true);
			$this->af->setApp('next', $next);
			$this->af->setApp('last', ($last * $limit) - $limit);
		}

		$prev = $offset - $limit;
		if($offset - $limit >= 0){
			$this->af->setApp('hasprev', true);
			$this->af->setApp('prev', $prev);
		}

		$this->af->setApp('current', $offset);
		$this->af->setApp('link', '/japanese/listphoto');
		$this->af->setApp('pager', $pager);
	}
}

