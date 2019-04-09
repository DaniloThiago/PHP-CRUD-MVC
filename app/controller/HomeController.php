<?php 
namespace app\controller;
use app\core\Controller;

class HomeController extends Controller {

	public function actionIndex() {
		$dados["view"] = "home/index";
		$this->load("template", $dados);
	}

}