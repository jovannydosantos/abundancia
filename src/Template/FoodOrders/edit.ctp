<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodOrder $foodOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $foodOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $foodOrder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Change Garnishes'), ['controller' => 'ChangeGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Change Garnish'), ['controller' => 'ChangeGarnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Silverwares'), ['controller' => 'Silverwares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Silverware'), ['controller' => 'Silverwares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tuppers'), ['controller' => 'Tuppers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tupper'), ['controller' => 'Tuppers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foodOrders form large-9 medium-8 columns content">
    <?= $this->Form->create($foodOrder) ?>
    <fieldset>
        <legend><?= __('Edit Food Order') ?></legend>
        <?php
            echo $this->Form->control('food_id', ['options' => $foods]);
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('silverware_id');
            echo $this->Form->control('special_requirements');
            echo $this->Form->control('price_special_requirements');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
