<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direction $direction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $direction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $direction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Directions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="directions form large-9 medium-8 columns content">
    <?= $this->Form->create($direction) ?>
    <fieldset>
        <legend><?= __('Edit Direction') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('state');
            echo $this->Form->control('city');
            echo $this->Form->control('subdivision');
            echo $this->Form->control('zip');
            echo $this->Form->control('street');
            echo $this->Form->control('deparment');
            echo $this->Form->control('apartment_floor');
            echo $this->Form->control('door');
            echo $this->Form->control('arrival_option');
            echo $this->Form->control('latitude');
            echo $this->Form->control('longitude');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
