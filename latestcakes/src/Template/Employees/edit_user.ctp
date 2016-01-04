<?php
echo $this->Form->Create($singleEmployee);
echo $this->Form->input('email',[
	'type' => 'text']);
echo $this->Form->input('password',[
	'type' => 'text'
	]);
echo $this->Form->input('created', [
	'type' => 'text'
	]);
echo $this->Form->input('modified',[
	'type' => 'text'
	]);
echo $this->Form->button('Update',[
	'type' => 'submit',
	'class' => 'users'
	]);
echo $this->Form->end();
