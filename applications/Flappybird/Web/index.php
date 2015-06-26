<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>flappybird-multiplayer</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/other_images/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- vegas bg -->
    <link href="js/vegas/jquery.vegas.min.css" rel="stylesheet">
    <!-- owl carousel css -->
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <!-- intro animations -->
    <link href="js/wow/animate.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- lightbox -->
    <link href="js/lightbox/css/lightbox.css" rel="stylesheet">

    <!-- styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
	
	<link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-default-background-img="images/other_images/bg5.jpg" data-overlay="true" data-overlay-opacity="0.25"  ondragstart='return false' onselectstart ='return false'>

    <!-- Outer Container -->
    <div id="outer-container">

      <!-- Left Sidebar -->
      <section id="left-sidebar">
        
        <div class="logo">
          <h3>FlappyBird</h3>
        </div><!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
          <li id="menu-item-text" class="menu-item scroll"><a>3120101993</a></li>
          <li id="menu-item-text" class="menu-item scroll"><a>毛宇晗</a></li>
          <li id="menu-item-text" class="menu-item scroll"><a>2015.6.28</a></li>
        </ul><!-- #main-menu -->

      </section><!-- #left-sidebar -->
      <!-- end: Left Sidebar -->

      <section id="main-content" class="clearfix">
        
        <article id="intro" class="section-wrapper clearfix" data-custom-background-img="images/other_images/bg5.jpg">
          <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
            <div class="col-sm-10 col-md-9 pull-left">
                <section class="feature-text">
                  <canvas id="canvas" width="800" height="512" style="margin: 3px auto 0px auto;"></canvas>
                  <p>任意键开始进行游戏，点击鼠标操控小鸟飞行且避开绿色的管道。每经过一段距离获得1分，如果小鸟碰到了障碍物，游戏就会结束。你可以看到当前服务器上别的玩家的最高分以及正在游戏的玩家的小鸟。</p>
                  <input type="hidden" id="nickname" >
               </section>

            </div><!-- .col-sm-10 -->
          </div><!-- .content-wrapper -->
        </article><!-- .section-wrapper -->

      </section><!-- #main-content -->

      <!-- Footer -->
      <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
          <li><a href="#" target="_blank" title="Facebook"><img src="images/theme_images/social_icons/facebook.png" alt="Facebook"></a></li>
          <li><a href="#" target="_blank" title="Twitter"><img src="images/theme_images/social_icons/twitter.png" alt="Twitter"></a></li>
          <li><a href="#" target="_blank" title="Google+"><img src="images/theme_images/social_icons/googleplus.png" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; 2015 Crab</div>
      </section>
      <!-- end: Footer -->      

    </div><!-- #outer-container -->
    <!-- end: Outer Container -->

    <!-- Modal -->
    <!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
    <div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <div class="modal-body clearfix">
          </div><!-- .modal-body -->
        </div><!-- .modal-content -->
      </div><!-- .modal-dialog -->
    </div><!-- .modal -->    

    <!-- Javascripts
    ================================================== -->

    <!-- Jquery and Bootstrap JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Easing - for transitions and effects -->
    <script src="js/jquery.easing.1.3.js"></script>

    <!-- background image strech script -->
    <script src="js/vegas/jquery.vegas.min.js"></script>

    <!-- detect mobile browsers -->
    <script src="js/detectmobilebrowser.js"></script>

    <!-- detect scrolling -->
    <script src="js/jquery.scrollstop.min.js"></script>

    <!-- owl carousel js -->
    <script src="js/owl-carousel/owl.carousel.min.js"></script>

    <!-- lightbox js -->
    <script src="js/lightbox/js/lightbox.min.js"></script>

    <!-- intro animations -->
    <script src="js/wow/wow.min.js"></script>

    <!-- responsive videos -->
    <script src="js/jquery.fitvids.js"></script>

    <!-- Custom functions for this theme -->
    <script src="js/functions.js"></script>
    <script src="js/initialise-functions.js"></script>

    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript">var cpro_id = "u1576789";</script>
	
	<!-- IE9 form fields placeholder fix -->
    <!--[if lt IE 9]>
    <script>contact_form_IE9_placeholder_fix();</script>
    <![endif]-->  

  </body>
</html>