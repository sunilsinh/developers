<?php
echo $this->Form->create('Employee',[
	'Controller' => 'Employees',
	'action' => 'addUser',
	'enctype' => 'multipart/form-data'
	]);
echo $this->Form->input('employees.email',[
	'type' => 'text',
	'class' => 'users'
	]);
echo $this->Form->input('employees.password',[
	'type' => 'password',
	'class' => 'users'
	]);

echo $this->Form->input('employeedetails.userAddress',[
	'type' => 'text',
	'class' => 'users'
	]);

/*echo $this->Form->input('profilepic',[
	'type' => 'file',
	'class' => 'users'
	]);*/
echo $this->Form->button('submit',[
	'type' => 'submit',
	'class' => 'users'
	]);
echo $this->Form->end(); 
