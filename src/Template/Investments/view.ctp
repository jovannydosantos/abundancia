<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Investment $investment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Investment'), ['action' => 'edit', $investment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Investment'), ['action' => 'delete', $investment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $investment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Investments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Investment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="investments view large-9 medium-8 columns content">
    <h3><?= h($investment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $investment->has('user') ? $this->Html->link($investment->user->email, ['controller' => 'Users', 'action' => 'view', $investment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($investment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($investment->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Investement') ?></th>
            <td><?= h($investment->date_investement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($investment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($investment->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description Investment') ?></h4>
        <?= $this->Text->autoParagraph(h($investment->description_investment)); ?>
    </div>
</div>
