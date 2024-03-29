<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

  <!-- Always force latest IE rendering engine or request Chrome Frame -->
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800">

  <!-- Use title if it's in the page YAML frontmatter -->
  <title>Core Admin Theme</title>

  <link href="{{ asset('assets/css/application.css') }}" media="screen" rel="stylesheet" type="text/css" />

  <script src="{{ asset('assets/js/application.js') }}" type="text/javascript"></script>
</head>



<body>
<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Core Admin</a>

    
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-primary">
          <span class="sr-only">Toggle Side Navigation</span>
          <i class="icon-th-list"></i>
        </button>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-top">
          <span class="sr-only">Toggle Top Navigation</span>
          <i class="icon-align-justify"></i>
        </button>
    
  </div>

  
      

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-collapse-top">
        <div class="navbar-right">

          <ul class="nav navbar-nav navbar-left">
            <li class="cdrop active"><a href="#">Link</a></li>

            <li class="cdrop"><a href="#">Link</a></li>

            <li class="dropdown cdrop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>

          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="search-query animated" placeholder="Search">
              <i class="icon-search"></i>
            </div>
          </form>

          <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle dropdown-avatar" data-toggle="dropdown">
              <span>
                <img class="menu-avatar" src="../../images/avatars/avatar1.jpg" /> <span>John Smith <i class="icon-caret-down"></i></span>
                <span class="badge badge-dark-red">5</span>
              </span>
              </a>
              <ul class="dropdown-menu">

                <!-- the first element is the one with the big avatar, add a with-image class to it -->

                <li class="with-image">
                  <div class="avatar">
                    <img src="../../images/avatars/avatar1.jpg" />
                  </div>
                  <span>John Smith</span>
                </li>

                <li class="divider"></li>

                <li><a href="#"><i class="icon-user"></i> <span>Profile</span></a></li>
                <li><a href="#"><i class="icon-cog"></i> <span>Settings</span></a></li>
                <li><a href="#"><i class="icon-envelope"></i> <span>Messages</span> <span class="label label-dark-red pull-right">5</span></a></li>
                <li><a href="#"><i class="icon-off"></i> <span>Logout</span></a></li>
              </ul>
            </li>
          </ul>
        </div>




      </div><!-- /.navbar-collapse -->

  
</nav>
<div class="sidebar-background">
  <div class="primary-sidebar-background"></div>
</div>

<div class="primary-sidebar">

  <!-- Main nav -->
  <ul class="nav navbar-collapse collapse navbar-collapse-primary">
    
    

        <li class="active">
          <span class="glow"></span>
          <a href="dashboard.html">
              <i class="icon-dashboard icon-2x"></i>
              <span>Dashboard</span>
          </a>
        </li>

    


    

        <li class="dark-nav ">

          <span class="glow"></span>

          

          <a class="accordion-toggle collapsed " data-toggle="collapse" href="#yJ6h3Npe7C">
              <i class="icon-beaker icon-2x"></i>
                    <span>
                      UI Lab
                      <i class="icon-caret-down"></i>
                    </span>

          </a>

          <ul id="yJ6h3Npe7C" class="collapse ">
            
                <li class="">
                  <a href="../ui_lab/buttons.html">
                      <i class="icon-hand-up"></i> Buttons
                  </a>
                </li>
            
                <li class="">
                  <a href="../ui_lab/general.html">
                      <i class="icon-beaker"></i> General elements
                  </a>
                </li>
            
                <li class="">
                  <a href="../ui_lab/icons.html">
                      <i class="icon-info-sign"></i> Icons
                  </a>
                </li>
            
                <li class="">
                  <a href="../ui_lab/grid.html">
                      <i class="icon-th-large"></i> Grid
                  </a>
                </li>
            
                <li class="">
                  <a href="../ui_lab/tables.html">
                      <i class="icon-table"></i> Tables
                  </a>
                </li>
            
                <li class="">
                  <a href="../ui_lab/widgets.html">
                      <i class="icon-plus-sign-alt"></i> Widgets
                  </a>
                </li>
            
          </ul>

        </li>

    


    

        <li class="">
          <span class="glow"></span>
          <a href="../forms/forms.html">
              <i class="icon-edit icon-2x"></i>
              <span>Forms</span>
          </a>
        </li>

    


    

        <li class="">
          <span class="glow"></span>
          <a href="../charts/charts.html">
              <i class="icon-bar-chart icon-2x"></i>
              <span>Charts</span>
          </a>
        </li>

    


    

        <li class="dark-nav ">

          <span class="glow"></span>

          

          <a class="accordion-toggle collapsed " data-toggle="collapse" href="#WLGsdJPav9">
              <i class="icon-link icon-2x"></i>
                    <span>
                      Others
                      <i class="icon-caret-down"></i>
                    </span>

          </a>

          <ul id="WLGsdJPav9" class="collapse ">
            
                <li class="">
                  <a href="../other/wizard.html">
                      <i class="icon-magic"></i> Wizard
                  </a>
                </li>
            
                <li class="">
                  <a href="../other/login.html">
                      <i class="icon-user"></i> Login Page
                  </a>
                </li>
            
                <li class="">
                  <a href="../other/sign_up.html">
                      <i class="icon-user"></i> Sign Up Page
                  </a>
                </li>
            
                <li class="">
                  <a href="../other/full_calendar.html">
                      <i class="icon-calendar"></i> Full Calendar
                  </a>
                </li>
            
                <li class="">
                  <a href="../other/error404.html">
                      <i class="icon-ban-circle"></i> Error 404 page
                  </a>
                </li>
            
          </ul>

        </li>

    


  </ul>

  <div class="hidden-sm hidden-xs">
    <div class="text-center" style="margin-top: 60px">
      <div class="easy-pie-chart-percent" style="display: inline-block" data-percent="89"><span>89%</span></div>
      <div style="padding-top: 20px"><b>CPU Usage</b></div>
    </div>

    <hr class="divider" style="margin-top: 60px">

    <div class="sparkline-box side">

      <div class="sparkline-row">
        <h4 class="gray"><span>Orders</span> 847</h4>
        <div class="sparkline big" data-color="gray"><!--16,7,23,13,12,11,15,4,19,18,4,24--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="dark-green"><span>Income</span> $43.330</h4>
        <div class="sparkline big" data-color="darkGreen"><!--6,3,24,25,27,29,14,26,20,8,12,20--></div>
      </div>

      <hr class="divider">
      <div class="sparkline-row">
        <h4 class="blue"><span>Reviews</span> 223</h4>
        <div class="sparkline big" data-color="blue"><!--11,19,20,20,5,18,11,6,16,20,26,11--></div>
      </div>

      <hr class="divider">
    </div>
  </div>


