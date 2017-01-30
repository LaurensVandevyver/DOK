    <header>
      <?php include 'nav.php';?>
    </header>

    <main>
      <h1 class="agendatitle alberto">Agenda</h1>
      <section class="groteagenda">
        <?php foreach($events as $event): ?>
          <article class="agenda-item-main <?php echo $event['id']; ?>">
            <div class="title-wrapper alberto">
            <h2 class="agenda-title"><?php echo $event['title'];?></h2>
            </div>
            <div class="card">
            <img class="agenda-item-image" src="assets/img/<?php echo $event['picture_filename']; ?>" alt=""><div class="picture-date alberto"><?php echo $event['date']; ?></div></img>
            <p class="agenda-item-description space"><?php echo $event['shortdescription'];?></p>
            </div>
            <div class="agenda-button2 alberto">
            <?php echo "<a href='index.php?page=detail&amp;id=".$event['id']."'>Meer info</a>" ?>
            </div>
          </article>
        <? endforeach;?>
      </section>
    </main>

    <?php include 'footer.php';?>

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
