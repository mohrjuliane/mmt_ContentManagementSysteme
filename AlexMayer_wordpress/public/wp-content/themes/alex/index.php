<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Alex Mayer - Webdesign</title>

  <meta name="description" content="Sie wollen eine neue Website, dann sind Sie hier genau richtig. Alex Mayr designed Ihre Homepage" />
  <meta property="og:title" content="Alex Mayer - Webdesign" />
  <meta property="og:description" content="Sie wollen eine neue Website, dann sind Sie hier genau richtig. Alex Mayr designed Ihre Homepage" />
  <meta property="og:image" content="https://www.alexmayer.com/assets/logo.png" />
  <meta property="og:image:alt" content="Logo von Alex Mayer" />
  <meta property="og:locale" content="de_AT" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary" />
  <meta property="og:url" content="https://www.alexmayer.com" />
  <link rel="canonical" href="https://www.alexmayer.com" />
  <link rel="apple-touch-icon" href="assets/apple-touch-icon.png" />
  <link rel="manifest" href="assets/my.webmanifest" />
  <meta name="theme-color" content="#009ee3" />

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>
  <header>
    <nav>
      <div class="nav-container">
        <h1 id="logo">Alex Mayer</h1>
        <button class="hamburger hamburger--collapse" type="button" id="hamburger-menu">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
      <ul id="navbar">
        <li class="page" id="current"><a href="#">Start</a></li>
        <li class="page"><a href="#">Leistungen</a></li>
        <li class="page"><a href="#">Blog</a></li>
        <li class="page"><a href="#">Über mich</a></li>
        <li class="page"><a href="#">Kontakt</a></li>
      </ul>
    </nav>
    <section id="hero">
      <div class="title-container">
        <h1>
          <span>Glänzende Ideen für leuchtende Augen</span>
        </h1>
        <button>
          Angebot einholen
        </button>
      </div>
    </section>
  </header>
  <main>
    <section id="Services" class="max-width-container">
      <h2>Leistungen</h2>
      <ul>
        <li id="design">
          <a href="#">
            <h3>Design</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/design.png" alt="design" />
          </a>
        </li>
        <li id="strategy">
          <a href="#">
            <h3>Strategie</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/strategy.png" alt="strategy" />
          </a>
        </li>
        <li id="consulting">
          <a href="#">
            <h3>Consulting</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/consulting.png" alt="consulting" />
          </a>
        </li>
      </ul>
    </section>
    <section id="News" class="max-width-container">
      <h2>News</h2>
      <ul>
        <li>
          <a href="#">365 Postkarten</a> - Eine Liebeserklärung für jeden Tag
          <a href="#">[mehr erfahren]</a>
        </li>
        <li>
          <a href="#">Award-Nominierung</a> - Tolle News: ich bin bei der
          Endauswahl 2020! <a href="#">[mehr erfahren]</a>
        </li>
        <li>
          <a href="#">CMYK erklärt</a> - der neueste <span>Blog</span>-Eintrag
          <a href="#">[mehr erfahren]</a>
        </li>
      </ul>
    </section>
    <section id="References" class="max-width-container">
      <h2>Referenzen</h2>
      <div class="grid-container">
        <article id="tina">
          <img src="<?php echo get_template_directory_uri(); ?>/images/dina-meyer.jpg" alt="Tina Ubuntu" />
          <div class="caption">
            <cite>Tina Ubuntu</cite>
            <p>CEO headless Ltd.</p>
          </div>
          <blockquote>
            Alex' Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20%
            in die Höhe zu treiben!
          </blockquote>
        </article>
        <article id="tom">
          <img src="<?php echo get_template_directory_uri(); ?>/images/thomas-meyer.jpg" alt="Tom Herzog" />
          <div class="caption">
            <cite>Tom Herzog</cite>
            <p>Cutter's Finest</p>
          </div>
          <blockquote>
            Große Webkunst - keine Kunst mit Alex Mayer!
          </blockquote>
        </article>
        <div id="quote">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quotation_mark.svg" alt="quote icon" />
        </div>
        <article id="director">
          <img src="<?php echo get_template_directory_uri(); ?>/images/vorstand.jpg" alt="Vorstand Müller AG" />
          <div class="caption">
            <cite>Vorstand Müller AG</cite>
            <p>KR Ernst Anker, Dr. Florian Eisner</p>
          </div>
          <blockquote>
            Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen
            übertroffen.
          </blockquote>
        </article>
      </div>
    </section>
  </main>
  <footer>
    <?php wp_footer(); ?>
    <nav>
      <p>&copy; Alex Mayer 2020</p>
      <ul>
        <li><a href="#">Impressum</a> | <a href="#">Datenschutzerklärung</a></li>
      </ul>
    </nav>
    <p>
      Demo-Wordpress-Seite im Rahmen der LV ‚Content Mangagement Systeme‘ an
      der FH Salzburg von Juliane Mohr und Tanja Santner
    </p>
    <p>Alle Inhalte frei erfunden</p>
    <h3>Bildnachweis <br> Fotos</h3>
    <ul>
      <li>
        Herofoto Tastatur: Aman Anderson,
        <a href="#">http://de.freeimages.com/photo/illuminated-keyboard-124228</a>
      </li>
      <li>
        Foto Dina Meyer by Dreifachaxel [CC BY-SA 4.0
        <a href="#">(https://creativecommons.org/licenses/by-sa/4.0)</a>],
        from Wikimedia Commons
      </li>
      <li>
        Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas
        Meyer-Hermann) [GFDL
        <a href="#">(http://www.gnu.org/copyleft/fdl.html)</a>, CC BY-SA
        3.0
        <a href="#">(https://creativecommons.org/licenses/by-sa/3.0)</a>
        or CC BY-SA 3.0 de
        <a href="#">(https://creativecommons.org/licenses/by-sa/3.0/de/deed.en)]</a>, via Wikimedia Commons
        <a href="#">https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg</a>
      </li>
      <li>
        Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand
        2015.jpg|SKUelzen Vorstand 2015]]
        <a href="#">https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg</a>
      </li>
    </ul>
    <h3>Icons</h3>
    <ul>
      <li>
        Freepik <a href="#">(http://www.freepik.com)</a> /
        <a href="#">www.flaticon.com</a>
      </li>
    </ul>
  </footer>
</body>

</html>