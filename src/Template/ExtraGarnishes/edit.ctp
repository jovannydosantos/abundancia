<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExtraGarnish $extraGarnish
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $extraGarnish->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $extraGarnish->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Garnishes'), ['controller' => 'Garnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Garnish'), ['controller' => 'Garnishes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="extraGarnishes form large-9 medium-8 columns content">
    <?= $this->Form->create($extraGarnish) ?>
    <fieldset>
        <legend><?= __('Edit Extra Garnish') ?></legend>
        <?php
            echo $this->Form->control('garnish_id', ['options' => $garnishes]);
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
