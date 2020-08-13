<?php
/**
 *  Listetc.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */
define('LINES_PER_PAGE', 20);

/**
 *  listetc view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_Listetc extends Kpm_ViewClass
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
		$lbl_LastEdit     = $commManager->getLastEdit();
		$lastestNews      = $commManager->getLatestNews();

		// Left MENU
		$journalList      = $commManager->getJournalList();

		// Center CONTENTS
		$id               = $this->af->get('ID');
		$chketc           = $this->af->get('chk_etc');
		$lvl              = $this->af->get('lvl');
		$offset           = $this->af->get('offset') == null ? 0 : (int)$this->af->get('offset');
		$categoryInfo     = $commManager->getCategoryInfo($id, $chketc);
		if (strtolower($chketc) == "section"){
			$articleList  = $commManager->getArticleAllListBySectionID($id, $categoryInfo['lim_date'], $lvl, 101, $offset, LINES_PER_PAGE);
		}else{
			$articleList  = $commManager->getArticleAllListByLocalID($id, $categoryInfo['lim_date'], $lvl, 101, $offset, LINES_PER_PAGE);
		}
		$this->getPager($articleList['allListCnt'], $offset, LINES_PER_PAGE);

		// Right MENU
		$photoList        = $commManager->getPhotoList();
		$videoList        = $commManager->getVideoList();
		$editorialList    = $commManager->getEditorialList();
		$interviewList    = $commManager->getInterviewList();
		$contributionList = $commManager->getContributionList();

		$this->af->setApp('lbl_LastEdit',     $lbl_LastEdit);
		$this->af->setAppNE('lastestNews',      $lastestNews);
		$this->af->setApp('journalList',      $journalList);
		$this->af->setApp('lbl_bar',          $categoryInfo['name']);
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
		$this->af->setApp('link', '/listetc');
		$this->af->setApp('pager', $pager);
	}
}

