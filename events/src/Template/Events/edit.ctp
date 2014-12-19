<div class="actions columns large-2 medium-3">
	<h3><?= __('Actions') ?></h3>
	<ul class="side-nav">
		<li><?= $this->Form->postLink(
				__('Delete'),
				['action' => 'delete', $event->id],
				['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
			)
		?></li>
		<li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
	</ul>
</div>
<div class="events form large-10 medium-9 columns">
	<?= $this->Form->create($event); ?>
	<fieldset>
		<legend><?= __('Edit Event') ?></legend>
		<?php
			echo $this->Form->input('title');
			echo $this->Form->input('description');
			echo $this->Form->input('start');
			echo $this->Form->input('end');
			echo $this->Form->input('all_day');
			echo $this->Form->input('users._ids', ['options' => $users]);
		?>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
