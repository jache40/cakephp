<div class="clients form">
<?php echo $this->Form->create('Client'); ?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('dob', array('dateFormat' => 'DMY', 'minYear' =>date('Y')-100,'maxYear'=>date('Y')));
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('address');
		echo $this->Form->input('suburb');
		echo $this->Form->input('postal');
	?>
	</fieldset>
     <h4><?php echo __('Adding a client will automatically generate client username (as email) and password (as last name)'); ?></h4>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
        <ul>
                <li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
	</ul>
</div>
