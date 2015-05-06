<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <?= $this->Html->css('../components/bootstrap/dist/css/bootstrap.min') ?>
    <?= $this->Html->css('../components/remodal/dist/jquery.remodal') ?>
    <?= $this->Html->css('../components/Buttons/css/buttons.min') ?>

    <?= $this->Html->css('style') ?>

    <?= $this->Html->script('../components/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('../components/bootstrap/dist/js/bootstrap.min') ?>

    <?= $this->Html->script('../components/Buttons/js/buttons') ?>

    <?= $this->Html->script('../components/remodal/dist/jquery.remodal.min') ?>

    <?= $this->Html->script('Site/common') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <div class="remodal" data-remodal-id="modal-share">
        <br>
        <input type="text" class="form-control" value="http://you.tube/conecrew">
        <br>
        <span class="button-wrap">
            <button class="button button-circle button-primary">
                <span class="fa fa-facebook" style="font-family: fontawesome"></span>
            </button>
        </span>
        <span class="button-wrap">
            <button class="button button-circle button-primary">
                <span class="fa fa-twitter" style="font-family: fontawesome"></span>
            </button>
        </span>
        <span class="button-wrap">
            <button class="button button-circle button-primary">
                <span class="fa fa-google-plus" style="font-family: fontawesome"></span>
            </button>
        </span>
    </div>

    <div class="remodal" data-remodal-id="modal-playlists">
        <h3 class="title">Playlist - <small>Churrasco</small></h3>
        <table class="table table-condensed table-bordered">
            <tbody>
                <?php foreach (['Churrasco', 'Ouvir no carro'] as $key => $value): ?>
                    <tr>
                        <td>
                            <?= $value ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>
</html>
