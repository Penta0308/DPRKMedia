# DPRKMEDIA.com Source code

This source code is gained by hacking dprkmedia.com as known as KPM (조선언론정보기지)
It is quite astonishing that their source code is written with the .NET Framework, a framework developed by Microsoft. 
They say the United States is one of the most vicious countries, but they built a website praising the Kim family with a software framework made by the US. LOL. 

You can find many fun comments over the entire source code.

### Fun Comments

#### Source
```csharp
class MY_Controller extends CI_Controller {
	
	...
	// url을 호출할때 먼저 이 메쏘드가 호출된다.
	public function _remap($method, $params = array())
	{
		if (method_exists($this, $method)) //url에서 추출한 메쏘드가 정확하면
		{
			...
			$this->$method($params); //파라메터와 함께 메쏘드를 추출한다.
		}
		...
	}
	public function render($view, $data = array(), $layout = self::LAYOUT_DEFAULT)
	{
		...
    echo boldSpecStr($display); //존함처리
	}
	...
	//현재 리용안함
	public function validate_form($form_elements_names, $validation_rules, $prefix = '')
	{
    ...
	}
	// 불멸의 령도 등록부경로 얻는다.
	public function GetLeadersTemp() {
		$path = self::PATH_DEFAULT."leaders/temp";
		...
	}
	// 우리의 프로그람 등록부경록얻는다.
	public function GetProgramDir() {
		$dir = self::PATH_DEFAULT."program";
		...
	}
}
```

#### Translation

- // url을 호출할때 먼저 이 메쏘드가 호출된다.
  - When calling url, this method is called first.
- // url에서 추출한 메쏘드가 정확하면 파라메터와 함께 메쏘드를 추출한다.
  - If the method extracted from url is correct, the method is extracted with parameters.
- // 존함처리
  - Special treatment for the names from Kim family
- // 불멸의 령도 등록부경로 얻는다.
  - ???? 
- // 우리의 프로그람 등록부경록얻는다.
  - ????