</div>
<div class="main-content">
  <div class="container">
    <div class="row">

      <div class="area-top clearfix">
        <div class="pull-left header">
          <h3 class="title">
            <i class="icon-dashboard"></i>
            Dashboard
          </h3>
          <h5>
            <span>
              A subtitle can go here
            </span>
          </h5>
        </div>

        <ul class="list-inline pull-right sparkline-box">

          <li class="sparkline-row">
            <h4 class="blue"><span>Orders</span> 847</h4>
            <div class="sparkline big" data-color="blue"><!--25,11,5,28,25,19,27,6,4,23,20,6--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="green"><span>Reviews</span> 223</h4>
            <div class="sparkline big" data-color="green"><!--28,26,13,18,8,6,24,19,3,6,19,6--></div>
          </li>

          <li class="sparkline-row">
            <h4 class="red"><span>New visits</span> 7930</h4>
            <div class="sparkline big"><!--16,23,28,8,12,9,25,11,16,16,17,13--></div>
          </li>

        </ul>
      </div>
    </div>
  </div>

  <div class="container padded">
    <div class="row">

      <!-- Breadcrumb line -->

      <div id="breadcrumbs">
        <div class="breadcrumb-button blue">
          <span class="breadcrumb-label"><i class="icon-home"></i> Home</span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>

        

        <div class="breadcrumb-button">
          <span class="breadcrumb-label">
            <i class="icon-dashboard"></i> Dashboard
          </span>
          <span class="breadcrumb-arrow"><span></span></span>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

  <div class="col-md-3">
    <!-- find me in partials/action_nav_normal -->

<!--big normal buttons-->
<div class="action-nav-normal">

  <div class="row action-nav-row">
    <div class="col-sm-6 action-nav-button">
      <a href="#" title="New Project">
        <i class="icon-file-alt"></i>
        <span>New Project</span>
      </a>
      <span class="triangle-button red"><i class="icon-plus"></i></span>
    </div>

    <div class="col-sm-6 action-nav-button">
      <a href="#" title="Messages">
        <i class="icon-comments-alt"></i>
        <span>Messages</span>
      </a>
      <span class="label label-black">14</span>
    </div>
  </div>

  <div class="row action-nav-row">
    <div class="col-sm-6 action-nav-button">
      <a href="#" title="Files">
        <i class="icon-folder-open-alt"></i>
        <span>Files</span>
      </a>
    </div>

    <div class="col-sm-6 action-nav-button">
      <a href="#" title="Users">
        <i class="icon-user"></i>
        <span>Users</span>
      </a>
      <span class="triangle-button green"><span class="inner">+3</span></span>
    </div>
  </div>

  <div class="row action-nav-row">
    <div class="col-sm-6 action-nav-button">
      <a href="#" title="Friends">
        <i class="icon-facebook-sign"></i>
        <span>Friends</span>
      </a>
    </div>

    <div class="col-sm-6 action-nav-button">
      <a href="#" title="Followers">
        <i class="icon-twitter"></i>
        <span>Followers</span>
      </a>
      <span class="triangle-button blue"><span class="inner">+8</span></span>
    </div>
  </div>

