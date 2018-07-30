<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DrinkOrder $drinkOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $drinkOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $drinkOrder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Drinks'), ['controller' => 'Drinks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drink'), ['controller' => 'Drinks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drinkOrders form large-9 medium-8 columns content">
    <?= $this->Form->create($drinkOrder) ?>
    <fieldset>
        <legend><?= __('Edit Drink Order') ?></legend>
        <?php
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('drink_id', ['options' => $drinks]);
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
