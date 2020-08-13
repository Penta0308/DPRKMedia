<?php
/**
 *  Popupviewvideo.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 3746a141b08f7277ff5d5367023b2f4f12139878 $
 */

/**
 *  popupviewvideo view implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_View_Popupviewvideo extends Kpm_ViewClass
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
		$mmFileID    = $this->af->get('mmFileID');
		$chk         = $this->af->get('chk');
		$mediaInfo   = $commManager->getMediaFileInfoByFileID($mmFileID, $chk);
		$this->af->setApp('mediaInfo', $mediaInfo);
    }
}

