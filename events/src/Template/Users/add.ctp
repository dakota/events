<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
		<li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
	</ul>
</div>
<div class="users form large-10 medium-9 columns">
	<?= $this->Form->create($user); ?>
	<fieldset>
		<legend><?= __('Add User') ?></legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('email');
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
