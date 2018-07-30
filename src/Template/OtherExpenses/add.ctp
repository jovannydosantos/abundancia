<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherExpense $otherExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Other Expenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="otherExpenses form large-9 medium-8 columns content">
    <?= $this->Form->create($otherExpense) ?>
    <fieldset>
        <legend><?= __('Add Other Expense') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('expenses_description');
            echo $this->Form->control('total');
            echo $this->Form->control('date_expense');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
