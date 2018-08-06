<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Garnish[]|\Cake\Collection\CollectionInterface $garnishes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Garnish'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Extra Garnishes'), ['controller' => 'ExtraGarnishes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Extra Garnish'), ['controller' => 'ExtraGarnishes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="garnishes index large-9 medium-8 columns content">
    <h3><?= __('Garnishes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('garnish') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($garnishes as $garnish): ?>
            <tr>
                <td><?= $this->Number->format($garnish->id) ?></td>
                <td><?= h($garnish->garnish) ?></td>
                <td><?= h($garnish->size) ?></td>
                <td><?= $this->Number->format($garnish->status) ?></td>
                <td><?= $this->Number->format($garnish->price) ?></td>
                <td><?= h($garnish->created) ?></td>
                <td><?= h($garnish->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $garnish->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $garnish->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $garnish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $garnish->id)]) ?>
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
