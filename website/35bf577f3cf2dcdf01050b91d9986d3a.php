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
          <a class="navbar-brand" href="index.php">Omega</a>
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
      <div class="intro" style="background-image: url('./assets/images/bulksplash-sirlagz-sxq-yimxgcg.jpg')">
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
          <h3>Video gaming culture news: How the death of 'Grand Theft Auto' shook the industry</h3>
          <p><strong></strong> The death of "Grand Theft Auto" in 2013 was a shock to the video game industry, and it had a ripple effect on the way people view video gaming culture.

"Grand Theft Auto" was a driving force in shaping the modern gaming industry. Released in 1997, it was a landmark game that set the standard for open-world games. Players could do whatever they wanted in the game, which gave it a level of replayability that was unmatched at the time.

When the game was killed off, it caused a sensation in the industry. How could something so popular and important be killed off? The answer is that the game's creators, Rockstar Games, were concerned about how the game's content was impacting young people.

After "Grand Theft Auto" was killed off, other developers began to take a more cautious approach when it came to creating games with graphic content. This is likely what led to the rise of the "Middle-Earth: Shadow of Mordor" and "Call of Duty" franchises, which are less interactive and feature more realistic graphics.

In the end, the death of "Grand Theft Auto" had a profoundly positive effect on the video game industry. It ushered in a new era of more realistic games</p>
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
