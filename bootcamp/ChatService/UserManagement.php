<?php
require_once 'User.php';

class UserManagement {
	private SplObjectStorage $userMap;

	public function __consturct() {
		$userMap = new SplObjectStorage();
	}

	public function register($username, $password) {
		if ($this->userMap.contains($user->name)) throw new InvalidArgumentException("Username has been registered");
		$id = $userMap->count();
		$user = new User($id, $username, $password);
		$this->userMap.attach($username, $user);

		return true;
	}

	public function unregister($username) {
		
	}

	public function login($username, $password) {

	}

	public function logout($username) {
		//update user status;
	}
}

