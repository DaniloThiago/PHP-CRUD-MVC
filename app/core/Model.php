<?php
namespace app\core;

abstract class Model { // nunca vai se criada, sempre será herdada
	protected $connection;

	public function __construct()
	{
		$this->connection = new \PDO("pgsql:host=".HOST." dbname=".DB." user=".USER." password=".PASS);
	}
}