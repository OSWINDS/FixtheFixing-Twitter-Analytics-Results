<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="OSWINDS">
    <meta name="keyword" content="Fixing, Sports, Analytics, Data, Twitter, YouTube, Corruption, Match">

    <title>TWEETFIX</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>FIX THE TWITTER</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                <div class="row">made by <a href="http://oswinds.csd.auth.gr" class="top-menu-oswinds" target="_blank">OSWINDS</a></div>
                <div class="row top-menu-social-media">
                  <a href="https://github.com/OSWINDS" target="_blank"><i class="fa fa-github pull-right"></i></a>
                  <a href="#" target="_blank"><i class="fa fa-linkedin pull-right"></i></a>
                  <a href="https://www.facebook.com/oswinds/" target="_blank"><i class="fa fa-facebook pull-right"></i></a>
                  <a href="https://twitter.com/oswinds_auth" target="_blank"><i class="fa fa-twitter pull-right"></i></a>
                </div>
              </ul>
            </div>
        </header>
      <!--header end-->

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

                  <li class="mt">
                      <a href="index.html">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bar-chart"></i>
                          <span>Cases</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="djokovic.html">N. Djokovic</a></li>
                          <li><a  href="donaghy.html">T. Donaghy</a></li>
                          <li><a  href="football.html">Southern Stars</a></li>
                          <li><a  href="cricket.html">Pakistani Cricket</a></li>
                          <li><a  href="taboga.html">D. Taboga</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                    <a class="active" href="lexicon.html">
                      <i class="fa fa-book"></i>
                      <span>Lexicon</span>
                    </a>
                  </li>

                  <li class="sub-menu">
                      <a href="about.html">
                          <i class="fa fa-desktop"></i>
                          <span>About</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Lexicon</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                    <div class="col-md-12 mt">
                      <div class="content-panel">
                            <table class="table table-hover">
                            <h4>Extended List of 78 Most Frequent Words regarding Match Fixing</h4>
                                <?php
                                    include "table_generator.php";
                                    generate_table('Results/lexicon.csv',',');
                                ?>
                            </table>
                        </div><!--/content-panel -->
                    </div><!-- /col-md-12 -->
          		</div>
          	</div>

		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              © 2016 <a href="http://oswinds.csd.auth.gr" target="_blank">OSWINDS</a>, Source Code can be found <a href="https://github.com/OSWINDS/FixtheFixing-Twitter-Analytics-Results" target="_blank">here</a>
              <a href="lexicon.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
