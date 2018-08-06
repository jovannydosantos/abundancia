<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Drink $drink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $drink->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $drink->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Drinks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Drink Orders'), ['controller' => 'DrinkOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Drink Order'), ['controller' => 'DrinkOrders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drinks form large-9 medium-8 columns content">
    <?= $this->Form->create($drink) ?>
    <fieldset>
        <legend><?= __('Edit Drink') ?></legend>
        <?php
            echo $this->Form->control('drink');
            echo $this->Form->control('size');
            echo $this->Form->control('price');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
