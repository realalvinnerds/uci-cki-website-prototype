<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>UC Irvine Circle K - Forgot Password</title>
  <!-- CORE CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="http://www.ucicirclek.com/public/css/style_website.css" rel="stylesheet">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}
</style>

</head>

<body class="yellow">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?=base_url('assets/img/cnhcki.png');?>" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">UC Irvine Circle K</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn waves-effect waves-light col s12">Recover my Password</button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="<?=base_url('register');?>">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="<?=base_url('login');?>">Login</a></p>
          </div>
        </div>

      </form>
    </div>
  </div>


  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>



   <footer class="page-footer">
     <strong><h5 style="margin-bottom: 0; color: #231F20">Connect With UCI CKI</h5></strong>
     <a href="#contacts"></a>

     <a href="http://www.ucicirclek.com/facebook/" class="fa fa-facebook"></a>
     <a href="http://www.ucicirclek.com/instagram/" class="fa fa-instagram"></a>
     <a href="http://www.ucicirclek.com/tumblr/" class="fa fa-tumblr"></a>
     <a href="http://www.ucicirclek.com/flickr/" class="fa fa-flickr"></a>
     <a href="http://www.ucicirclek.com/snapchat/" class="fa fa-snapchat-ghost"></a>
     <a href="http://www.ucicirclek.com/youtube/" class="fa fa-youtube"></a>
     </center>
  </footer>
</body>

</html>
