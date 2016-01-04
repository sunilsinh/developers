<?php
echo $this->Form->create($employees,[
	'Controller' => 'Employees',
	'action' => 'addUser',
	'enctype' => 'multipart/form-data'
	]);
echo $this->Form->input('email',[
	'type' => 'text',
	'class' => 'users'
	]);
echo $this->Form->input('password',[
	'type' => 'password',
	'class' => 'users'
	]);

echo $this->Form->input('profilepic',[
	'type' => 'file',
	'class' => 'users'
	]);
echo $this->Form->button('submit',[
	'type' => 'submit',
	'class' => 'users'
	]);
echo $this->Form->end(); 
