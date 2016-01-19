<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
class EmployeesController extends AppController {

	/**
    * used to redirect user if logged in
    * @params null
    * @access public
    * @return void
    * Date 4th Jan 2016
    */
	public function index() {

	}
	/**
    * used to add new user
    * @params null
    * @access public
    * Date 4th Jan 2016
    * @return void
    */
	public function addUser() {

		/*$employees = $this->Employees->newEntity();

		
		$this->set('employees',$employees);*/
        $employeeTable = TableRegistry::get('Employees');
       $participation = $employeeTable->find('all', [
            'contain' => [
                'employeedeetails'
            ]
        ]);

       echo "<pre>";
       print_r($participation); die;
		if ( $this->request->is('post') ) {

			//$employees   = $this->Employees->patchEntity($employees, $this->request->data);
           /* $entity = $employeeTable ->newEntity($this->request->data(), [
                'associated' => ['employeedetails']
            ]);*/
            $user = $employeeTable->newEntity($this->request->data, [
                    'associated' => ['employeedeetails']
                ]);
           // magic($user);

            
		
            if ( $employeeTable->save($user) ) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'showUser']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
		}
	}
	/**
    * used to edit user
    * @params null
    * @access public
    * Date 4th Jan 2016
    * @return void
    */
	public function editUser( $empID=null) {
		$sinleEmployee = $this->Employees->get($empID, [
            'contain' => []
        ]);
		$this->set('singleEmployee',$sinleEmployee);
		if( $this->request->is('put') ) {
			$employees = $this->Employees->patchEntity($sinleEmployee, $this->request->data);
            if ( $this->Employees->save($employees) ) {
                $this->Flash->success(__('The Employee Data successfully updated.'));
                return $this->redirect(['action' => 'showUser']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
           
	}
	/**
    * used to deleteUser
    * @params null
    * @access public
    * Date 4th Jan 2016
    * @return void
    */
	public function deleteUser( $empID=null ) {
		if( $this->request->is('get') ) {

			$delEmployee = $this->Employees->get($empID);
            if ($this->Employees->delete($delEmployee)) {
                $this->Flash->success(__('Employee successfully deleted.'));
                return $this->redirect(['action' => 'showUser']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }

		}
		
		
	}

	/**
    * used to show all users
    * @params null
    * @access public
    * Date 4th Jan 2016
    * @return void
    */
	public function showUser() {

		$employees = TableRegistry::get('Employees');
		$query = $employees->find('all')->toArray();
		$this->set('employees',$query);
		
	}

}