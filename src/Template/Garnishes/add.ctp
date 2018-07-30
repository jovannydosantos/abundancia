<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Garnish $garnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Garnishes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['controller' => 'ExtraGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['controller' => 'ExtraGarnishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="garnishes form large-9 medium-8 columns content">
    <?= $this->Form->create($garnish) ?>
    <fieldset>
        <legend><?= __('Add Garnish') ?></legend>
        <?php
            echo $this->Form->control('garnish');
            echo $this->Form->control('status');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
