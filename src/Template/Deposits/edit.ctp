<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deposit $deposit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deposit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deposit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Deposits'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deposits form large-9 medium-8 columns content">
    <?= $this->Form->create($deposit) ?>
    <fieldset>
        <legend><?= __('Edit Deposit') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('amount');
            echo $this->Form->control('used_amount');
            echo $this->Form->control('type_pay');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
