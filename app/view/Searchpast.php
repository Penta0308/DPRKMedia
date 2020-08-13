<?php
/**
 *  Searchpast.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */
define('LINES_PER_PAGE', 20);

/**
 *  searchpast view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_Searchpast extends Kpm_ViewClass
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
		$mediaID          = $this->af->get('ddlMedia');
		$year             = $this->af->get('ddlYear') == "" ? date('Y') : (int)$this->af->get('ddlYear');
		$month            = $this->af->get('ddlMonth') == "" ? date('m') : (int)$this->af->get('ddlMonth');
		$day              = $this->af->get('ddlDay') == "" ? date('d') : (int)$this->af->get('ddlDay');
		$offset           = $this->af->get('offset') == null ? 0 : (int)$this->af->get('offset');
		$mediaList        = $commManager->getMediaList();

		if ($year != "" && $month != "" && $day != "") {
			$articleList = $commManager->getArticleListByDate($mediaID, "$year-$month-$day", $offset, LINES_PER_PAGE);
			$this->getPager($articleList['allListCnt'], $offset, LINES_PER_PAGE);
		} else {
			$articleList = array ('allListCnt' => 0, 'list' => array());
		}

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$editorialList    = $commManager->getEditorialList();
		$interviewList    = $commManager->getInterviewList();
		$contributionList = $commManager->getContributionList();

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setApp('mediaList',        $mediaList);
		$this->af->setApp('selectedDate',     sprintf("%s-%s-%s", $year, $month, $day));
		$this->af->setApp('articleList',      $articleList);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('editorialList',    $editorialList);
		$this->af->setApp('interviewList',    $interviewList);
		$this->af->setApp('contributionList', $contributionList);
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
		$this->af->setApp('link', '/searchpast');
		$this->af->setApp('pager', $pager);
	}
}

