<!DOCTYPE html>
<html>

<head>
  <title> Landing Page </title>

  <!---To ensure proper rendering and touch zooming in Mobile Phones-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Satisfy|Questrial|Roboto" rel="stylesheet">


  <!-- CSS -->
  <link href="lib/style.css" rel="stylesheet" type="text/css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

    .topnav .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {
        display: none;
      }

      .topnav a.icon {
        float: right;
        display: block;
      }
    }

    @media screen and (max-width: 600px) {
      .topnav.responsive {
        position: relative;
      }

      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }

      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }

    .fixed-bg {
      background-image: url("paint.jpg");
      min-height: 500px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }

    .fixed-bgtwo {
      background-image: url("woodone.jpg");
      min-height: 500px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="login%20page/login%20page/login%20and%20registration.html" class="active"> LOGIN & SIGN UP</a>
    <a href="contact.html?Submit=Submit#about"> CONTACT US </a>
    <a href="maptry2.html"> ABOUT US </a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div style="padding-left:16px">

  </div>
  <!--background Image for the landing page-->
  <div class="container-fluid bg-header" id="home">

    <!-- For adding color effect -->
    <div class="overlay-grey">

      <!-- Container for banner Text -->
      <div class="container">
        <div class="row">

          <!-- Banner Text -->
          <div class="banner-text wow bounceInUp" data-wow-delay=0.1s>
            <h2> E - TRIBAL <span class="decorate"><br> Be whole. Be spirited. <br> Be Tribal. </span> </h2>
            <p> <br> </p>
          </div>

          <!-- Button -->
          <div class="text-center wow bounceInUp" data-wow-delay="0.3s">
            <?php
            session_start();
            if (isset($_SESSION['user_id'])) {
            ?>
              <a href="/tribal/homepage"><button class="btn"> Hello <?php echo $_SESSION['user_id'] ?>, Go to homepage </button></a>
            <?php
            } else {
            ?>
              <a href="../login/"><button class="btn"> Log In To Shop</button></a>

            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="fixed-bg"></div>

  <div class="first" id="intro" style="height:400px;background-color:#ffeeba;color:brown;font-size:18px;font-family:Cambria"><br>
    <p>It is reasonable to say that the process of shopping on the web is becoming commonplace.It is an ecommerce
      website we mean e buying and selling of products or services over electronic systems such as the Internet and
      other computer networks. The project is to develop a general-purpose e-commerce store where any product(such as
      handicrafts ,antic pieces and many more) is mostly based on tribal marketing. They can be bought from the comfort
      of home through the Internet. It will be an online store is a virtual store on the Internet where customers can
      browse the catalog and select products of interest.
    </p>
  </div>

  <div class="fixed-bgtwo"></div>

  <div style="height:400px;background-color:#ffeeba;color:brown;font-size:18px;font-family:Cambria"><br>

    <div class="container" id="about">
      <p> Anyone can E-tribal: e-Marketplace to purchase tribal goods, views and available products, but every user must
        login by his/her Username and password in order to purchase or order products. Unregistered members can register
        by navigating to the registration page. Only Admin will have access to modify roles, by default developer can
        only be an ???Admin???. Once a user register site, his default role will be ???User???.
      </p><br>

    </div>
  </div>
  <!-- Text -->


  <!-- JavaScript Plugin for Animation -->
  <link rel="stylesheet" href="lib/animate.min.css">
  <script src="lib/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>

</html>