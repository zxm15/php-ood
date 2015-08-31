<?php 

require 'AuthModel.php';

class AuthController {

	protected $authModel;

	public function __construct(AuthModel $authModel) {
		$this->authModel = $authModel;
	}

	public function auth($info = []) {
		$authRes = $this->authModel->authUser($info);
		if ($authRes) {
			if ($this->registerUser($info)) {
				$this->registerUserSuccessfully();
			} else {
				$this->registerUserFailed();
			}
		} 
	}

	public function registerUser($info = []) {
		return $this->authModel->insertUser();

	}
	public function registerUserSuccessfully() {
		var_dump("Register user Successfully");
	}

	public function registerUserFailed() {
		var_dump("Register user failed");
	}
}