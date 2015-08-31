<?php 

require "AuthController.php";

class Register {

	public function execute(array $info = [], AuthController $controller) {
		var_dump("Registering user");
		$controller->auth();
	}
}

$reg = new Register;
$reg->execute([], new AuthController);