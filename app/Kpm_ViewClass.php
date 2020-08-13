<?php
// vim: foldmethod=marker
/**
 *  Kpm_ViewClass.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: a7f240f9c5c6567917fac7569fbf962b6e752965 $
 */

// {{{ Kpm_ViewClass
/**
 *  View class.
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @access     public
 */
class Kpm_ViewClass extends Ethna_ViewClass
{
    /**#@+
     *  @access protected
     */

    /** @var  string  set layout template file   */
    protected $_layout_file = 'layout';

    /**#@+
     *  @access public
     */

    /** @var boolean  layout template use flag   */
    public $use_layout = true;

    /**
     *  set common default value.
     *
     *  @access protected
     *  @param  object  Kpm_Renderer  Renderer object.
     */
    protected function _setDefault($renderer)
    {
    }

}
// }}}

