<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Music</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/myCSS.css">
  <!-- =======================================================
    Theme Name: MeFamily
    Theme URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index"><span>Kane Stewart</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Games
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="wow">World of Warcraft</a><br>
                <a class="dropdown-item" href="smite">Smite</a><br>
                <a class="dropdown-item" href="smash">Project M</a><br>
                <a class="dropdown-item" href="hearthstone">Hearthstone</a><br>
                  <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Media
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="movies">Movies</a><br>
                <a class="dropdown-item" href="anime">Anime</a><br>
                <a class="dropdown-item" href="music">Music</a><br>
                <a class="dropdown-item" href="television">Television Series</a>            <li class="nav-item dropdown">
              <a href="travels">
                Travels
              </a>
                <li class="nav-item dropdown">
              <a href="contact">
                Contact Me
              </a>
              </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="breadcrumb">
    <h1>Music</h1>
  </div>


<ul id="playlist">
  </ul>
 <script>
  var url="https://www.googleapis.com/youtube/v3/playlistItems?playlistId=PL5Xzg6Y1SvLH64ovoy_69MTHcwjMVquWg&maxResults=25&part=snippet%2CcontentDetails&key=AIzaSyBXhHvM3dt6VB1fQ_D_6cfkXZScXVUpdLA";
  fetch(url, {mode: 'cors'})
    .then(response => response.json())
    .then(data => {
      var playlist = document.getElementById('playlist');
      data.items.forEach(item => {
        var li = document.createElement('li');

        li.innerHTML=`<iframe src="https://www.youtube.com/embed/${item.snippet.resourceId.videoId}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>`;
        playlist.appendChild(li);
      });
    });
  </script>

<!-- <div class="col-md-10 col-md-offset-1">
    <p>
        My music taste is actually incredibly wonky. Like, I enjoy nearly every genre from most media, but when it comes to music, my tastes are actually incredibly narrow. I don't really know how to put it into words, 
        but I've put several of my favorite songs (and some that aren't, but have elements that I like) so this should at least give you a decent look at what I like.
        
        <br>
        <p>
          I know this isn't supposed to be at the bottom, but it keeps breaking at the top which is really annoying and if I type this here, I may end up fixing it soon.
        </p>
  </p>
  </div> -->


   <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index"><h1>Kane Stewart</h1></a>
            <p>If you've actually gone out of your way to go through all of this, I commend you! You deserve a reward. Over to the other side of this footer is my social media, feel free to reach out to me there, and I'll be sure to get back in a timely manner!</p>

          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Latest Posts</h3>
            <ul>
              <li><a href="img/resumeNew.docx" download>Downloadable PDF of my Resume</a></li>
              <li><a href="#">My Anime List</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Stay in touch</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i> kstewart4643@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> (706)-955-5795</p>

          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; 2014 Me & Family Multi-purpose theme
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MeFamily
              -->
              <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>


          <ul class="social-network">
            <li><a href="https://facebook.com/Gogetaex" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="https://twitter.com/Gogetaex" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/functions.js"></script>
  <script src="js/myjs.js"></script><

  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>
448721655
<!-- List of thing n' stuff

  <ul id="playlist">
    </ul>
   <script>
    var url="https://www.googleapis.com/youtube/v3/playlistItems?playlistId=PL5Xzg6Y1SvLH64ovoy_69MTHcwjMVquWg&maxResults=25&part=snippet%2CcontentDetails&key=AIzaSyBXhHvM3dt6VB1fQ_D_6cfkXZScXVUpdLA";
    fetch(url, {mode: 'cors'})
      .then(response => response.json())
      .then(data => {
        var playlist = document.getElementById('playlist');
        data.items.forEach(item => {
          var li = document.createElement('li');
          var a = document.createElement('a');
          a.href = `https://www.youtube.com/watch?v=${item.snippet.resourceId.videoId}`;
          a.textContent = item.snippet.title;
          li.appendChild(a);
          playlist.appendChild(li);
        });
      });
    </script> -->