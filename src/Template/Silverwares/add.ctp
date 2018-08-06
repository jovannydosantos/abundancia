<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Silverware $silverware
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Silverwares'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="silverwares form large-9 medium-8 columns content">
    <?= $this->Form->create($silverware) ?>
    <fieldset>
        <legend><?= __('Add Silverware') ?></legend>
        <?php
            echo $this->Form->control('food_order_id', ['options' => $foodOrders]);
            echo $this->Form->control('silverware_type',['options' => ['0' => 'Plastico', '1' => 'Metal']]);
            echo $this->Form->control('total_silverware');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
