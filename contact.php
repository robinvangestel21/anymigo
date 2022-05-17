<?php
include "config.php";
?>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-P4FX85V');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/contact.css">
  <link rel="stylesheet" href="style/header.css">
  <link rel="stylesheet" href="style/footer.css">
  <link rel="stylesheet" href="style/slider.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&family=DM+Serif+Display:ital@0;1&display=swap"
    rel="stylesheet">
  <title>Anymigo</title>
</head>

<body onresize='checkWidth()'>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P4FX85V" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Background menu -->
  <div class='background-nav' id='hb'>
    <nav>
      <a href="/index">
        <?php echo $lang['nav-home'];?>
        <div class='circle '></div>
      </a>
      <a href="/mogelijkheden">
        <?php echo $lang['nav-mogelijkheden'];?>
        <div class='circle'></div>
      </a>
      <a href="/projecten">
        <?php echo $lang['nav-projecten'];?>
        <div class='circle '></div>
      </a>
      <a class='active' href="/contact">
        <?php echo $lang['nav-contact'];?>
        <div class='circle active-circle'></div>
      </a>
      <div id='login-btn'>
        <?php echo $lang['nav-login'];?>
        <svg id="arrow-login" data-name="arrow-login" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.28 12.48">
          <path class="arrow-login-1"
            d="M971.78,539.42l-5.08-5.08a1.16,1.16,0,0,0-1.65,1.64l3.1,3.09H950a1.17,1.17,0,1,0,0,2.33h18.15l-3.1,3.09a1.18,1.18,0,0,0,0,1.65,1.17,1.17,0,0,0,1.65,0l5.08-5.08a1.15,1.15,0,0,0,.34-.82A1.13,1.13,0,0,0,971.78,539.42Z"
            transform="translate(-948.83 -534)" />
        </svg>
      </div>
    </nav>
  </div>

  <section class='fg contact_block_1' id='contact_block_1'>
    <div class='c-container'>
      <div class='c1'>
        <div class='img-bb'></div>
      </div>
      <div class="c2">
        <h1>
          <?php echo $lang['contact-blok-een-titel'];?>
        </h1>
        <p>
          <?php echo $lang['contact-blok-een-tekst'];?>
        </p>
        <a href="https://kinsmen.tv/">www.kinsmen.tv
          <svg viewBox="0 0 20.327 12.822">
            <line x2="17.796" transform="translate(1 6.411)" fill="none" stroke="#6734b7" stroke-linecap="round"
              stroke-miterlimit="10" stroke-width="2" />
            <path d="M-2410.074,744.258l4.364,5-4.364,5" transform="translate(2424.71 -742.847)" fill="none"
              stroke="#6734b7" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <!-- Colored top section -->
  <div class='fg header'>
    <svg id='header-bg-desktop' viewBox="0 0 1483.75 833.01" preserveAspectRatio="none">
      <defs>
        <linearGradient spreadMethod="pad" id="gradient-desktop" x1="0%" y1="70%" x2="70%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(103, 52, 183);stop-opacity:1;" />
          <stop offset="100%" style="stop-color:rgb(50, 25, 89);stop-opacity:1;" />
        </linearGradient>
      </defs>
      <path d="M1483.75,785V0H0V785c172.36,29.23,440.61,48,741.92,48S1311.38,814.22,1483.75,785Z" />
    </svg>
    <svg id='header-bg-mobile' viewBox="0 0 579.86 873.43" preserveAspectRatio="none">
      <defs>
        <linearGradient spreadMethod="pad" id="gradient-mobile" x1="0%" y1="70%" x2="70%" y2="0%">
          <stop offset="0%" style="stop-color:rgb(103, 52, 183);stop-opacity:1;" />
          <stop offset="100%" style="stop-color:rgb(50, 25, 89);stop-opacity:1;" />
        </linearGradient>
      </defs>
      <path d="M480.44,90.69v858c87.93,9.92,186.23,15.46,290,15.46s202-5.54,289.89-15.45v-858Z"
        transform="translate(-480.44 -90.69)" />
    </svg>



    <!-- Top menu -->
    <header>
      <a href="/index">
        <svg id="anymigo-logo" data-name="anymigo-logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 251.03 59.06">
          <path class="anymigo-logo-1"
            d="M861.66,548.16l-5.83-10.88c1.28-.61,2.55-1.26,3.79-2a3.29,3.29,0,1,0-3.35-5.67c-1.17.69-2.35,1.31-3.55,1.88l-13.44-25.06,4.1-7.64a3.29,3.29,0,0,0-5.8-3.12l-2,3.8-2-3.8a3.29,3.29,0,0,0-5.8,3.12l4.1,7.64-13.42,25a32,32,0,0,1-3.47-1.78,3.29,3.29,0,1,0-3.55,5.55,38.07,38.07,0,0,0,3.9,2l-5.84,10.88a3.3,3.3,0,0,0,5.81,3.11l6.24-11.63c1.43.44,3,.85,4.66,1.2a48,48,0,0,0,9.77,1,45.82,45.82,0,0,0,13.76-2.13l6.2,11.55a3.28,3.28,0,0,0,2.9,1.74,3.37,3.37,0,0,0,1.56-.39A3.3,3.3,0,0,0,861.66,548.16Zm-33.95-13.72c-1.08-.22-2.09-.47-3.06-.74l10.89-20.29,11,20.42A39.53,39.53,0,0,1,827.71,534.44Z"
            transform="translate(-809.03 -493.94)" />
          <circle class="anymigo-logo-2" cx="11.03" cy="15.48" r="3.12" />
          <circle class="anymigo-logo-2" cx="41.99" cy="15.48" r="3.12" />
          <path class="anymigo-logo-3"
            d="M916.59,534.34l-11.27-21h0v0l-.06-.09c-.06-.09-.12-.19-.19-.28s-.11-.11-.16-.16l-.16-.16a2.9,2.9,0,0,0-.29-.19l-.08-.06h0a3.12,3.12,0,0,0-.42-.18l-.17,0-.27,0h-.45a.58.58,0,0,0-.19,0,1.11,1.11,0,0,0-.25.05,2.47,2.47,0,0,0-.42.17h0l-.1.07c-.09.06-.18.11-.27.18a1.29,1.29,0,0,0-.16.17,1.14,1.14,0,0,0-.16.15,2.9,2.9,0,0,0-.19.29l-.06.08v0h0l-11.27,21a2.31,2.31,0,0,0,.94,3.12,2.27,2.27,0,0,0,1.09.28,2.32,2.32,0,0,0,2-1.22l2.24-4.19h14l2.24,4.19a2.32,2.32,0,0,0,2,1.22,2.27,2.27,0,0,0,1.09-.28A2.31,2.31,0,0,0,916.59,534.34Zm-17.84-6.62,4.53-8.44,4.52,8.44Z"
            transform="translate(-809.03 -493.94)" />
          <path class="anymigo-logo-3"
            d="M1001.37,537.74a2.32,2.32,0,0,1-2.31-2.31v-21a2.31,2.31,0,0,1,4.62,0v21A2.31,2.31,0,0,1,1001.37,537.74Z"
            transform="translate(-809.03 -493.94)" />
          <path class="anymigo-logo-3"
            d="M940.09,537.74a2.33,2.33,0,0,1-1.77-.83l-13.55-16.16v14.68a2.31,2.31,0,1,1-4.61,0v-21a2.31,2.31,0,0,1,4.08-1.48l13.54,16.16V514.4a2.31,2.31,0,0,1,4.62,0v21a2.31,2.31,0,0,1-1.52,2.17A2.44,2.44,0,0,1,940.09,537.74Z"
            transform="translate(-809.03 -493.94)" />
          <path class="anymigo-logo-3"
            d="M992.71,512.21a2.32,2.32,0,0,0-2.58.83l-7.88,10.79L974.37,513a2.31,2.31,0,0,0-4.17,1.36v21a2.31,2.31,0,0,0,4.62,0v-14l5.57,7.63.07.08a1,1,0,0,0,.17.18,1.29,1.29,0,0,0,.17.16l.09.08.08,0,.22.13.19.09.22.07.21.06.22,0,.22,0,.23,0,.21,0,.22-.06.21-.07.19-.1a.94.94,0,0,0,.22-.12l.08,0,.09-.08.18-.16a1.45,1.45,0,0,0,.16-.18l.07-.08,5.58-7.63v14a2.31,2.31,0,1,0,4.61,0v-21A2.31,2.31,0,0,0,992.71,512.21Z"
            transform="translate(-809.03 -493.94)" />
          <path class="anymigo-logo-3"
            d="M1047.24,537.74a12.82,12.82,0,1,1,12.82-12.82A12.83,12.83,0,0,1,1047.24,537.74Zm0-21a8.21,8.21,0,1,0,8.21,8.21A8.21,8.21,0,0,0,1047.24,516.71Z"
            transform="translate(-809.03 -493.94)" />
          <path class="anymigo-logo-3"
            d="M1021,537.74a12.82,12.82,0,1,1,9.73-21.17,2.3,2.3,0,1,1-3.5,3,8.21,8.21,0,1,0-1.1,11.75v-4.1h-6a2.31,2.31,0,1,1,0-4.61h8.27a2.3,2.3,0,0,1,2.3,2.31v7.43A2.31,2.31,0,0,1,1030,534,12.75,12.75,0,0,1,1021,537.74Z"
            transform="translate(-809.03 -493.94)" />
          <path class="anymigo-logo-3"
            d="M965.87,512.61a2.3,2.3,0,0,0-3.24.34l-6.33,7.84L950,513a2.31,2.31,0,0,0-3.59,2.9l7.61,9.43v10.15a2.31,2.31,0,0,0,4.62,0V525.28l7.61-9.43A2.3,2.3,0,0,0,965.87,512.61Z"
            transform="translate(-809.03 -493.94)" />
        </svg>
      </a>
      <nav class='header-nav-desktop'>
        <a href="/index">
          <?php echo $lang['nav-home'];?>
          <div class='circle'></div>
        </a>
        <a href="/mogelijkheden">
          <?php echo $lang['nav-mogelijkheden'];?>
          <div class='circle'></div>
        </a>
        <a href="/projecten">
          <?php echo $lang['nav-projecten'];?>
          <div class='circle'></div>
        </a>
        <a class='active' href="/contact">
          <?php echo $lang['nav-contact'];?>
          <div class='circle circle-active'></div>
        </a>
        <button id='login-btn' onclick="location.href='/portal'">
          <?php echo $lang['nav-login'];?>
          <svg id="arrow-login" data-name="arrow-login" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.28 12.48">
            <path class="arrow-login-1"
              d="M971.78,539.42l-5.08-5.08a1.16,1.16,0,0,0-1.65,1.64l3.1,3.09H950a1.17,1.17,0,1,0,0,2.33h18.15l-3.1,3.09a1.18,1.18,0,0,0,0,1.65,1.17,1.17,0,0,0,1.65,0l5.08-5.08a1.15,1.15,0,0,0,.34-.82A1.13,1.13,0,0,0,971.78,539.42Z"
              transform="translate(-948.83 -534)" />
          </svg>
        </button>
        <div class="lang-container">
          <form class="lang-form" action="" method='get'>
            <input type="hidden" name='lang' value='nl'>
            <input class="lang-button <?php echo $lang['nl-active'];?>" type="submit" value='NL'>
          </form>
          <div class='separator'></div>
          <form class="lang-form" action="" method='get'>
            <input type="hidden" name='lang' value='en'>
            <input class="lang-button <?php echo $lang['en-active'];?>" type="submit" value='EN'>
          </form>
        </div>
      </nav>
      <nav class='header-nav-mobile'>
        <button id='hamburger-btn' onclick='sliderHB()'>
          <svg class="hamburgerButton" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line id="topLine" class="line topLine" x1="3" y1="3" x2="97" y2="3" stroke="#ffcd55" stroke-width="6"
              stroke-linecap="round" stroke-linejoin="round" />
            <line id="middleLine" class="line" x1="3" y1="50" x2="97" y2="50" stroke="#ffcd55" stroke-width="6"
              stroke-linecap="round" stroke-linejoin="round" />
            <line id="bottomLine" class="line bottomLine" x1="25" y1="97" x2="97" y2="97" stroke="#ffcd55"
              stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </nav>
    </header>

    <!-- Content of colored top section -->
    <section class='header-main' id='header-main-contact'>
      <div class='left-column'>
        <h1>
          <?php echo $lang['contact-header-titel'];?>
        </h1>
        <p>
          <?php echo $lang['contact-header-tekst'];?>
        </p>
      </div>
      <div class='right-column'>
        <div>
          <h3>
            <?php echo $lang['contact-header-mail-ons'];?>
          </h3>
          <div class='hl'></div>
          <a class='email' href="mailto:hello@kinsmen.tv">hello@kinsmen.tv</a>
          <h3>
            <?php echo $lang['contact-header-bel-ons'];?>
          </h3>
          <div class='hl'></div>
          <a class='tel' href="tel:0738224945">073 - 822 49 45</a>
        </div>
        <div class='social-link-container'>
          <a class='social-link' href="https://www.linkedin.com/company/kinsmencollective/" target="_blank">LinkedIn</a>
          <a class="social-link" href="https://www.instagram.com/kinsmen.tv/" target="_blank">Instagram</a>
        </div>

      </div>
    </section>

    <!-- Arrow at bottom in colored top section-->
    <section class='header-arrow'>
      <svg id="arrow-down" data-name="arrow-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.15 29.43">
        <polygon class="arrow-down-1"
          points="28.74 12.94 16.08 25.6 16.08 0 14.08 0 14.08 25.6 1.41 12.94 0 14.36 15.08 29.43 30.15 14.36 28.74 12.94" />
      </svg>
    </section>
  </div>

  <!-- Main blocks -->


  <footer class='fg footer'>
    <div class='footer-header'>
      <h1>
        <?php echo $lang['footer-titel'];?>
      </h1>
      <a href="index">
        <svg id="anymigo-icon" data-name="anymigo-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66.6 74.18">
          <path class="anymigo-icon-1"
            d="M993.28,571.53,986,557.89q2.41-1.14,4.76-2.52a4.14,4.14,0,0,0-4.21-7.13,50.26,50.26,0,0,1-4.46,2.36l-16.88-31.46,5.15-9.61a4.13,4.13,0,1,0-7.28-3.91l-2.56,4.77-2.56-4.77a4.14,4.14,0,0,0-7.29,3.91l5.15,9.61-16.85,31.42a40.57,40.57,0,0,1-4.37-2.24,4.13,4.13,0,1,0-4.45,7,43.35,43.35,0,0,0,4.89,2.57l-7.33,13.67a4.14,4.14,0,0,0,7.29,3.91l7.84-14.61c1.8.55,3.75,1.07,5.85,1.51a60.54,60.54,0,0,0,12.28,1.27A57.61,57.61,0,0,0,978.22,561L986,575.44a4.14,4.14,0,1,0,7.29-3.91ZM950.64,554.3c-1.35-.27-2.63-.59-3.84-.92l13.68-25.49,13.76,25.65A49.65,49.65,0,0,1,950.64,554.3Z"
            transform="translate(-927.18 -503.44)" />
          <circle class="anymigo-icon-2" cx="13.86" cy="19.44" r="3.91" />
          <circle class="anymigo-icon-2" cx="52.74" cy="19.44" r="3.91" />
        </svg>
      </a>
    </div>
    <div class="footer-grid">
      <div class="element">
        <h1><a class='title' href="https://kinsmen.tv/">Kinsmen Collective</a></h1>
        <p>KVK: 70001693</p>
        <p>BTW: NL858098878B01</p>
      </div>
      <div class="element">
        <h1>
          <?php echo $lang['footer-adres'];?>
        </h1>
        <a href='https://www.google.com/maps/search/?api=1&query=Kinsmen+Collective' target="_blank">Veemarktkade 8 <br>
          5222 AE, Den Bosch</a>
      </div>
      <div class="element">
        <h1>
          <?php echo $lang['footer-contact'];?>
        </h1>
        <a href="mailto:hello@kinsmen.tv">hello@kinsmen.tv</a>
        <a href="#">073-822 49 45</a>
      </div>
      <div class="element">
        <h1>
          <?php echo $lang['footer-socials'];?>
        </h1>
        <a href="https://www.instagram.com/kinsmen.tv/" target="_blank">Instagram</a>
        <a href="https://www.linkedin.com/company/kinsmencollective/" target="_blank">LinkedIn</a>
      </div>
    </div>
    <div class="footer-footer">
      <p>Copyright &copy; 2021 Kinsmen Collective</p>
    </div>
  </footer>

  <script src="main.js"></script>
</body>

</html>