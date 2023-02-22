

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Entry</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Management:</h6>
            <a class="dropdown-item" href="./users.php">User</a>
            <a class="dropdown-item" href="./location.php">Location</a>
            <a class="dropdown-item" href="./fixture.php">Fixtures</a>
            <a class="dropdown-item" href="./result.php">Result</a>
            <a class="dropdown-item" href="./description.php">Description</a>
            <a class="dropdown-item" href="./table.php">Table</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./school_data.php">
            <i class="fas fa-fw fa-basketball-ball"></i>
            <span>School data</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="result.php">
            <i class="fas fa-fw fa-paperclip"></i>
            <span>Result</span></a>
        </li>
          <li class="nav-item">
            <a class="nav-link">
          <div style="font-family: AR BLANCA;color: orange">
                       <?php
                        $Today = strftime("%Y-%m-%d");
                        echo date('l, F d, Y',strtotime($Today) );
                        //echo $time;
                        ?>
                    </div>
                  </a>
                </li>
      </ul>

            <div id="content-wrapper">

        <div class="container-fluid">