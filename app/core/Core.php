<?php
class Core {

	private $controller;
	private $method;
	private $params = [];

	public function __construct()
	{
		$this->getURL();
	}

	public function run() 
	{
		$control = $this->getController();
		$obj = new $control;
		$method = $this->getMethod();
		$params = $this->getParams();
		call_user_func_array([$obj, $method], $params);
	}

	public function getURl() 
	{
		// Pegando url para tratamento
		$url = explode("index.php", $_SERVER["PHP_SELF"]);
		$url = end($url);
		
		if($url!="") {
			$url = explode("/", $url);
			array_shift($url);

			// Definindo o controller
			$this->controller = ucfirst($url[0])."Controller";
			array_shift($url);
	
			// Definindo o método
			if(isset($url[0])) {
				$this->method = 'action'.ucfirst($url[0]);
				array_shift($url);
			}
	
			// Definindo os parâmetros validos da url
			if(isset($url))
				$this->params = array_filter($url);
		} else {
				$this->controller = ucfirst(DEFAULT_CONTROLLER)."Controller";
		}	
	}

	public function getController() 
	{
		if(class_exists(PATH_NAMESPACE_CONRTOLLER.$this->controller)) {
			return PATH_NAMESPACE_CONRTOLLER.$this->controller;
		}
		return PATH_NAMESPACE_CONRTOLLER.ucfirst(DEFAULT_CONTROLLER)."Controller";
	}

	public function getMethod() 
	{
		if(method_exists(PATH_NAMESPACE_CONRTOLLER.$this->controller, $this->method)) {
			return $this->method;
		}
		return "Action".ucfirst(DEFAULT_METHOD);
	}

	public function getParams() 
	{
		return $this->params;
	}
}