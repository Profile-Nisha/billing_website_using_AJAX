<header class="main-header">
    <!-- Logo -->
    <a href="./" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>GAS</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Gramin Arogya Seva</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="../#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="../#" class="dropdown-toggle" data-toggle="dropdown">
              <img style="background-color: #fff;" src="https://www.graminarogya.com/wp-content/uploads/2022/01/gramin.png" class="user-image" alt="">
             
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img style="background-color: #fff;" src="https://www.graminarogya.com/wp-content/uploads/2022/01/gramin.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']; ?>
                  <small>Member since Nov. 2021</small>
                </p>
              </li>
            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="../#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../action/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li> <a href="../#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> </li> -->
        </ul>
      </div>
    </nav>
  </header>