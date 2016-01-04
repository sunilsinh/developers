
<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="users form large-9 medium-8 columns content">
<?php echo $this->Form->create($event);
echo $this->Form->input('username',[
    'type'=>'text','label'=>'Username'
    ]);
echo $this->Form->input('contact',[
    'type'=>'text'
]);
echo $this->Form->input('address',[
    'type'=>'text'
    ]);
echo $this->Form->button('Submit');
?>
</div>
