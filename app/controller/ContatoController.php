<?php 
namespace app\controller;
use app\core\Controller;
use app\model\Contato;

class ContatoController extends Controller {

	public function actionIndex() {
		$contato = new Contato();
		$dados["contatos"] = $contato->findAll();
		$dados["view"] = "contato/index";
		$this->load("template", $dados);
	}

	public function actionCreate() {
		$dados["view"] = "contato/create";
		$this->load("template", $dados);
	}

	public function actionSave()
	{
		$contato = new Contato();
		$id = isset($_POST["id"])
			?	strip_tags(filter_input(INPUT_POST, "id"))
			:	NULL;
		$nome = isset($_POST["nome"])
			?	strip_tags(filter_input(INPUT_POST, "nome"))
			:	NULL;
		$tel = isset($_POST["tel"])
			?	strip_tags(filter_input(INPUT_POST, "tel"))
			:	NULL;

		if($id) {
			$contato->edit($id, $nome, $tel);
		}
		else {
			$contato->insert($nome, $tel);
		}
		header("location:".URL_BASE."contato");
	}

	public function actionEdit($id)
	{
		$contato = new Contato();
		$dados["contato"] = $contato->find($id);
		$dados["view"] = "contato/edit";
		$this->load("template", $dados);
	}

	public function actionDelete($id, $delete='N')
	{
		$contato = new Contato();
		if($delete=='S') {
			$contato->delete($id);
			header("location:".URL_BASE."contato");
			exit;
		}
		$dados["contato"] = $contato->find($id);
		$dados["view"] = "contato/delete";
		$this->load("template", $dados);
	}
}