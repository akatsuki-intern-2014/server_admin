<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Likes'), array('controller' => 'user_likes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Like'), array('controller' => 'user_likes', 'action' => 'add')); ?> </li>
	</ul>
</div>
