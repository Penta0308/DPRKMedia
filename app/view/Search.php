<?php
/**
 *  Search.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */
define('LINES_PER_PAGE', 20);

/**
 *  search view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_Search extends Kpm_ViewClass
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
		$yf         = $this->af->get('search_year_from');
		$mf         = $this->af->get('search_month_from');
		$df         = $this->af->get('search_day_from');
		$yt         = $this->af->get('search_year_to');
		$mt         = $this->af->get('search_month_to');
		$dt         = $this->af->get('search_day_to');
		
		$category         = $this->af->get('ddlWhere');
		$keyword          = $this->af->get('txtKeyword');
		$offset           = $this->af->get('offset') == null ? 0 : (int)$this->af->get('offset');

		$dateerr = false;
		if ($yf != "" && $mf != "" && $df != "") {
			if (!checkdate($mf, $df, $yf)) {
				$dateerr = true;
			}
		}
		if ($yt != "" && $mt != "" && $dt != "") {
			if (!checkdate($mt, $dt, $yt)) {
				$dateerr = true;
			}
		}
		if ($dateerr == false) {
			$ts1 = strtotime(sprintf("%s/%s/%s 00:00:00", $yf, $mf, $df));
			$ts2 = strtotime(sprintf("%s/%s/%s 23:59:59", $yt, $mt, $dt));
			$diff = $ts2 - $ts1;
			if ($diff < 0) {
				$dateerr = true;
			} else {
				$daydiff = $diff / (60 * 60 * 24);
				if ($daydiff > 31) {
					//$dateerr = true;
				}
			}
		}

		$articleList = array('allListCnt'=>0, null);
		if ($dateerr == false) {
			switch(strtolower($category)) {
				case "news":
					$articleList = $commManager->searchNewsList($keyword, $offset, LINES_PER_PAGE, $yf, $mf, $df, $yt, $mt, $dt);
					break;
				case "journal":
					$articleList = $commManager->searchJournalList($keyword, $offset, LINES_PER_PAGE, $yf, $mf, $df, $yt, $mt, $dt);
					break;
				case "photo":
					$articleList = $commManager->searchPhotoList($keyword, $offset, LINES_PER_PAGE, $yf, $mf, $df, $yt, $mt, $dt);
					break;
			}
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
		$this->af->setApp('articleList',      $articleList);
		$this->af->setApp('photoList',        $photoList);
		$this->af->setApp('videoList',        $videoList);
		$this->af->setApp('editorialList',    $editorialList);
		$this->af->setApp('interviewList',    $interviewList);
		$this->af->setApp('contributionList', $contributionList);
		$this->af->setApp('searchKeyword', mb_convert_kana($keyword, 's'));
		$this->af->setApp('dateerr',    $dateerr);
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
		$this->af->setApp('link', '/search');
		$this->af->setApp('pager', $pager);
	}
}

