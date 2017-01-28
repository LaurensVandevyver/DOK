    <header>
      <?php include 'nav.php';?>
    </header>

    <main>
      <section class="detail">
        <div class="detail-title-wrapper">
          <p class="detail-date space alberto"><?php echo $event['date']; ?></p>
          <h1 class="detail-title space alberto"><?php echo $event['title'];?></h1>
        </div>
        <img class="detail-item-image" src="assets/img/<?php echo $event['picture_filename']; ?>" alt="">
        <p class="detail-description"><?php echo $event['description']; ?></p>
      </section>
    </main>

    <?php include 'footer.php';?>
