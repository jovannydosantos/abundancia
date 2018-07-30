<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExtraGarnish $extraGarnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Extra Garnish'), ['action' => 'edit', $extraGarnish->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Extra Garnish'), ['action' => 'delete', $extraGarnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extraGarnish->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Garnishes'), ['controller' => 'Garnishes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Garnish'), ['controller' => 'Garnishes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="extraGarnishes view large-9 medium-8 columns content">
    <h3><?= h($extraGarnish->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Garnish') ?></th>
            <td><?= $extraGarnish->has('garnish') ? $this->Html->link($extraGarnish->garnish->id, ['controller' => 'Garnishes', 'action' => 'view', $extraGarnish->garnish->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $extraGarnish->has('order') ? $this->Html->link($extraGarnish->order->id, ['controller' => 'Orders', 'action' => 'view', $extraGarnish->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($extraGarnish->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($extraGarnish->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($extraGarnish->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($extraGarnish->modified) ?></td>
        </tr>
    </table>
</div>
