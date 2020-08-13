<?php
/**
 *  Search.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  search Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Form_Search extends Kpm_ActionForm
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
		'search_year_from' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'search_year_from',
			'max'		=> 2020,
			'min'		=> 2005,
			'required'	=> false,
		),
		'search_month_from' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'search_month_from',
			'max'		=> 12,
			'min'		=> 1,
			'required'	=> false,
		),
		'search_day_from' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'search_day_from',
			'max'		=> 31,
			'min'		=> 1,
			'required'	=> false,
		),
		'search_year_to' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'search_year_to',
			'max'		=> 2020,
			'min'		=> 2005,
			'required'	=> false,
		),
		'search_month_to' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'search_month_to',
			'max'		=> 12,
			'min'		=> 1,
			'required'	=> false,
		),
		'search_day_to' => array(
			'type'		=> VAR_TYPE_INT,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'search_day_to',
			'max'		=> 31,
			'min'		=> 1,
			'required'	=> false,
		),
        
		'ddlWhere' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Category',
			'required'	=> false,
		),

		'txtKeyword' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Keyword',
			'required'	=> false,
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
 *  search action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Action_Search extends Kpm_ActionClass
{
    /**
     *  preprocess of search Action.
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
     *  search action implementation.
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

        return 'search';
    }

    public function authenticate()
    {
    	$this->session->start();
    }
}

