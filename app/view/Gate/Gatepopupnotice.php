<?php
/**
 *  Gate/Gatepopupnotice.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  gate_gatepopupnotice view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_GateGatepopupnotice extends Kpm_ViewClass
{
    /** @var boolean  layout template use flag   */
    public $use_layout = false;

    /**
     *  preprocess before forwarding.
     *
     *  @access public
     */
    public function preforward()
    {
		$commManager =& $this->backend->getManager('common');

		$no = $this->af->get('no');
		//$noticeInfo = $commManager->getNoticeInfo($no);
		$noticeInfo2 = $commManager->getNoticeInfoFromMSSQL($no);

		$this->af->setApp('noticeInfo',    $noticeInfo2);
    }
}

