<?php

include 'db.php';

$sql = 'SELECT * FROM recipe';
$result = $db->query($sql);

?>
<html><head>
  <!-- Standard Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Foody</title>
  <link rel="stylesheet" type="text/css" href="semantic.css">


  <style type="text/css">

    .hidden.menu {
      display: none;
    }


    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }
    .masthead {
        background-image: url('images/header.jpg') !important;
        background-size: cover !important;
    }


  </style>
  <script src="jQuery.js"></script>
  <script src="semantic.min.js"></script>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;
      $('.special.cards .image').dimmer({
        on: 'hover'
      });

      $('#login1').click(function(){
      $('#pop-login').modal('show');
    });

      $('#login2').click(function(){
      $('#pop-login').modal('show');
      });

      $('#login3').click(function(){
      $('#pop-login').modal('show');
      });

      $('.ui.form')
        .form({
          fields: {
            username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your username'
                },
                {
                  type   : 'username',
                  prompt : 'Please enter a valid username'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    });
  </script>

</head>
<body class="pushable">
<!-- Following Menu -->
<div class="ui large top fixed menu transition hidden">
  <div class="ui container">
    <a class="active item">Home</a>
    <a class="item">Resep</a>
    <a class="item">Category</a>
    <a class="item">Tulis resep</a>
    <div class="right menu">
      <div class="item">
        <a class="ui button" id="login1">Log in</a>
      </div>
      <div class="item">
        <a class="ui primary button" href="daftar.php">Sign Up</a>
      </div>
    </div>
  </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu left">
  <a class="active item">Home</a>
  <a class="item">Resep</a>
  <a class="item">Category</a>
  <a class="item">Tulis resep</a>
  <a class="item" id="login2">Log in</a>
  <a class="item" href="daftar.php">Sign Up</a>
</div>


<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment">
    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        <a class="active item">Home</a>
        <a class="item">Resep</a>
        <a class="item">Category</a>
        <a class="item">Tulis Resep</a>
        <div class="right item">
          <a class="ui inverted button" id="login3">Log in</a>
          <a class="ui inverted button" href="daftar.php">Sign Up</a>
        </div>
      </div>
    </div>

<!-- Pop-up Login -->
    <div class="ui container" >
      <div class="ui basic modal" id="pop-login">
        <i class="close icon"></i>
        <div class="header">
          LOG IN
        </div>
        <div class="content">
          <div class="ui middle aligned center aligned grid">
            <div class="column">
              <form class="ui large form" action="#">
                <div class="ui stacked segment">
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="user icon"></i>
                      <input type="text" name="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="field">
                    <div class="ui left icon input">
                      <i class="lock icon"></i>
                      <input type="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="ui fluid large orange submit button" >Login</div>
                </div>

                <div class="ui error message"></div>
              </form>
              <div class="ui message">
                Belum punya akun? <a href="daftar.php">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Header -->
    <div class="ui text container">
      <h1 class="ui inverted header">
        FOODY
      </h1>
      <h2>Let's talk about FOOD!</h2>
      <div class="ui loading search">
      <div class="ui icon input">
          <input class="prompt" type="text" placeholder="Search Recipe">
          <i class="search icon"></i>
      </div>
      <div class="results"></div>
      </div>
    </div>
</div>

<!-- Konten resep -->
  <div class="doubling stackable three column ui grid container">
    <div class="sixteen wide column"></div>
    <?php while ($barang = $result->fetch_object()): ?>
    <div class="column">
      <div class="ui special cards">
        <div class="card">
          <div class="blurring dimmable image">
            <div class="ui dimmer">
              <div class="content">
                <div class="center">
                  <div class="ui inverted button">Lihat resep</div>
                </div>
              </div>
            </div>
            <img style="width:100%; height:220px;" src="images/<?php echo $barang->id; ?>.jpg">
          </div>
          <div class="content">
            <a class="header"><?php echo $barang->judul; ?></a>
            <div class="meta">
              <span class="date">resep oleh : <?php echo $barang->pembuat; ?></span>
            </div>
          </div>
          <div class="extra content">
            <a>
              <?php echo $barang->komentar; ?>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
      <div class="sixteen wide column"></div>
    </div>
    <div class="one wide row"> </div>
  </div>

<!-- Footer -->
    <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Sitemap</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Homepage</a>
            <a href="#" class="item">Kumpulan Resep</a>
            <a href="#" class="item">Tulis Resep</a>
            <a href="#" class="item">Category Resep</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
