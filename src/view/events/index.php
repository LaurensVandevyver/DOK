<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <title>Hello, doktest</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <script type="text/javascript">

    WebFontConfig = {
      custom: {
        families: ['alberto'],
        urls: ['assets/fonts/stylesheet.css']
      }
    };

    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
        '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();

  </script>

</head>

<body>

<header>
  <nav class="mainnav">
    <ul class="navlist">
      <li class="navlistitem alberto"><a href="#"><div class="navlogo"></div></a></li>
      <li class="navlistitem alberto"><a href="#">Agenda</a></li>
      <li class="navlistitem alberto"><a href="#">Info</a></li>
      <li class="navlistitem alberto dokhover"><a href="#">DOK</a>
        <ul class="dok-items">
          <li class="alberto dok-item">Gebruiken</li>
          <li class="alberto dok-item">Bewoners</li>
          <li class="alberto dok-item">Keuken</li>
          <li class="alberto dok-item">Sport</li>
          <li class="alberto dok-item">Tank</li>
        </ul>
      </li>
      <li class="navlistitem alberto"><a href="#">Zones</a></li>
    </ul>


  </nav>
  <div class="logo"></div>
  <div class="datum alberto">1 mei tot 25 sept</div>
  <div class="headerimg"><h1 class="hidden">DOK</h1><p class="headerdatum alberto">1 mei tot 25 sept</p></div>
  <p class="description alberto">Vanaf 1 mei tot 25 september opent DOK weer iedere zondag zijn deuren! De kantine, speeltuin, park inclusief strand de DOKbox en zo veel meer staan al weer op je te wachten! Tot dan! </p>
</header>

<main>

  <h1 class="titles alberto space">Binnenkort</h1>

  <section class="binnenkort">

    <?php foreach($events as $event): ?>
      <article class="agenda-item-main">
        <div class="title-wrapper alberto">
          <?php echo $event['start']; ?>
          <?php echo $event['title'];?>
        </div>
        <img class="agenda-item-image" src="assets/img/<?php echo $event['picture_filename']; ?>" alt="">
        <p class="agenda-item-description">
          <?php echo $event['shortdescription'];?>
        </p>
        <div class="agenda-button alberto">
        <?php echo "<a href='index.php?page=detail&amp;id=".$event['id']."'>Meer info</a>" ?>
        </div>
      </article>
    <? endforeach;?>

  </section>

  <div class="programmabutton alberto space">Volledig programma</div>

  <h1 class="titles alberto space">op dok</h1>

  <section class="opdok space">

    <div class="red block kantine alberto">Kantine</div>
    <div class="blue block box alberto">Box</div>
    <div class="yellow block markt alberto">Markt</div>
    <div class="red block strand alberto">Strand en terras</div>
    <div class="blue block arena alberto">Arena</div>
    <div class="yellow block park alberto">Park</div>

  </section>

  <h1 class="titles alberto space">dok nieuws</h1>

  <section class="doknieuws">
    <div>
    <p class="newstext">Hou je van dok? Wil je het laatste nieuws in je inbox? Schrijf je in voor onze nieuwsbrief! We sturen je enkel het belangrijkste, zo houden we je mailbox proper voor andere zaken! </p>
    <form class="nieuwsbrief" action="index.php" method="post">
      <div class="inputwrapper">
        <label class="inputlabel alberto" for="email">Email:</label>
        <p class="error"></p>
        <input class="input" type="email" name="email" placeholder="info@dokgent.be" required>
      </div>
      <input type="submit" class="verstuurbutton alberto" value="Versturen">
      <!--<button class="verstuurbutton alberto" type="button" name="button">Versturen</button>-->
    </form>
  </div>
  <div>
    <div class="sfeerimage"></div>
  </div>
  </section>

</main>

<footer>
  <section class="footerwrapper">
    <address class="location">
      DOK <br/>
      Splitsing Koopvaardijlaan – Afrikalaan <br/>
      9000 Gent <br/>
      info@dokgent.be <br/>
      09 224 19 40 <br/>
    </address>
    <address class="post">
      DOKvzw (postadres) <br/>
      Toekomststraat 7 <br/>
      9040 Sint-Amandsberg <br/>
    </address>
  </section>
</footer>

<section class="sponsors">
  <a href="#"><img src="/assets/img/sponsor1.png" alt="logo vlaamse overheid"></a>
  <a href="#"><img src="/assets/img/sponsor2.png" alt="logo stad gent"></a>
  <a href="#"><img src="/assets/img/sponsor3.png" alt="logo thuis in de stad"></a>
  <a href="#"><img src="/assets/img/sponsor4.png" alt="logo sogent"></a>
  <a href="#"><img src="/assets/img/sponsor5.png" alt="logo irq"></a>
  <a href="#"><img src="/assets/img/sponsor6.png" alt="logo demo"></a>
  <a href="#"><img src="/assets/img/sponsor7.png" alt="logo vedett"></a>
  <a href="#"><img src="/assets/img/sponsor8.png" alt="logo pepsi"></a>
  <a href="#"><img src="/assets/img/sponsor9.png" alt="logo bionade"></a>
  <a href="#"><img src="/assets/img/sponsor10.png" alt="logo biofresh"></a>
  <a href="#"><img src="/assets/img/sponsor11.png" alt="logo eaulala"></a>
</section>

</body>

</html>
