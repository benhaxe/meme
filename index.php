<!Doctype html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/animate.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body class="theme-naimation">
  <div class="wrapper">
    <header class="header">
      <nav class="header-nav">
        <h1 class="logo to-left"><img class="img-logo-1" src="image/crm.png" /></h1>
        <div class="to-middle"><a href="#" id="createDpBtn">"Create Redemption Week'17 Display picture for Social Media"</a></div>
        <div class="logo to-right"><img class="img-logo-2" src="image/logo.png" /></div>
      </nav>
    </header>

    <section class="flex-container ">
      <div id="checking">
      </div>

      <a id="download"></a>

      <div class="inner">
        <div class="box">
          <div class="box-inner">
            <div class="box-image" id="personImage">
              <div class="overlay">

                <div id="mySvgs">
                  <img src="image/svg1.png" class="svg1"/>
                  <img src="image/svg2.png" class="svg2"/>
                  <img src="image/svg3.png" class="svg3"/>
                </div>
                <div class="overlay-inner">
                  <div class="round"><img id="image-box" src="image/logo.png" /></div>
                  <p class="italic-text">I am</p>
                  <h2 class="fullname" id="personName">Akindele David</h2>
                  <p class="praising">Join me @ Redemption week'17<span class="break">RCF FUTA 30th Anniversary</span></p>
                    <p class="country-logo">21-27 August, 2017</p>
                  <div class="wrapp-hastags">
                    <span class="hashtag">#Redemptionweek17</span>
                    <span class="hashtag"> | #HeirsOfGod</span>
                  </div>
                  <div>
                      <small class="smaller">...A place Where good things never cease</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="controls">
          <form method="post">
            <div class="animated infinite pulse" id="image-loader">
              <span class="preloader"></span>
              <p> Uploading and Changing Image</p>
            </div>

            <div class="field-wrapp flex" id="image-cont">

              <div class="btn-wrapp">
                <label for="change-image" class="upload-btn">Choose image</label>
                <input type="file" id="change-image" />
              </div>

            </div>

            <div class="field-wrapp">
              <input type="text" placeholder="Type your name here" class="name-field" id="change-name" />
              <span class="enterName"></span>
            </div>
          </form>

          <a href="javascript:downloadDp()" id="download-image"><div class="field-wrapp">
            <input class="Create-dp" id="have" type="submit" value="Download Image & mobilize">
          </div></a>
        </div>
      </div>
    </section>
  </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/html2canvas.js"></script>
  <script type="text/javascript" src="js/html2canvas.svg.js"></script>
  <script type="text/javascript" src="js/axios.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script>
    //URL of the host for the server.......
    var mainUrl = '<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  ?>';
  </script>
</body>
</html>
