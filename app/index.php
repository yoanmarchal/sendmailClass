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
    <link rel="stylesheet" href="styles/main.css">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        
        <form action="post_contact.php" method="POST" class="form">

          <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                  <label for="inputname">Votre Nom:</label>
                  <input class="form-control" type="text" name="name" id="inputname" value="" tabindex="1" />
                </div>
            </div>


            <div class="col-xs-6">
              <div class="form-group">
                <label for="inputemail">Votre email:</label>
                <input class="form-control" type="text" name="email" id="inputemail" value="" tabindex="2" />
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="inputmessage">Votre message:</label>
                <textarea class="form-control"  name="message" id="inputmessage" ></textarea>
              </div>
              <button type="submit" value="Submit" class="btn btn-primary" >envoyer</button>
            </div>

          </div>

          

          
        
          
        
          <div class="form-group">
            
          </div>
        </form>
      </div>
    </div>


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
        <script src="bower_components/bootstrap/js/affix.js"></script>
        <script src="bower_components/bootstrap/js/alert.js"></script>
        <script src="bower_components/bootstrap/js/dropdown.js"></script>
        <script src="bower_components/bootstrap/js/tooltip.js"></script>
        <script src="bower_components/bootstrap/js/modal.js"></script>
        <script src="bower_components/bootstrap/js/transition.js"></script>
        <script src="bower_components/bootstrap/js/button.js"></script>
        <script src="bower_components/bootstrap/js/popover.js"></script>
        <script src="bower_components/bootstrap/js/carousel.js"></script>
        <script src="bower_components/bootstrap/js/scrollspy.js"></script>
        <script src="bower_components/bootstrap/js/collapse.js"></script>
        <script src="bower_components/bootstrap/js/tab.js"></script>
        <!-- endbuild -->
</body>
</html>