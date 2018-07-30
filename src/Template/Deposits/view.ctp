<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deposit $deposit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deposit'), ['action' => 'edit', $deposit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deposit'), ['action' => 'delete', $deposit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deposit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Deposits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deposit'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deposits view large-9 medium-8 columns content">
    <h3><?= h($deposit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $deposit->has('user') ? $this->Html->link($deposit->user->email, ['controller' => 'Users', 'action' => 'view', $deposit->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deposit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($deposit->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Used Amount') ?></th>
            <td><?= $this->Number->format($deposit->used_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Pay') ?></th>
            <td><?= $this->Number->format($deposit->type_pay) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($deposit->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($deposit->modified) ?></td>
        </tr>
    </table>
</div>
