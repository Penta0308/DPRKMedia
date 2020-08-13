<?php
/**
 *  Gate/Gatemain.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  gate_gatemain view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_GateGatemain extends Kpm_ViewClass
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

		$lastestNews   = $commManager->getLatestNews(10);
		//$lastestNotice = $commManager->getLatestNotice();
		$lastestNotice2 = $commManager->getLatestNoticeFromMSSQL();

		$this->af->setAppNE('lastestNews',    $lastestNews);
		$this->af->setApp('lastestNotice',  $lastestNotice2);
    }
}

