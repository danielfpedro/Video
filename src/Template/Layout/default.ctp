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
    <?= $this->Html->css('../components/Buttons/css/buttons.min') ?>

    <?= $this->Html->css('style') ?>

    <?= $this->Html->script('../components/jquery/dist/jquery.min') ?>
    <?= $this->Html->script('../components/bootstrap/dist/js/bootstrap.min') ?>

    <?= $this->Html->script('../components/Buttons/js/buttons') ?>

    <?= $this->Html->script('Site/common') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<div
    class="modal fade"
    id="modal-share">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Compartilhar</h4>
            </div>
            <div class="modal-body text-center" style="background-color: #FCFCFC;">
                <input type="text" class="form-control input-lg" value="http://you.tube/conecrew">
                <div class="text-center" style="padding: 30px 0 10px 0;">
                <span class="button-wrap">
                    <button class="button button-circle button-primary">
                        <span class="fa fa-facebook"></span>
                    </button>
                </span>
                <span class="button-wrap">
                    <button class="button button-circle button-primary">
                        <span class="fa fa-twitter"></span>
                    </button>
                </span>
                <span class="button-wrap">
                    <button class="button button-circle button-primary">
                        <span class="fa fa-google-plus"></span>
                    </button>
                </span>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div
    class="modal fade"
    id="modal-playlists"
    data-base-url="<?= $this->Url->build(['controller' => 'Site', 'action' => 'playlistsModal'])?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Playlists</h4>
      </div>
      <div class="modal-body">
        <div class="text-center" id="cont-loader" style="padding: 25px 0;">
            <span class="fa fa-spinner fa-spin fa-2x"></span>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?= $this->element('Site/footer') ?>

</body>
</html>