</div>
  </div>

  <div class="col-md-9">
    <!-- find me in partials/big_chart -->

<div class="box">
  <div class="box-header">
    <div class="title">Charts</div>
    <ul class="box-toolbar">
      <li class="toolbar-link">
        <a href="#" data-toggle="dropdown"><i class="icon-cog"></i></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-plus-sign"></i> Add</a></li>
          <li><a href="#"><i class="icon-remove-sign"></i> Remove</a></li>
          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="box-content padded">
    <div class="row">
      <div class="col-md-4 separate-sections" style="margin-top: 5px;">

        <div class="row">
          <div class="col-md-12">
            <div class="dashboard-stats">
              <ul class="list-inline">
                <li class="glyph"><i class="icon-bolt icon-2x"></i></li>
                <li class="count">973,119</li>
              </ul>

              <div class="progress">
                <div class="progress-bar progress-blue tip" title="80%" data-percent="80"></div>
              </div>

              <div class="stats-label">Total Visits</div>
            </div>
          </div>
        </div>

        <div class="row" style="margin-top:30px;">
          <div class="col-md-6">
            <div class="dashboard-stats small">
              <ul class="list-inline">
                <li class="glyph"><i class="icon-user"></i></li>
                <li class="count">8800</li>
              </ul>
              <div class="progress">
                <div class="progress-bar progress-blue tip" title="65%" data-percent="65"></div>
              </div>

              <div class="stats-label">New Visitors</div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="dashboard-stats small">
              <ul class="list-inline">
                <li class="glyph"><i class="icon-eye-open"></i></li>
                <li class="count">25668</li>
              </ul>
              <div class="progress">
                <div class="progress-bar progress-blue tip" title="80%" data-percent="80"></div>
              </div>
              <div class="stats-label">Page Views</div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="sine-chart" id="xchart-sine"></div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="box">
      <div class="box-header">
        <div class="title">Full calendar</div>
      </div>

      <div class="box-content">
        <div id="calendar"></div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="box">
      <div class="box-header">
        <span class="title">News with avatars (scrollable box)</span>
        <ul class="box-toolbar">
          <li><span class="label label-blue">178</span></li>
        </ul>
      </div>
      <div class="box-content scrollable" style="height: 552px; overflow-y: auto">
        <!-- find me in partials/news_with_icons -->

<div class="box-section news with-icons">
  <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
  <div class="news-time">
    <span>06</span> jan
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
    <div class="news-text">
      With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ...
    </div>
  </div>
</div>

<div class="box-section news with-icons">
  <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
  <div class="news-time">
    <span>11</span> feb
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
    <div class="news-text">
      Rails 4.0 is still unfinished, but it is shaping up to become a great release ...
    </div>
  </div>
</div>

<div class="box-section news with-icons">
  <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
  <div class="news-time">
    <span>04</span> mar
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">All about SCSS</a></div>
    <div class="news-text">
      Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ...
    </div>
  </div>
</div>


    <div class="box-section news with-icons">
      <div class="avatar cyan"><i class="icon-ok icon-2x"></i></div>
      <div class="news-time">
        <span>22</span> dec
      </div>
      <div class="news-content">
        <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
        <div class="news-text">
          With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ...
        </div>
      </div>
    </div>


        <!-- find me in partials/news_with_icons -->

<div class="box-section news with-icons">
  <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
  <div class="news-time">
    <span>06</span> jan
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
    <div class="news-text">
      With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ...
    </div>
  </div>
</div>

<div class="box-section news with-icons">
  <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
  <div class="news-time">
    <span>11</span> feb
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
    <div class="news-text">
      Rails 4.0 is still unfinished, but it is shaping up to become a great release ...
    </div>
  </div>
</div>

<div class="box-section news with-icons">
  <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
  <div class="news-time">
    <span>04</span> mar
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">All about SCSS</a></div>
    <div class="news-text">
      Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ...
    </div>
  </div>
