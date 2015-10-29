<?php

require_once 'User.php';

class Chat {
	private $id;
	private $users;
	private $messages;
	private $chatType; //group or private chat
	public function __construct($id, $users, $messages) {
		
	}

	public function receiveMessage(User $user, $message) {
		$this->messages[] = new Message(count($messages), $user, $message, time());
	}

	public function pushMessage($message) {
		foreach ($users as $user) {
			$user->displayMessage($message);
		}
	}


}