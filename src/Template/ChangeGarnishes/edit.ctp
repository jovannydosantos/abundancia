<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChangeGarnish $changeGarnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $changeGarnish->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $changeGarnish->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Change Garnishes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Food Orders'), ['controller' => 'FoodOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food Order'), ['controller' => 'FoodOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="changeGarnishes form large-9 medium-8 columns content">
    <?= $this->Form->create($changeGarnish) ?>
    <fieldset>
        <legend><?= __('Edit Change Garnish') ?></legend>
        <?php
            echo $this->Form->control('food_order_id', ['options' => $foodOrders]);
            echo $this->Form->control('actual_garnish_id');
            echo $this->Form->control('new_garnish_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
