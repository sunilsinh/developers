<?php

class Employee extends AppModel {

	/**
	* Initialize method
	*
	* @param array $config The configuration for the Table.
	* @return void
	*/
	public function initialize(array $config) {
	    parent::initialize($config);
	    $this->table('employees');

	}


}