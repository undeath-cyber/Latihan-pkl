<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}

?>
<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="asset/avengers.png">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <!-- custom stylesheet -->
  <link rel="stylesheet" href="main.css">

  <!-- font-awesome icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <!-- Plugin  -->
  <script src="jquery.reflection.js"></script>
  <script src="jquery.cloud9carousel.js"></script>

  <title>undeath</title>
</head>

<body>

  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class=" indigo darken-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"> <i class="material-icons large">gps_fixed</i> Undeath</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#about">About Us</a></li>
            <li><a href="#clients">Clients</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="logout.php">Logout</a></li>

          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#about">About Us</a></li>
    <li><a href="#clients">Clients</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact Us</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>

  <!-- slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/6.png">
        <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/8.png">
        <div class="caption right-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider/9 .png">
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>

  <!-- About Us -->
  <section id="about" class="about scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="center light grey-text text-darken-3">About Us</h3>
        <div class="col m6 light">
          <h5>We Are Professionals</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quo accusantium repellat similique ipsa doloribus in aliquam earum eaque, possimus necessitatibus sunt repellendus ullam recusandae voluptas dolore debitis saepe facere.</p>
        </div>
        <div class="col m6 light">
          <p>WEB DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate teal darken-2" style="width: 95%"></div>
          </div>
          <p>MOBILE APP DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate teal darken-2" style="width: 65%"></div>
          </div>
          <p>GAME DEVELOPMENT</p>
          <div class="progress">
            <div class="determinate teal darken-2" style="width: 89%"></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Clients -->
  <div id="clients" class="parallax-container scrollspy">
    <div class="parallax"><img src="img/slider/7.png"></div>

    <div class="container clients ">
      <h3 class="center light white-text">Our Clients</h3>
      <div class="row">
        <div class="col m4 s12 center">
          <img src="img/clients/gojek.png">
        </div>
        <div class="col m4 s12 center">
          <img src="img/clients/tokopedia.png">
        </div>
        <div class="col m4 s12 center">
          <img src="img/clients/traveloka.png">
        </div>
      </div>
    </div>
  </div>

  <!-- service -->

  <section id="services" class="services grey lighten-3  scrollspy">
    <div class="container">
      <div class="row">
        <h3 class="light center grey-text text-darken-3">Our Services</h3>

        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons large">desktop_mac</i>
            <h5>Web Development</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Rem quas deserunt aut doloremque consectetur
              harum magni odit laudantium est,
              consequuntur beatae fuga quasi voluptas et provident magnam,
              eum voluptatum praesentium.</p>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons large">android</i>
            <h5>Mobile App</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Rem quas deserunt aut doloremque consectetur
              harum magni odit laudantium est,
              consequuntur beatae fuga quasi voluptas et provident magnam,
              eum voluptatum praesentium.</p>
          </div>
        </div>

        <div class="col m4 s12">
          <div class="card-panel center">
            <i class="material-icons large">games</i>
            <h5>Game Development</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Rem quas deserunt aut doloremque consectetur
              harum magni odit laudantium est,
              consequuntur beatae fuga quasi voluptas et provident magnam,
              eum voluptatum praesentium.</p>
          </div>
        </div>

      </div>
    </div>
  </section>



  <!-- Portfolio -->
  <section id="portfolio" class="portfolio  scrollspy">

    <div class="container">
      <h3 class="light center grey-text text-darken-3">Portfolio</h3>
      <div class="row">

        <div class="col m3 s12">
          <img src="asset/1.jpg" class="responsive-img materialboxed">
        </div>

        <div class="col m3 s12">
          <img src="asset/5.jpg" class="responsive-img materialboxed">
        </div>

        <div class="col m3 s12">
          <img src="asset/3.jpg" class="responsive-img materialboxed">
        </div>

        <div class="col m3 s12">
          <img src="asset/4.jpg" class="responsive-img materialboxed">
        </div>

      </div>
      <div class="row">

        <div class="col m3 s12">
          <img src="asset/6.jpg" class="responsive-img materialboxed">
        </div>

        <div class="col m3 s12">
          <img src="asset/7.jpg" class="responsive-img materialboxed">
        </div>

        <div class="col m3 s12">
          <img src="asset/8.jpg" class="responsive-img materialboxed">
        </div>

        <div class="col m3 s12">
          <img src="asset/9.jpg" class="responsive-img materialboxed">
        </div>

      </div>
    </div>

  </section>

  <!-- contact -->

  <section id="contact" class="contact grey lighten-3  scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center">Contact</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel indigo darken-3 center white-text">
            <i class="material-icons">email</i>
            <h5>Contact</h5>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi quod ad itaque in vel delectus rem cupiditate,
              id minus provident, totam hic nemo reprehenderit dolorum quo incidunt explicabo quibusdam? Illo.</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Our office</h4>
            </li>
            <li class="collection-item">I'am Undeath</li>
            <li class="collection-item">jl.Monyet no.193</li>
            <li class="collection-item">West Java,Indonesia</li>
          </ul>
        </div>

        <div class="col m7 s12">
          <form action="" method="">
            <div class="card-panel">
              <h5>Please fill out This form</h5>
              <div class="input-field">
                <input type="text" name="name" id="name" required class="validate">
                <label for="name">Your Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="tel" name="phone" id="phone">
                <label for="phone">Phone Number</label>
              </div>

              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea" "></textarea>
                <label for=" message">Message</label>
              </div>
              <button type="menu" class="btn indigo darken-3">Send Your Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="indigo darken-3 white-text center" >
    <p class="flow-text"> UndeathCyber . Copyright 2020 .</p>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 600,
      interval: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 50
     } );
  </script>

</body>

</html>