<?php
/**
 *  Listsrc.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  listsrc Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Form_Listsrc extends Kpm_ActionForm
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
		'MediaID' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Media ID',
			'max'		=> 9999,
			'min'		=> 0,
			'required'	=> true,
		),

		'offset' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Current offset',
			'max'		=> 999,
			'min'		=> 0,
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
 *  listsrc action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Action_Listsrc extends Kpm_ActionClass
{
    /**
     *  preprocess of listsrc Action.
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
		$ctl = Ethna_Controller::getInstance();
		$ctl->setLocale('ko_KR');

        if ($this->af->validate() > 0) {
            return 'index';
        }

        return null;
    }

    /**
     *  listsrc action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
		$loginType = $this->session->get('LoginType');
		$loginID   = $this->session->get('CustomerLoginID');

		if ($loginType == "" || $loginID == "") {
			$this->session->set('ReturnURI', $_SERVER['REQUEST_URI']);
			return array('redirect', '/gate/gatemain');
		}

        return 'listsrc';
    }

    public function authenticate()
    {
    	$this->session->start();
    }
}

