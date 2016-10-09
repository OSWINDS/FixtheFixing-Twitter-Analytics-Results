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
	  <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <link rel="stylesheet" href="http://cdn.anychart.com/css/latest/anychart-ui.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="http://cdn.anychart.com/js/latest/anychart.min.js" type="text/javascript"></script>
    <script src="http://cdn.anychart.com/js/latest/anymap.min.js" type="text/javascript"></script>
    <script src="http://cdn.anychart.com/geodata/1.2.0/custom/world_source/world_source.js"></script>

    <script src="assets/js/customJS.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >

      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>FIX THE TWITTER</b></a>
            <!--logo end-->
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
                      <a class="active" href="javascript:;" >
                          <i class="fa fa-bar-chart"></i>
                          <span>Cases</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="general.php">General</a></li>
                          <li><a  href="djokovic.html">N. Djokovic</a></li>
                          <li><a  href="donaghy.html">T. Donaghy</a></li>
                          <li><a  href="football.html">Southern Stars</a></li>
                          <li><a  href="cricket.html">Pakistani Cricket</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                    <a href="lexicon.html">
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
              <h2><i class="fa fa-angle-right"></i> General Case</h2>

              <!-- FIRST ROW: INTRO / LINE CHART / TAG CLOUD / INFOBOX -->
              <div class="row mt">
                  <div class="col-lg-9 col-md-9 col-sm-9">
                    <!-- INTRO TO THE CASE -->
                    <div class="row">
                      <p class="intro intro-cases">
                        This first case is used to examine the Social Media presence of the "Sports Fixing" topic, understand the crowd that is engaged with the topic
                        and determine some basic set of words and hashtags that are frequently used in such posts. The query for this case was consisted of plain words,
                        without studying any specific event.
                      </p>
                      <p class="query-words">
                          Query Words:
        							    <span class="label label-info">match</span>
        							    <span class="label label-info">fixing</span>
        							    <span class="label label-info">fix</span>
        							    <span class="label label-info">betting</span>
        							    <span class="label label-info">bet</span>
        							    <span class="label label-info">corruption</span>
        							    <span class="label label-info">scam</span>
        							    <span class="label label-info">gambling</span>
        							    <span class="label label-info">fraud</span>
        							    <span class="label label-info">illegal</span>
        							    <span class="label label-info">suspicious</span>
        							    <span class="label label-info">manipulation</span>
        							    <span class="label label-info">integrity</span>
                      </p>
                    </div>
                    <!-- TWEETS PER DAY PLOT -->
                    <div class="row mt case-charts">
                        <h4><i class="fa fa-angle-right"></i> Tweets per Month <i class="fa fa-info-circle infopop-icon"></i> </h4>
                        <div class="infopop">
                            <p>Contains the count of tweets submitted every month during the researching period.</p>
                        </div>

                      <div class="panel-body">
                          <div id="hero-graph" class="graph"></div>
                      </div>
                    </div>
                    <!-- SENTIMENT PER MONTH PLOT -->
                    <div class="row mt case-charts">
                      <h4><i class="fa fa-angle-right"></i> Sentiment per Month <i class="fa fa-info-circle infopop-icon"></i> </h4>
                      <div class="infopop">
                          <p>Contains information about the scores of six basic sentiments (Anger, Disgust, Fear, Joy, Sadness &amp; Surprise), on each month.</p>
                      </div>
                      <div class="panel-body">
                        <div id="sentiment-graph" class="graph"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3">
                      <!-- GENERAL INFO -->
                      <div class="content-panel case-right">
                        <h4><i class="fa fa-angle-right"></i> Infobox</h4>
                        <div class="panel-body ">
                          <div class="row panel-body-less-padding">
                              <div class="box0 box1">
                                  <span class="fa fa-twitter"></span>
                                  <h3>62.319</h3>
                                  <p>62.319 distinct tweets</p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="box0 box1">
                                  <span class="fa fa-youtube"></span>
                                  <h3>1228</h3>
                                  <p>1228 distinct Youtube comments</p>
                              </div>
                          </div>
                          <div class="row">
                               <div class="box0 box1">
                                    <span class="fa fa-user"></span>
                                    <h3>34.227</h3>
                                    <p>34.227 distinct users</p>
                                </div>
                          </div>
                          <div class="row">
                                <div class="box0 box1">
                                    <span class="fa fa-list"></span>
                                    <h3>53.526</h3>
                                    <p>53.526 distinct words</p>
                                </div>
                          </div>
                          <div class="row">
                              <div class="box0 box1">
                                  <span class="fa fa-calendar-o"></span>
                                  <h4>01/01/2016 to 30/06/2016</h4>
                                  <p>The time frame of the data is 6 months</p>
                              </div>
                          </div>
                          <!-- SENTIMENT ANALYSIS SCORES -->
                          <div class="row">
                              <div class="box0 box1 box-SA">
                                  <h3>Sentiment: <span style="font-size: 32px; color: #ffd777;">Disgust</span></h3>
                                  <p>The overall score of our sentiment analysis indicated the main sentiment of the users was Disgust.</p>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>

              <!-- SECOND ROW: TAG CLOUD - WORDS -->
              <div class="row mt case-charts">
                  <h4><i class="fa fa-angle-right"></i> Most Frequent Words <i class="fa fa-info-circle infopop-icon"></i> </h4>
                  <div class="col-md-3">
                    <table class="table table-hover mt">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>Word</th>
                            <th>Frequency</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>match</td>
                            <td>52474</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>bet</td>
                            <td>36311</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>fix</td>
                            <td>32004</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>tips</td>
                            <td>6046</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>goal</td>
                            <td>5302</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>twitter</td>
                            <td>4616</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>win</td>
                            <td>3762</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>free</td>
                            <td>3629</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>today</td>
                            <td>3351</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>odds</td>
                            <td>3164</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-9">
                      <div class="infopop">
                          <p>Contains the most frequent distinct words as extracted from the final data during the researching period.</p>
                      </div>
                      <div class="panel-body">
                        <div class="tag-cloud">
                          <script src="http://cdn.tagul.com/embed/cb2bnhzc0fwh"></script>
                        </div>
                      </div>
                  </div>
              </div>

              <!-- THIRD ROW: TAG CLOUDS - HASHTAGS & MENTIONS / BUBBLE CHART / LOCATION MAP -->
              <div class="row mt case-charts">
                <!-- TAG CLOUD - HASHTAGS -->
                <div class="col-md-9">
                  <h4><i class="fa fa-angle-right"></i> Most Frequent Hashtags <i class="fa fa-info-circle infopop-icon"></i> </h4>
                  <div class="infopop">
                      <p>Contains the most frequent distinct hashtags as extracted from the final data. The table shows the top10 of the hashtags along with their frequencies.</p>
                  </div>
                  <div class="tag-cloud">
                    <script src="http://cdn.tagul.com/embed/eulahskx892d"></script>
                  </div>
                </div>
                <!-- TABLE OF MOST FREQUENT HASHTAGS -->
                <div class="col-md-3">
                    <?php
                        include "table_generator.php";
                        generate_table('Results/test.csv',',');
                    ?>
                </div>
                <!-- <div class="col-md-3">
                  <table class="table table-hover mt">
                    <thead>
                      <tr>
                          <th>#</th>
                          <th>Word</th>
                          <th>Frequency</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td>1</td>
                          <td>#betting</td>
                          <td>3501</td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>#prediction</td>
                          <td>1744</td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>#tip</td>
                          <td>1586</td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>#1X2</td>
                          <td>1335</td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>#livescore</td>
                          <td>899</td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>#inplay_betting</td>
                          <td>897</td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>#inplay</td>
                          <td>757</td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>#FSTINPLAY</td>
                          <td>554</td>
                      </tr>
                      <tr>
                          <td>9</td>
                          <td>#Euro2016</td>
                          <td>554</td>
                      </tr>
                      <tr>
                          <td>10</td>
                          <td>#soccerbets</td>
                          <td>411</td>
                      </tr>
                    </tbody>
                  </table>
                </div> -->
              </div>
              <div class="row mt">
                <div class="case-charts">
                  <h4><i class="fa fa-angle-right"></i> Most Frequent Users &amp; Mentions / Location Map <i class="fa fa-info-circle infopop-icon"></i> </h4>
                  <div class="infopop">
                      <p>The bubble chart contains the most frequent users that tweeted about the event, the tagcloud contains the most frequent mentions included in the tweets and the choropleth map shows the locations that interacted with the tweet.</p>
                  </div>
                  <!-- BUBBLE CHART - MENTIONS -->
                  <div class="col-lg-4">
                    <img src="images/users-freq.jpg"/>
                  </div>
                  <!-- TAG CLOUD - USERS -->
                  <div class="col-lg-8 tag-cloud">
                    <script src="http://cdn.tagul.com/embed/8beavw8xhfjk"></script>
                  </div>
                </div>
              </div>
              <!-- FREQUENT LOCATIONS MAP -->
              <div class="row mt case-charts">
                <div class="map" id="map"></div>
                <script>
                  anychart.onDocumentReady(
                    function() {
                      map = anychart.map();

                      // insert data
                      var dataSet = anychart.data.set([
                        {'id': 'IN', 'value': 64},
                        {'id': 'AU', 'value': 55},
                        {'id': 'FR', 'value': 54},
                        {'id': 'PH', 'value': 53},
                        {'id': 'GB', 'value': 49},
                        {'id': 'NG', 'value': 48},
                        {'id': 'US', 'value': 48},
                        {'id': 'CA', 'value': 46},
                        {'id': 'DE', 'value': 36},
                        {'id': 'IE', 'value': 36},
                        {'id': 'MY', 'value': 35},
                        {'id': 'ES', 'value': 34},
                        {'id': 'JP', 'value': 33},
                        {'id': 'ZA', 'value': 30},
                        {'id': 'NZ', 'value': 25},
                        {'id': 'PK', 'value': 25},
                        {'id': 'SA', 'value': 23},
                        {'id': 'IT', 'value': 21},
                        {'id': 'BE', 'value': 21},
                        {'id': 'GH', 'value': 20},
                        {'id': 'CN', 'value': 18},
                        {'id': 'AE', 'value': 17},
                        {'id': 'ID', 'value': 15},
                        {'id': 'CM', 'value': 15},
                        {'id': 'TR', 'value': 14},
                        {'id': 'AR', 'value': 13},
                        {'id': 'FI', 'value': 12},
                        {'id': 'PT', 'value': 12},
                        {'id': 'KE', 'value': 12},
                        {'id': 'QA', 'value': 9},
                        {'id': 'PL', 'value': 9},
                        {'id': 'BW', 'value': 9},
                        {'id': 'SE', 'value': 8},
                        {'id': 'BR', 'value': 7},
                        {'id': 'PA', 'value': 7},
                        {'id': 'KR', 'value': 7},
                        {'id': 'NL', 'value': 6},
                        {'id': 'HK', 'value': 6},
                        {'id': 'CH', 'value': 6},
                        {'id': 'ZM', 'value': 5},
                        {'id': 'UG', 'value': 5},
                        {'id': 'BD', 'value': 5},
                        {'id': 'MX', 'value': 5},
                        {'id': 'ZW', 'value': 5},
                        {'id': 'RU', 'value': 4},
                        {'id': 'CL', 'value': 4},
                        {'id': 'TZ', 'value': 4},
                        {'id': 'DK', 'value': 3},
                        {'id': 'GR', 'value': 3},
                        {'id': 'TH', 'value': 1},
                        {'id': 'SK', 'value': 1},
                        {'id': 'CO', 'value': 1}
                      ]);

                      // create choropleth series
                      series = map.choropleth(dataSet);

                      // set geoIdField to 'id', this field contains in geo data meta properties
                      series.geoIdField('id');

                      // set map color settings
                      series.colorScale(anychart.scales.linearColor('#effbfd', '#68dff0'));
                      series.hoverFill('#ed5565');

                      // disable countries' labels
                      series.labels(false);

                      // set map title
                      map.title().enabled(true).text('Most Frequent Locations talking about Match Fixing\n');

                      // set geo data, you can find this map in our geo maps collection
                      // http://cdn.anychart.com/#maps-collection
                      map.geoData(anychart.maps['world_source']);

                      //set map container id (div)
                      map.container('map');

                      //initiate map drawing
                      map.draw();

                      // anychart.installStyles('body{font-family:Verdana,\'Helvetica Neue\',Arial,Helvetica,Geneva,sans-serif;background-color:red;}');
                    });
                </script>
              </div>
          </section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - <a href="http://oswinds.csd.auth.gr" target="_blank">OSWINDS</a>
              <a href="blank.html#" class="go-top">
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
	  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	  <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/morris/morris-plain.js"></script>

  </body>
</html>
