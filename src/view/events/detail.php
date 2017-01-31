    <header>
      <?php include 'nav.php';?>
    </header>

    <main>
      <section class="detail">
        <div class="detail-title-wrapper">
          <p class="detail-date space alberto"><?php echo $event['date']; ?></p>
          <h1 class="detail-title space alberto"><?php echo $event['title'];?></h1>
        </div>
        <div class="contentwrapper">
          <div class="imagewrapper">
            <img class="detail-item-image" src="assets/img/<?php echo $event['picture_filename']; ?>" alt="">
            <p class="detail-short"><?php echo $event['shortdescription']; ?></p>
          </div>
          <div class="bluebanner">
            <div class="bluebanner-wrapper">
            <div class="wrappy"><h2 class="detail-titles alberto space">Tags:</h2> <?php foreach($event['tags'] as $tag): ?><li class="detail-tag alberto space"><?php echo $tag['tag'];?></li><?php endforeach;?></ul></div>
            <div class="wrappy"><h2 class="detail-titles alberto space">Wanneer:</h2> <div class="detail-text space"><?php echo $event['start'] ?></div></div>
            <div class="wrappy"><h2 class="detail-titles alberto space">Waar: </h2> <?php foreach($event['locations'] as $location): ?><li class="detail-text"><?php echo $location['name'];?></li><?php endforeach;?></div>
          </div>
          <!--<dt>tags</dt><dd><ul><?php //foreach($event['tags'] as $tag): ?><li><?php //echo $tag['tag'];?></li><?php //endforeach;?></ul></dd>-->
          </div>
        <p class="detail-description"><?php echo $event['description']; ?></p>
      </div>
      </section>
    </main>

    <?php include 'footer.php';?>
