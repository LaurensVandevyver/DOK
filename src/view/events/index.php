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

  <?php include 'nav.php';?>

  <div class="logo"></div>
  <div class="datum alberto">1 mei tot 25 sept</div>
  <div class="headerimg"><h1 class="hidden">DOK</h1><p class="headerdatum alberto">1 mei tot 25 sept</p></div>
  <p class="description alberto">Vanaf 1 mei tot 25 september opent DOK weer iedere zondag zijn deuren! <br/> De kantine, speeltuin, park inclusief strand, de DOKbox en zo veel meer staan al weer op je te wachten! <br/> Tot dan! </p>
</header>

<main>

  <h1 class="titles alberto space">Binnenkort</h1>

  <section class="binnenkort space">

    <?php foreach($events as $event): ?>
      <article class="agenda-item-main">
        <div class="title-wrapper alberto">
          <div class="main-date"><?php echo $event['date']; ?></div>
          <?php echo $event['title'];?>
        </div>
        <div class="card">
          <img class="agenda-item-image" src="assets/img/<?php echo $event['picture_filename']; ?>" alt="">
          <p class="agenda-item-description">
            <?php echo $event['shortdescription'];?>
          </p>
        </div>
        <div class="agenda-button2 alberto">
        <?php echo "<a href='index.php?page=detail&amp;id=".$event['id']."'>Meer info</a>" ?>
        </div>
      </article>
    <? endforeach;?>

  </section>

  <a  class="programmabutton alberto space" href="index.php?page=agenda">Volledig Programma</a>

  <h1 class="titles alberto space">op dok</h1>

  <section class="opdok-mobile space">

      <article class="red mobile-block">
        <input id="tab1" type="radio" name="tab" />
        <h2 class="alberto"><label for="tab1">Kantine</label></h2>
        <div class="reveal">
          <p>De kantine is het hart van DOK. Je kan er naar concerten, films, performances, try-outs, exposities, lezingen, dj’s en nog veel meer komen kijken. </p>
        </div>
      </article>

      <article class="blue mobile-block">
        <input id="tab2" type="radio" name="tab" />
        <h2 class="alberto"><label for="tab2">Box</label></h2>
        <div class="reveal">
          <p>DOKbox (onder DOKmarkt) is een intieme black box met tribune, podium en bankjes geschikt voor allerlei activiteiten zoals theatershows en akoestische performances. </p>
        </div>
      </article>

      <article class="yellow mobile-block">
        <input id="tab3" type="radio" name="tab" />
        <h2 class="alberto"><label for="tab3">Markt</label></h2>
        <div class="reveal">
          <p>DOKmarkt is de overdekte zone en uitloper van de loods. Een zone voor sport en spel, met doelen voor minivoetbal, een basketbalring. Maar ook de plek van de DOK(rommel)markt.</p>
        </div>
      </article>

      <article class="red mobile-block">
        <input id="tab4" type="radio" name="tab" />
        <h2 class="alberto"><label for="tab4">Strand en terras</label></h2>
        <div class="reveal">
          <p>Naast ons park kan je ons strand en terras vinden, kom zonnebaden midden in Gent aan het koele water of geniet van een drankje op ons terras!</p>
        </div>
      </article>

      <article class="blue mobile-block">
        <input id="tab5" type="radio" name="tab" />
        <h2 class="alberto"><label for="tab5">Arena</label></h2>
        <div class="reveal">
          <p>Amfitheater naar Grieks model opgebouwd uit aarde en gras. Om naar mooie en intieme voorstellingen te kijken onder een stralende zon of een blinkende sterrenhemel.</p>
        </div>
      </article>

      <article class="yellow mobile-block">
        <input id="tab6" type="radio" name="tab" />
        <h2 class="alberto"><label for="tab6">Park</label></h2>
        <div class="reveal">
          <p>DOKpark verbindt het strand, de moestuin en de arena met elkaar. Zoals ieder jaar zal DOKpark er ook dit seizoen er weer anders uitzien. Het strand en de groene zone worden wat groter. </p>
        </div>
      </article>

    </section>

    <section class="opdok space">

      <div class="red block kantine">
        <h2 class="block-title alberto">Kantine</h2>
        <p class="block-description alberto">De kantine is het hart van DOK. Je kan er naar concerten, films, performances, try-outs, exposities, lezingen, dj’s en nog veel meer komen kijken. </p>
        <a class="block-link alberto" href="#"><div class="redlink">Meer info</div></a>
      </div>
      <div class="blue block box test">
        <h2 class="block-title alberto">Box</h2>
        <p class="block-description alberto">DOKbox (onder DOKmarkt) is een intieme black box met tribune, podium en bankjes geschikt voor allerlei activiteiten zoals theatershows en akoestische performances. </p>
        <a class="block-link alberto" href="#"><div class="bluelink">Meer info</div></a>
      </div>
      <div class="yellow block markt">
        <h2 class="block-title alberto">Markt</h2>
        <p class="block-description alberto">DOKmarkt is de overdekte zone en uitloper van de loods. Een zone voor sport en spel, met doelen voor minivoetbal, een basketbalring. Maar ook de plek van de DOK(rommel)markt.</p>
        <a class="block-link alberto" href="#"><div class="yellowlink">Meer info</div></a>
      </div>
      <div class="red block strand">
        <h2 class="block-title alberto">Strand en terras</h2>
        <p class="block-description alberto">Naast ons park kan je ons strand en terras vinden, kom zonnebaden midden in Gent aan het koele water of geniet van een drankje op ons terras!</p>
        <a class="block-link alberto" href="#"><div class="redlink">Meer info</div></a>
      </div>
      <div class="blue block arena">
        <h2 class="block-title alberto">Arena</h2>
        <p class="block-description alberto">Amfitheater naar Grieks model opgebouwd uit aarde en gras. Om naar mooie en intieme voorstellingen te kijken onder een stralende zon of een blinkende sterrenhemel.</p>
        <a class="block-link alberto" href="#"><div class="bluelink">Meer info</div></a>
      </div>
      <div class="yellow block park">
        <h2 class="block-title alberto">Park</h2>
        <p class="block-description alberto">DOKpark verbindt het strand, de moestuin en de arena met elkaar. Zoals ieder jaar zal DOKpark er ook dit seizoen er weer anders uitzien. Het strand en de groene zone worden wat groter. </p>
        <a class="block-link alberto" href="#"><div class="yellowlink">Meer info</div></a>
      </div>

    </section>

  <h1 class="titles alberto space">dok nieuws</h1>

  <section class="doknieuws">
    <div>
    <p class="newstext">Hou je van dok? Wil je het laatste nieuws in je inbox? Schrijf je in voor onze nieuwsbrief! We sturen je enkel het belangrijkste, zo houden we je mailbox proper voor andere zaken! </p>
    <form class="nieuwsbrief" action="index.php" method="post">
      <div class="inputwrapper">
        <p class="error"></p>
        <label class="inputlabel alberto" for="email">Email:</label>
        <input class="emailinput" type="email" name="email" placeholder="info@dokgent.be" required>
      </div>
      <input type="submit" class="verstuurbutton alberto" value="Versturen">
    </form>
  </div>
  <div>
    <div class="sfeerimage"></div>
  </div>
  </section>

</main>

<?php include 'footer.php';?>

</body>

</html>
