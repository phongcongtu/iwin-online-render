<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     
    <title>Article</title>
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css" />

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css" />
    <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#bs-example-navbar-collapse-1"
          >
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Rainbow</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Main</a></li>
            <li><a href="blog.php">Articles</a></li>
            <li><a href="contact.php">Contacts</a></li>
            <li><a href="privacy.php">Privacy policy</a></li>
            <li><a href="terms.php">Terms and conditions</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- Header -->
    <header id="header">
      <div class="intro" style="background-image: url('./assets/images/bulksplash-lastnameeaster-kucglbxjh_o.jpg')">
        <div class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 intro-text">
                <h1>Article</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div id="services">
      <div class="container">
        <div class="col">
          <h3>gaming merchandise releases</h3>
          <p><strong></strong> There have been hundreds and hundreds of  over the years, but which ones are worth your hard-earned cash? Here are a few that we think are worth your attention.

Quantum Break: The Medi-Pack

The Quantum Break: The Medi-Pack, which includes both a physical and digital copy of the game, debuted last year and quickly became one of the most popular offerings from Microsoft. The pack includes a few items including a replica of the game's golden clock and a sketchbook designed by artist James Swallow.

Forza Horizon 4 Car Pass

Released last year, the Forza Horizon 4 Car Pass is a fantastic way to get your hands on some of the best cars in the game. The pass includes access to all of the game's cars, as well as a few bonus cars and track packs.

Skyrim special Edition

Released in November of last year, the Skyrim special edition was an expensive but well-deserved purchase for any fan of the Elder Scrolls series. The special edition comes complete with a steelbook case, a soundtrack CD, a full-color hardcover book, and a map of the game's world.

Fallout 76 Power Armor wearable</p>
        </div>
      </div>
    </div>

    <div id="footer">
      <div class="container text-center">
        <p>
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          Copyright
        </p>
      </div>
    </div>

    <div class="cookie-banner">
      <p style="color: #000000">
        The site uses cookies. They allow us to recognize you and get information about your user experience.By continuing to browse the site, I agree to the use of cookies by the site owner in accordance with 
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >Cookie policy</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