</div>


    <div class="box-section news with-icons">
      <div class="avatar cyan"><i class="icon-ok icon-2x"></i></div>
      <div class="news-time">
        <span>22</span> dec
      </div>
      <div class="news-content">
        <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
        <div class="news-text">
          With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ...
        </div>
      </div>
    </div>


        <!-- find me in partials/news_with_icons -->

<div class="box-section news with-icons">
  <div class="avatar blue"><i class="icon-ok icon-2x"></i></div>
  <div class="news-time">
    <span>06</span> jan
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
    <div class="news-text">
      With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ...
    </div>
  </div>
</div>

<div class="box-section news with-icons">
  <div class="avatar green"><i class="icon-lightbulb icon-2x"></i></div>
  <div class="news-time">
    <span>11</span> feb
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">Ruby on Rails 4.0</a></div>
    <div class="news-text">
      Rails 4.0 is still unfinished, but it is shaping up to become a great release ...
    </div>
  </div>
</div>

<div class="box-section news with-icons">
  <div class="avatar purple"><i class="icon-mobile-phone icon-2x"></i></div>
  <div class="news-time">
    <span>04</span> mar
  </div>
  <div class="news-content">
    <div class="news-title"><a href="#">All about SCSS</a></div>
    <div class="news-text">
      Sass makes CSS fun again. Sass is an extension of CSS3, adding nested rules ...
    </div>
  </div>
</div>


    <div class="box-section news with-icons">
      <div class="avatar cyan"><i class="icon-ok icon-2x"></i></div>
      <div class="news-time">
        <span>22</span> dec
      </div>
      <div class="news-content">
        <div class="news-title"><a href="#">Twitter Bootstrap v3.0 is coming!</a></div>
        <div class="news-text">
          With 2.2.2 out the door, our attention has shifted almost entirely to the next major update to the project ...
        </div>
      </div>
    </div>


      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    
<ul class="chat-box timeline">

  <li class="arrow-box-left gray">
    <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar1.jpg" /></div>
    <div class="info">
      <span class="name">
        <span class="label label-green">COMMENT</span> <strong class="indent">Alex</strong> posted a comment on this task: <strong>Core Admin</strong>
      </span>
      <span class="time"><i class="icon-time"></i> 3 minutes ago</span>
    </div>
    <div class="content">
      <blockquote>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </blockquote>
      <div>
        <a href="#"><i class="icon-paper-clip"></i> <b>project_news.docx</b></a>
      </div>
    </div>
  </li>

  <li class="arrow-box-left gray">
    <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar2.jpg" /></div>
    <div class="info">
      <span class="name">
        <span class="label label-blue">TASK</span> <strong class="indent">Michael</strong> completed this task: <strong class="strikethrough">Core Admin</strong>
      </span>
      <span class="time"><i class="icon-time"></i> 6 minutes ago</span>
    </div>
  </li>

  <li class="arrow-box-left gray">
    <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar3.jpg" /></div>
    <div class="info">
      <span class="name">
        <span class="label label-purple">FILE</span> <strong class="indent">Alex</strong> added 3 new files in project: <strong>Core Admin</strong>
      </span>
      <span class="time"><i class="icon-time"></i> 12 minutes ago</span>
    </div>
    <div class="content">
      <ul class="thumbnails padded">
        
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/240x100" alt="">
              </a>
            </li>
        
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/240x100" alt="">
              </a>
            </li>
        
            <li class="col-md-3">
              <a href="#" class="thumbnail">
                <img src="http://placehold.it/240x100" alt="">
              </a>
            </li>
        
      </ul>
    </div>
  </li>
</ul>

<div class="box closable-chat-box">
  <div class="box-content padded">

    <div class="fields">
      <div class="avatar"><img class="avatar-small" src="../../images/avatars/avatar2.jpg" /></div>
      <ul>
        <li><b>Add a comment for project <a href="#">Core Admin</a></b></li>
        <li class="note">Click on the textarea below to expand it!</li>
      </ul>
    </div>

    <form class="fill-up" action="/">

      <div class="chat-message-box">
        <textarea name="ttt" id="ttt" rows="5" placeholder="add a comment (click to expand!)"></textarea>
      </div>

      <div class="clearfix actions">
        <span class="note">An optional note can go here</span>
        <div class="pull-right faded-toolbar">
          <a href="#" class="tip" title="Attach files"><i class="icon-paper-clip"></i></a>
          <a href="#" class="btn btn-blue btn-xs">Send</a>
        </div>
      </div>
    </form>

  </div>
</div>
  </div>
</div>

  </div>
</div>

</body>
</html>
