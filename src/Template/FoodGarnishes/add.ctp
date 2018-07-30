<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FoodGarnish $foodGarnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Food Garnishes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['controller' => 'Foods', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Food'), ['controller' => 'Foods', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Garnishes'), ['controller' => 'Garnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garnish'), ['controller' => 'Garnishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foodGarnishes form large-9 medium-8 columns content">
    <?= $this->Form->create($foodGarnish) ?>
    <fieldset>
        <legend><?= __('Add Food Garnish') ?></legend>
        <?php
            echo $this->Form->control('food_id', ['options' => $foods]);
            echo $this->Form->control('garnishes_id', ['options' => $garnishes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
