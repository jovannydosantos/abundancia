<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Silverware $silverware
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Silverware'), ['action' => 'edit', $silverware->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Silverware'), ['action' => 'delete', $silverware->id], ['confirm' => __('Are you sure you want to delete # {0}?', $silverware->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Silverwares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Silverware'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="silverwares view large-9 medium-8 columns content">
    <h3><?= h($silverware->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food Order') ?></th>
            <td><?= $silverware->has('food_order') ? $this->Html->link($silverware->food_order->id, ['controller' => 'FoodOrders', 'action' => 'view', $silverware->food_order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($silverware->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Silverware Type') ?></th>
            <td><?= $this->Number->format($silverware->silverware_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Silverware') ?></th>
            <td><?= $this->Number->format($silverware->total_silverware) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($silverware->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($silverware->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($silverware->modified) ?></td>
        </tr>
    </table>
</div>
