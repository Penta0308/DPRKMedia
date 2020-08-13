<?php
/**
 *  Gate/Gatemain.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 7eaa7a065e4bbc15f8e3a92ab9fea5ab5d4d9fe4 $
 */

/**
 *  gate_gatemain Form implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Form_GateGatemain extends Kpm_ActionForm
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
		'txt_userid' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Login ID',
			'required'	=> true,
		),

   		'txt_pwd' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'Password',
			'required'	=> true,
		),

   		'btn_login' => array(
			'type'		=> VAR_TYPE_STRING,
			'form_type' => FORM_TYPE_HIDDEN,
			'name'		=> 'LOGIN Button',
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
 *  gate_gatemain action implementation.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Action_GateGatemain extends Kpm_ActionClass
{
    /**
     *  preprocess of gate_gatemain Action.
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

		$button = $this->af->get('btn_login');
		if ($button != "") {
	        if ($this->af->validate() > 0) {
	            return 'gate_gatemain';
	        }
		}

        return null;
    }

    /**
     *  gate_gatemain action implementation.
     *
     *  @access public
     *  @return string  forward name.
     */
    public function perform()
    {
    	$this->session->start();
    	$this->session->set('LoginType', null);
    	$this->session->set('CustomerLoginID', null);
    	
		$commManager =& $this->backend->getManager('common');

		$ipaddr = $_SERVER['REMOTE_ADDR'];
		$res = false;
		if ($ipaddr != ""){
			$res = $commManager->checkIPAddrRange($ipaddr);
		}
		if (count($res) > 0) {
			$this->session->set('LoginType',       "IP");
			$this->session->set('CustomerLoginID', $res[0]['CustomerID']);
			$redirectTo = $this->session->get('ReturnURI') == "" ? "/" : $this->session->get('ReturnURI');
			$this->session->set('ReturnURI', '');
			return array('redirect', $redirectTo);

		} else {
			$button   = $this->af->get('btn_login');
			$userid   = $this->af->get("txt_userid");
			$password = $this->af->get("txt_pwd");

			if ($button != "") {
				$res = $commManager->checkLoginIDandPassword($userid, $password);
				if (count($res) > 0) {
					$activeLoginCnt = $commManager->getActiveLoginUser($userid);
					if ($res[0]['License'] > 0){
						if ($activeLoginCnt > $res[0]['License']) {
							$this->af->setApp('overlicense', true);
						}
					}

					$sessionid = $this->session->getId();
					$commManager->insertLoginSession($userid, $sessionid);

					$this->session->set('LoginType',       "ID");
					$this->session->set('CustomerLoginID', $res[0]['CustomerID']);
					$redirectTo = $this->session->get('ReturnURI') == "" ? "/" : $this->session->get('ReturnURI');
					$this->session->set('ReturnURI', '');
					return array('redirect', $redirectTo);

				} else {
					$this->af->setApp('faillogin', true);
				}
			}
		}

        return 'gate_gatemain';
    }
}

