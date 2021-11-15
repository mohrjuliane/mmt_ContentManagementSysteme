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
        <?php
        $services_query = new WP_Query('order=ASC&cat=4');
        if ($services_query->have_posts()) :
          while ($services_query->have_posts()) :
            $services_query->the_post(); ?>

            <li style="background-color:<?php echo get_field("farbauswahl"); ?>">
              <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
                <?php the_post_thumbnail(); ?>
              </a>
            </li>
        <?php endwhile;

        endif;
        wp_reset_postdata(); ?>
      </ul>
    </section>
    <section id="News" class="max-width-container">
      <h2>News</h2>
      <ul>
        <?php
        $news_query = new WP_Query('order=DESC&cat=2');
        if ($news_query->have_posts()) :
          while ($news_query->have_posts()) :
            $news_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_content(); ?>
              <a href="<?php the_permalink(); ?>">[mehr erfahren]</a>
            </li>
          <?php endwhile;
        else : ?>
          <p>Erster Post demnächst...</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </ul>
    </section>
    <section id="References" class="max-width-container">
      <h2>Referenzen</h2>
      <div class="grid-container">
        <?php
        $references_query = new WP_Query('order=ASC&cat=3');
        if ($references_query->have_posts()) :
          while ($references_query->have_posts()) :
            $references_query->the_post(); ?>
            <article id="<?php the_title(); ?>" style="background-color:<?php echo get_field("farbauswahl"); ?>">
              <?php the_post_thumbnail(); ?>
              <div class="caption">
                <cite><?php echo get_field("name"); ?></cite>
                <p><?php echo get_field("jobtitel"); ?></p>
              </div>
              <blockquote>
                <?php echo get_field("zitat"); ?>
              </blockquote>
            </article>
        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
        <div id="quote">

          <img src="<?php echo get_template_directory_uri(); ?>/images/quotation_mark.svg" alt="quote icon" />

        </div>
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