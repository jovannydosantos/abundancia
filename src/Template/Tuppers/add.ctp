<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tupper $tupper
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tuppers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tuppers form large-9 medium-8 columns content">
    <?= $this->Form->create($tupper) ?>
    <fieldset>
        <legend><?= __('Add Tupper') ?></legend>
        <?php
            echo $this->Form->control('food_order_id', ['options' => $foodOrders]);
            echo $this->Form->control('delivery_status');
            echo $this->Form->control('return_status');
            echo $this->Form->control('tupper_charge');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
