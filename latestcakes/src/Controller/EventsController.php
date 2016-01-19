<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Events Controller
 *
 * @property App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController {
/**
 * Index method
 *
 * @return void
 */
    public function index() {
        $event = $this->Events->newEntity();
        
        if($this->request->is('post')) {
            
            $user = $this->Events->patchEntity($event, $this->request->data);
            prd($user);
        }
       /* $eventTable = TableRegistry::get('Events');
        $events = $eventTable->newEntity();
        if($this->request->is('post')) {
         $eventTable->save($this->request->data);  
        }*/
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
      
      

        
    }


}
