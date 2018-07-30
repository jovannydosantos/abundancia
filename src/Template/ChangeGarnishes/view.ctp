<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChangeGarnish $changeGarnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Change Garnish'), ['action' => 'edit', $changeGarnish->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Change Garnish'), ['action' => 'delete', $changeGarnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $changeGarnish->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Change Garnishes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Change Garnish'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="changeGarnishes view large-9 medium-8 columns content">
    <h3><?= h($changeGarnish->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food Order') ?></th>
            <td><?= $changeGarnish->has('food_order') ? $this->Html->link($changeGarnish->food_order->id, ['controller' => 'FoodOrders', 'action' => 'view', $changeGarnish->food_order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($changeGarnish->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actual Garnish Id') ?></th>
            <td><?= $this->Number->format($changeGarnish->actual_garnish_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New Garnish Id') ?></th>
            <td><?= $this->Number->format($changeGarnish->new_garnish_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($changeGarnish->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($changeGarnish->modified) ?></td>
        </tr>
    </table>
</div>
