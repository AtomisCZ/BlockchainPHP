<?php
/*
BlockchainPHP - Blockchain.info wallet object-oriented PHP framework
Copyright (C) 2017 Filip Matiaska
https://github.com/AtomisCZ/BlockchainPHP/blob/master/LICENSE
*/
defined('IN_INDEX') or die('<span class="error">You cannot access this file directly!</span>');

class BlockchainException extends Exception {
	protected $message;

	public function errorMessage() {
		$errorMsg = '<span class="error">The blockchain.info framework is not working now, please try it again later.</span><br /><span class="errorMsg">Error message: ' . $this->message . '</span>';
		return $errorMsg;
	}

	public function __construct($message) {
		$this->message = $message;
	}
}

class Blockchain {
	private static $fee = 10000;
	private $id, $pw, $address, $port;

	public function __construct($id, $pw, $address = 'localhost', $port = 3000) {
		if($port < 0 || $port > 65535 || !is_int($port)) {
			throw new BlockchainException('Client error [constructor] - port must be between 0-65535!');
		}

		$this->address = $address;
		$this->id = $id;
		$this->pw = $pw;
		$this->port = $port;

	}
}