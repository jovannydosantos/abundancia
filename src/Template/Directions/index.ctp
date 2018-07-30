<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direction[]|\Cake\Collection\CollectionInterface $directions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Direction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="directions index large-9 medium-8 columns content">
    <h3><?= __('Directions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subdivision') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deparment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apartment_floor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('door') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arrival_option') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($directions as $direction): ?>
            <tr>
                <td><?= $this->Number->format($direction->id) ?></td>
                <td><?= $direction->has('user') ? $this->Html->link($direction->user->email, ['controller' => 'Users', 'action' => 'view', $direction->user->id]) : '' ?></td>
                <td><?= h($direction->state) ?></td>
                <td><?= h($direction->city) ?></td>
                <td><?= h($direction->subdivision) ?></td>
                <td><?= $this->Number->format($direction->zip) ?></td>
                <td><?= h($direction->street) ?></td>
                <td><?= h($direction->deparment) ?></td>
                <td><?= $this->Number->format($direction->apartment_floor) ?></td>
                <td><?= h($direction->door) ?></td>
                <td><?= $this->Number->format($direction->arrival_option) ?></td>
                <td><?= $this->Number->format($direction->latitude) ?></td>
                <td><?= $this->Number->format($direction->longitude) ?></td>
                <td><?= h($direction->created) ?></td>
                <td><?= h($direction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $direction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $direction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $direction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direction->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
