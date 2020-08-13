<?php
/**
 *  Japanese/Index.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  japanese_index Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Form_JapaneseIndex extends Kpm_ActionForm
{
    /**
     *  @access protected
     *  @var    array   form definition.
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
 *  japanese_index action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Action_JapaneseIndex extends Kpm_ActionClass
{
    /**
     *  preprocess of japanese_index Action.
     *
     *  @access public
     *  @return string    forward name(null: success.
     *                                false: in case you want to exit.)
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
		file_get_contents("http://www.dprkmedia.com/ms2my.php");
        
        return null;
    }

    /**
     *  japanese_index action implementation.
     *
     *  @access public
     *  @return string  forward name.
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

			return array('redirect', '/japanese/index');
		}

		//if ($loginType == "" || $loginID == "") {
		//	$this->session->set('ReturnURI', $_SERVER['REQUEST_URI']);
		//	return array('redirect', '/gate/gatemainjpn');
		//}

        return 'japanese_index';
    }

    public function authenticate()
    {
    	$this->session->start();
    }
}

