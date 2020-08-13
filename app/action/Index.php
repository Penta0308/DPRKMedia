<?php
/**
 *  Index.php
 *
 *  @author    {$author}
 *  @package   Kpm
 *  @version   $Id: a99fe534b4ecfeb17370b31d06f0d4426eba7d50 $
 */

/**
 *  Index form implementation
 *
 *  @author    {$author}
 *  @access    public
 *  @package   Kpm
 */

class Kpm_Form_Index extends Kpm_ActionForm
{
    /**
     *  @access   protected
     *
     *  @var      array   form definition.
     */
    protected $form = array(
       /*
        *  TODO: Write form definition which this action uses.
        *  @see http://ethna.jp/ethna-document-dev_guide-form.html
        *
        *  Example(You can omit all elements except for "type" one) :
        *
        *  'sample' => array(
        *      // Form definition
        *      'type'        => VAR_TYPE_INT,    // Input type
        *      'form_type'   => FORM_TYPE_TEXT,  // Form type
        *      'name'        => 'Sample',        // Display name
        *  
        *      //  Validator (executes Validator by written order.)
        *      'required'    => true,            // Required Option(true/false)
        *      'min'         => null,            // Minimum value
        *      'max'         => null,            // Maximum value
        *      'regexp'      => null,            // String by Regexp
        *      'mbregexp'    => null,            // Multibype string by Regexp
        *      'mbregexp_encoding' => 'UTF-8',   // Matching encoding when using mbregexp 
        *
        *      //  Filter
        *      'filter'      => 'sample',        // Optional Input filter to convert input
        *      'custom'      => null,            // Optional method name which
        *                                        // is defined in this(parent) class.
        *  ),
        */

		'btn_logout' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'LOGIN Button',
			'required'	=> false,
		),
		'act' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Action',
			'required'	=> false,
		),
    );

    /**
     *  Form input value convert filter : sample
     *
     *  @access protected
     *  @param  mixed   $value  Form Input Value
     *  @return mixed           Converted result.
     */
    /*
    protected function _filter_sample($value)
    {
        //  convert to upper case.
        return strtoupper($value);
    }
    */
}

/**
 *  Index action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Action_Index extends Kpm_ActionClass
{
    /**
     *  preprocess Index action.
     *
     *  @access    public
     *  @return    string  Forward name (null if no errors.)
     */
    public function prepare()
    {
        /**
        if ($this->af->validate() > 0) {
            // forward to error view (this is sample)
            return 'error';
        }
        $sample = $this->af->get('sample');
        */
		$ctl = Ethna_Controller::getInstance();
		$ctl->setLocale('ko_KR');

		file_get_contents("http://www.dprkmedia.com/ms2my_mmfiles.php");
        
        return null;
    }

    /**
     *  Index action implementation.
     *
     *  @access    public
     *  @return    string  Forward Name.
     */
    public function perform()
    {
		$loginType = $this->session->get('LoginType');
		$loginID   = $this->session->get('CustomerLoginID');

		$logoutButton = $this->af->get('btn_logout');
		$act = $this->af->get('act');
		if ($logoutButton != "" || $act == "logout") {
	    	$sessionid  = $this->session->getId();
			$commManager =& $this->backend->getManager('common');
			$commManager->deleteLoginSession($sessionid);

			$this->session->set('LoginType', null);
			$this->session->set('CustomerLoginID', null);
			$this->session->regenerateId();

			return array('redirect', '/');
		}

		//if ($loginType == "" || $loginID == "") {
		//	$this->session->set('ReturnURI', $_SERVER['REQUEST_URI']);
		//	return array('redirect', '/gate/gatemain');
		//}

        return 'index';
    }

    public function authenticate()
    {
    	$this->session->start();
    }
}

