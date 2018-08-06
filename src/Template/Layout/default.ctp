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
    <?= $this->Html->script(['jquery-3.1.1.min','bootstrap.min','abundancia']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>

<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>

<script>
    $( "#clonarGuarnicion" ).click(function() {
        $( "#clonOriginal" ).clone().appendTo( "#contenedorGuarniciones" );
        enumerar();
    });

    function enumerar(){
        var cantidad = $('.enumerar').length-1;
        $(".enumerar").each(function(i) {
            $(this).find('select').attr('name', 'garnishes_id['+i+']' );

            if(i==cantidad){
                $(this).prepend('<button type="button" class="close eliminar" aria-label="Close"><span class="glyphicon glyphicon-remove-circle"></span></button>')
            }
        });
    }

    $("body").on("click", ".eliminar", function(e) {
        $(this).parent('div').remove();
    });

</script>
</body>
</html>