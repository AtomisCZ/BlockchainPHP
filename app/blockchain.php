<?php
defined('IN_INDEX') or die('<span class="error">You cannot access this file directly!</span>');

class BitcoinException extends Exception {
	protected $message;

	public function errorMessage() {
		$errorMsg = '<span class="error">The bitcoin API function is not working now, please try it again later.</span><br /><span class="errorMsg">Error message: ' . $this->message . '</span>';
		return $errorMsg;
	}

	public function __construct($message) {
		$this->message = $message;
	}
}