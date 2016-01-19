<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create('association',['method'=>'post']) ?>
    <fieldset>
        <legend><?= __('Association') ?></legend>
        <?php
            echo $this->Form->input('empname',
                ['type'=>'text','label'=>'Employee Name']
             );
            echo $this->Form->input('contactname',
            	 ['type'=>'text','label'=>'Contact Name']
            );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>