  <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="admin.php" class="logo"><b>ADMIN<span>comport</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">

           <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          
         
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="../update/uploads/file_1543394611.KakaoTalk_20181128_174302059.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">park so jin</h5>
          <li class="mt">
            <a class="active" href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
         
          <li class="sub-menu">
            <a href="./gallery_admin.php">
              <i class="fa fa-cogs"></i>
              <span>Gallery</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>




<!--           <li class="sub-menu"> -->
<!--             <a href="javascript:;"> -->
<!--               <i class="fa fa-tasks"></i> -->
<!--               <span>Forms</span> -->
<!--               </a> -->
<!--             <ul class="sub"> -->
<!--               <li><a href="form_component.html">Form Components</a></li> -->
<!--               <li><a href="advanced_form_components.html">Advanced Components</a></li> -->
<!--               <li><a href="form_validation.html">Form Validation</a></li> -->
<!--               <li><a href="contactform.html">Contact Form</a></li> -->
<!--             </ul> -->
<!--           </li> -->
<!--           <li class="sub-menu"> -->
<!--             <a href="javascript:;"> -->
<!--               <i class="fa fa-th"></i> -->
<!--               <span>Data Tables</span> -->
<!--               </a> -->
<!--             <ul class="sub"> -->
<!--               <li><a href="basic_table.html">Basic Table</a></li> -->
<!--               <li><a href="responsive_table.html">Responsive Table</a></li> -->
<!--               <li><a href="advanced_table.html">Advanced Table</a></li> -->
<!--             </ul> -->
<!--           </li> -->
<!--           <li> -->
<!--             <a href="inbox.html"> -->
<!--               <i class="fa fa-envelope"></i> -->
<!--               <span>Mail </span> -->
<!--               <span class="label label-theme pull-right mail-info">2</span> -->
<!--               </a> -->
<!--           </li> -->
<!--           <li class="sub-menu"> -->
<!--             <a href="javascript:;"> -->
<!--               <i class=" fa fa-bar-chart-o"></i> -->
<!--               <span>Charts</span> -->
<!--               </a> -->
<!--             <ul class="sub"> -->
<!--               <li><a href="morris.html">Morris</a></li> -->
<!--               <li><a href="chartjs.html">Chartjs</a></li> -->
<!--               <li><a href="flot_chart.html">Flot Charts</a></li> -->
<!--               <li><a href="xchart.html">xChart</a></li> -->
<!--             </ul> -->
<!--           </li> -->
<!--           <li class="sub-menu"> -->
<!--             <a href="javascript:;"> -->
<!--               <i class="fa fa-comments-o"></i> -->
<!--               <span>Chat Room</span> -->
<!--               </a> -->
<!--             <ul class="sub"> -->
<!--               <li><a href="lobby.html">Lobby</a></li> -->
<!--               <li><a href="chat_room.html"> Chat Room</a></li> -->
<!--             </ul> -->
<!--           </li> -->
<!--           <li> -->
<!--             <a href="google_maps.html"> -->
<!--               <i class="fa fa-map-marker"></i> -->
<!--               <span>Google Maps </span> -->
<!--               </a> -->
<!--           </li> -->
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->