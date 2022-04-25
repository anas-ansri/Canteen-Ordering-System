<head>
  <style>
    .navbar {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #1967ad;
      color: #fff;
      position: relative;
    }

    .navlogo {
      font-size: 1.5rem;
      /* margin: auto; */

    }

    .navRight ul {
      margin: 0px;
      padding-left: 400px;
      display: flex;
    }

    .navRight ul li {
      list-style: none;
    }

    .navRight ul li a {
      text-decoration: none;
      color: #fff;
      padding: 1rem;
      display: block;
    }

    .navRight ul li a:hover {
      background-color: #555;
    }




    @media (max-width: 400px) {


      .navRight {
        display: none;
        width: 100%;
      }

      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navRight ul {
        width: 100%;
        flex-direction: column;
      }

      .navRight ul li {
        text-align: center;
      }

      .navRight ul li a {
        padding: .8rem 1.5rem;
      }

      .navRight.active {
        display: flex;
      }
    }
  </style>
</head>


<nav class="navbar">
  <!-- The nav logo part -->
  <div class="navlogo"></div>
  <div class="navlogo">VIIT CANTEEN</div>
  <!-- The hambargar menu -->
  <a href="#" class="ham">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </a>
  <!-- The nav links part -->
  <div class="navRight">
    <?php
    if (isset($_SESSION["name"])) {
    ?>
      <nav>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION["name"]; ?> </a></li>
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-cutlery"></span> Food List </a></li>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart (<?php
                                                                                                if (isset($_SESSION["cart"])) {
                                                                                                  $count = count($_SESSION["cart"]);
                                                                                                  echo "$count";
                                                                                                } else
                                                                                                  echo "0";
                                                                                                ?>) </a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
        </ul>
      </nav>
    <?php
    }
    ?>
  </div>
</nav>
</div>

<div class="container" style="min-height:500px;">