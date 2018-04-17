<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Address
 */
class Address implements JsonSerializable {
	private $data;
	private $output = array();
	private $log = array();

	public function __construct(array $data) {
		$this->data = $data;
	}

	function add($db) {
		$this->output[] = $this->data;
		$this->log[] = $this->data;
	}

	function patch($db) {
		$this->output[] = $this->data;
		$this->log[] = $this->data;
	}

	function delete($db) {
		$this->output = $this->data;
		$this->log[] = $this->data;
	}

	function jsonSerialize() {
		return $this->output;
	}
	
	function log($logger) {
		$logger->log($this->log);
	}

	public function __toString() {
		var_dump($this->data);
	}

}
