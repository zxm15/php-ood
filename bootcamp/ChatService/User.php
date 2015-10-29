<?php

require_once 'UserStatus.php';
require_once 'Chat.php';

class User {
	private $id;
	private $name;
	private $password;
	private $status;//online, offline, busy
	private $friends;
	public function __construct($id, $name, $password) {
		$this->id = $id;
		$this->name = $name;
		$this->password = $password;
		$status = UserStatus::Online;
		$friends = array();
	}

	public function updateStatus($newStatus) {

	}

	public function dealFriendRequest(User $sender) {
		//some logic to determine accept or not
		//or wait for UI response
		$this->friends[] = $sender;
	} 

	public function createPrivateChat(User $receiver) {

	}

	public function createGroupChat(array $receivers) {

	}

	public function sendMessage(Chat $chat, $message) {
		$chat->receiveMessage($this, $message);
		$chat->pushMessage($message);
	}

	public function displayMessage(Chat $chat, $message) {
		echo 'Received a message from Chat '. $chat->id. ' : '. $message;
	} 


}

// $user = new User(1, "gavin");
// var_dump($user); //the status is null and i am not sure why. 