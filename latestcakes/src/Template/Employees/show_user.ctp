<?php
##########Add New User Link
echo $this->Html->link('Add New user',[
	'controller' => 'Employees',
	'action' => 'addUser'
	]);

echo "<table>";
echo $this->Html->tableHeaders([
	'userName','Profilepic', 'password', 'Created', 'Modified','Action'
	]);
foreach ( $employees as $employee ) {
	echo $this->Html->tableCells([[
			     $employee['email'],
			     $this->Html->image('profile/1451922936_monthly-report.png'),
			     $employee['password'], $employee['created'],$employee['modified'],
				 $this->Html->link(('Edit'), ['action' => 'editUser', $employee->id]),
				 $this->Html->link(('Delete'), ['action' => 'deleteUser', $employee->id])
			]]);

}
echo "<table>";

