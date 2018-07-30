<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon', '/img/cake.icon.png',['type' => 'icon']) ?>
    <?= $this->Html->css(['bootstrap.min']) ?>
    <?= $this->Html->script(['jquery-3.1.1.min','bootstrap.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

</body>
</html>