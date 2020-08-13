<?php
/**
 *  Gate/Contactwritejpn.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  gate_contactwritejpn Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Form_GateContactwritejpn extends Kpm_ActionForm
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
		'txtNation' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Nation',
			'required'	=> false,
		),

		'txtWriteCustomerName' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Write Customer Name',
			'required'	=> false,
		),

		'txtWriteUserName' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Write User Name',
			'required'	=> false,
		),

		'txtTel' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'TEL',
			'required'	=> false,
		),

		'txtEmail' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'E-Mail Address',
			'required'	=> false,
		),

		'txtSubject' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Subject',
			'required'	=> false,
		),

		'txtText' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Text',
			'required'	=> false,
		),

		'txtFile' => array(
			'type'		=> VAR_TYPE_FILE,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'File',
			'required'	=> false,
		),

		'btnSubmit' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Submit Button',
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
 *  gate_contactwritejpn action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Action_GateContactwritejpn extends Kpm_ActionClass
{
    /**
     *  preprocess of gate_contactwritejpn Action.
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
        if ($this->af->validate() > 0) {
            return 'index';
        }

        return null;
    }

    /**
     *  gate_contactwritejpn action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
		$commManager =& $this->backend->getManager('commonjpn');
		$this->af->setApp('popupscript', false);

		$btnSubmit = $this->af->get('btnSubmit');
		if ($btnSubmit != "") {
			$txtNation            = $this->af->get('txtNation');
			$txtWriteCustomerName = $this->af->get('txtWriteCustomerName');
			$txtWriteUserName     = $this->af->get('txtWriteUserName');
			$txtTel               = $this->af->get('txtTel');
			$txtEmail             = $this->af->get('txtEmail');
			$txtSubject           = $this->af->get('txtSubject');
			$txtText              = $this->af->get('txtText');
			$txtFile              = $this->af->get('txtFile');

			$no = $commManager->getNextContactNo();
			$fpath = "";
			if ($txtFile['name'] != "") {
				$fname = basename($txtFile['name']);
				$dir   = $_SERVER['DOCUMENT_ROOT'] .'/Uploaded/ContactFiles/' . $no;
				$fpath = '/Uploaded/ContactFiles/' . $no . '/' . $fname;

				mkdir($dir);
				move_uploaded_file($txtFile['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $fpath);
			}

			$contactTxt = "";
			$contactTxt .= "국가/소재도시 : " . $txtNation . "\n";
			$contactTxt .= "기관명 : " . $txtWriteCustomerName . "\n";
			$contactTxt .= "부서/담당자 : " . $txtWriteUserName . "\n";
			$contactTxt .= "전화/팍스 : " . $txtTel . "\n";
			$contactTxt .= "전자우편 : " . $txtEmail . "\n";
			$contactTxt .= "내용 : \n" . $txtText . "\n";

			$ipaddr = $_SERVER['REMOTE_ADDR'];

			$commManager->insertContact($no, $txtSubject, $contactTxt, $txtWriteUserName, $ipaddr, $fpath);

			$this->af->setApp('popupscript', true);
		}

        return 'gate_contactwritejpn';
    }
}

