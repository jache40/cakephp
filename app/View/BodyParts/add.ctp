<div class="bodyParts form">
<?php echo $this->Form->create('BodyPart'); ?>
	<fieldset>
		<legend><?php echo __('Add Body Part'); ?></legend>
	<?php
		echo $this->Form->input('body_part');
		echo $this->Form->input('Exercise', array('type' => 'select','multiple' => 'checkbox'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Body Parts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
