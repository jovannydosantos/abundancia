<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackageOrder $packageOrder
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $packageOrder->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $packageOrder->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Package Orders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Packages'), ['controller' => 'Packages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package'), ['controller' => 'Packages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="packageOrders form large-9 medium-8 columns content">
    <?= $this->Form->create($packageOrder) ?>
    <fieldset>
        <legend><?= __('Edit Package Order') ?></legend>
        <?php
            echo $this->Form->control('package_id', ['options' => $packages]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('delivery');
            echo $this->Form->control('price_delivery');
            echo $this->Form->control('total_packages');
            echo $this->Form->control('status');
            echo $this->Form->control('direction_id', ['options' => $directions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
