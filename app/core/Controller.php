<?php
namespace app\core;

class Controller {
	public function load($viewName, $viewData=[])
	{
		extract($viewData); // convertendo as chaves em variáveis
		include "app/view/".$viewName.".php";
	}
}