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
      <section class="detail">
        <div class="detail-title-wrapper">
          <p class="detail-date space alberto"><?php echo $event['date']; ?></p>
          <h1 class="detail-title space alberto"><?php echo $event['title'];?></h1>
        </div>
        <img class="detail-item-image" src="assets/img/<?php echo $event['picture_filename']; ?>" alt="">
        <p class="detail-description"><?php echo $event['description']; ?></p>
      </section>
    </main>
