<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OtherExpense $otherExpense
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Other Expense'), ['action' => 'edit', $otherExpense->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Other Expense'), ['action' => 'delete', $otherExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $otherExpense->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Other Expenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Other Expense'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="otherExpenses view large-9 medium-8 columns content">
    <h3><?= h($otherExpense->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $otherExpense->has('user') ? $this->Html->link($otherExpense->user->email, ['controller' => 'Users', 'action' => 'view', $otherExpense->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($otherExpense->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($otherExpense->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Expense') ?></th>
            <td><?= h($otherExpense->date_expense) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($otherExpense->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($otherExpense->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Expenses Description') ?></h4>
        <?= $this->Text->autoParagraph(h($otherExpense->expenses_description)); ?>
    </div>
</div>
