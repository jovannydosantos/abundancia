<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deliveries'), ['controller' => 'Deliveries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Delivery'), ['controller' => 'Deliveries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directions'), ['controller' => 'Directions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direction'), ['controller' => 'Directions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Package Orders'), ['controller' => 'PackageOrders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Package Order'), ['controller' => 'PackageOrders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('role_id', ['options' => $roles]);
            echo $this->Form->control('status');
            echo $this->Form->control('name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('telephone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
