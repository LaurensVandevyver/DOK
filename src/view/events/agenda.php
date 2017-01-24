<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
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
    </header>

    <main>
      <h1 class="agendatitle alberto">Agenda</h1>
      <section class="binnenkort">
        <?php foreach($events as $event): ?>
          <article class="agenda-item-main">
            <div class="title-wrapper alberto">
              <?php echo $event['start']; ?>
              <?php echo $event['title'];?>
            </div>
            <img src="assets/img/<?php echo $event['picture_filename']; ?>" width="300" alt="">
            <p class="agenda-item-description">
              <?php echo $event['shortdescription'];?>
            </p>
          </article>
        <? endforeach;?>
      </section>
    </main>


  </body>
</html>




<!--<section>
  <h1>Events</h1>
  <?php foreach($events as $event): ?>
    <article>
      <header><h2><?php echo $event['title']; ?></h2></header>
      <dl>
        <dt>start</dt><dd><?php echo $event['start'];?></dd>
        <dt>end</dt><dd><?php echo $event['end'];?></dd>
        <dt>organiser</dt><dd><?php echo $event['organiser'];?></dd>
        <dt>title</dt><dd><?php echo $event['title'];?></dd>
        <dt>locations</dt><dd><ul><?php foreach($event['locations'] as $location): ?><li><?php echo $location['name'];?></li><?php endforeach;?></ul></dd>
        <dt>tags</dt><dd><ul><?php foreach($event['tags'] as $tag): ?><li><?php echo $tag['tag'];?></li><?php endforeach;?></ul></dd>
        <dt>description</dt><dd><pre><?php echo $event['description'];?></pre></dd>
      </dl>
    </article>
  <? endforeach;?>
</section>-->
