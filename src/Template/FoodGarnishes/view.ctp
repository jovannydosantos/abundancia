<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodGarnish $foodGarnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Food Garnish'), ['action' => 'edit', $foodGarnish->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Food Garnish'), ['action' => 'delete', $foodGarnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foodGarnish->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Food Garnishes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food Garnish'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Garnishes'), ['controller' => 'Garnishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Garnish'), ['controller' => 'Garnishes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="foodGarnishes view large-9 medium-8 columns content">
    <h3><?= h($foodGarnish->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Food') ?></th>
            <td><?= $foodGarnish->has('food') ? $this->Html->link($foodGarnish->food->id, ['controller' => 'Foods', 'action' => 'view', $foodGarnish->food->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Garnish') ?></th>
            <td><?= $foodGarnish->has('garnish') ? $this->Html->link($foodGarnish->garnish->id, ['controller' => 'Garnishes', 'action' => 'view', $foodGarnish->garnish->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($foodGarnish->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= $this->Number->format($foodGarnish->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($foodGarnish->created) ?></td>
        </tr>
    </table>
</div>
