<?php 

  include '_inc.php';

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
  </head>
  <body>
    <div class="container">



      <div class="jumbotron">

      <?php if (array_key_exists('errors', $_SESSION)): ?>
        <div class="alert alert-danger">
          <?= implode('<br>', $_SESSION['errors']); ?>
        </div>
      <?php endif; ?>

      <?php if (array_key_exists('success', $_SESSION)): ?>
        <div class="alert alert-success">
          Votre email nous as bien été envoyé
        </div>
      <?php endif; ?>

        
        <form action="post_contact.php" method="POST" class="form">
        <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
          <div class="row">
            <div class="col-xs-4">
              <?= $form->text('name', 'votre Nom'); ?>
            </div>
            <div class="col-xs-4">
              <?= $form->email('email', 'votre Email'); ?>
            </div>

            <div class="col-xs-4">
              <?= $form->select('service', 'Service', ['Contact', 'Dépannage', 'Heimerdinger']); ?>
            </div>

            <div class="col-xs-12">
              <?= $form->textarea('message', 'Votre message'); ?>

              <?= $form->text('check', ''); ?>
              <?= $form->submit('Envoyer'); ?>
            </div>
            
          </div>
        </form>

        <h2>debug :</h2>
        <?php var_dump($_SESSION); ?>
      </div>
    </div>

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);

?>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>


        <!-- build:js scripts/main.js -->
        <script src="bower_components/jquery/jquery.js"></script>
        <script src="scripts/main.js"></script>
        <script src="scripts/hello.js"></script>
        <!-- endbuild -->

        <!-- build:js scripts/vendor/bootstrap.js -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <!-- endbuild -->
</body>
</html>


