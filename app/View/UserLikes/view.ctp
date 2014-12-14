<div class="userLikes view">
<h2><?php echo __('User Like'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userLike['UserLike']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userLike['User']['id'], array('controller' => 'users', 'action' => 'view', $userLike['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userLike['Article']['title'], array('controller' => 'articles', 'action' => 'view', $userLike['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userLike['UserLike']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userLike['UserLike']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Like'), array('action' => 'edit', $userLike['UserLike']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Like'), array('action' => 'delete', $userLike['UserLike']['id']), array(), __('Are you sure you want to delete # %s?', $userLike['UserLike']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Likes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Like'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
