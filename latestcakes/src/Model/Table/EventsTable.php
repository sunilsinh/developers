<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
//use Cake\Validation\Validator;

class EventsTable extends Table {
    /*
    * function for initialyze the table
    *  created by sunil singh Dec 8 2015
    */
  /*  public function initialize(array $config) {
        parent::initialize($config);
        $this->hasOne('userDetails', [
            'foreignKey' => 'user_id'
        ]);
    }*/
    /*
    * function for initialyze the table
    *  created by sunil singh Dec 8 2015
    */
     public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('username')
            ->add('username', 'validFormat', [
                'message' => 'Please enter User name'
         ]);

       

        return $validator;
    }

   
    
}