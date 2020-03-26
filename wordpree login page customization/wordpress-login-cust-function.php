
<?php
// ============ change WP Logo

function custom_login_logo() {
  ?>
  <style type="text/css">
  body.login div#login h1 a {
  background-image: url('url');   padding-bottom: 30px;
  }

  /*.login{
    background-image:url('<?php echo bloginfo('template_url'); ?>/images/login-img.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color:white;
  }

  .login a{
    color:white !important;
  }

  .login form{
    background: #000000a6 !important;
    border: none !important;
  box-shadow: 0px 0px 11px black !important;
  color:white !important;
  }

  .wp-core-ui p .button{
      background: #aa1f43;
    border: none;
    border-radius: 0; 
  }

  .login #login_error, .login .message, .login .success{
    background-color: #2b2b2b !important; 
  }*/

  </style>
  <?php
  } add_action( 'login_enqueue_scripts', 'custom_login_logo' );

 