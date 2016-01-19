<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class EmployeeDetailsTable extends Table {

	/**
	* Initialize method
	*
	* @param array $config The configuration for the Table.
	* @return void
	*/
	public function initialize(array $config) {
	    parent::initialize($config);
	    $this->table('employee_details');

        $this->belongsTo('Employees', [
            'foreignKey' => 'event_id'
        ]);
	}
	


}