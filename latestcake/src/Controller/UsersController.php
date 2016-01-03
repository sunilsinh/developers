<?php
namespace App\Controller;


class UsersController extends AppController {
	public $helpers = ['Form','Html'];

	/*
	* purpose: Create function for first controller method
	* Param:
	* return
	* Date: 4 Jan 2015
	*/

	public function index() {
		$this->layout = 'default';

		echo "hello this is sunil singh";

	}

	/*
	* purpose: add new users
	* Param:
	* return
	* Date: 4 Jan 2015
	*/

	public function addUser() {
		
	}
	/*
	* purpose: Delete user
	* Param:
	* return
	* Date: 4 Jan 2015
	*/

	public function deleteuser() {
		
	}

	/*
	* purpose: Edit user's profile
	* Param:
	* return
	* Date: 4 Jan 2015
	*/

	public function editUser() {
		
	}

	/*
	* purpose: show all users listing
	* Param:
	* return
	* Date: 4 Jan 2015
	*/

	public function showUsers() {
		
	}

}