  <!-- MOBILE NAV -->
<div class="mobile-nav">
  <button class="hamburger">&#9776;</button>
</div>
<div class="menu">
<button class="closebutton">&#735;</button>
<div class="whitelogo space"></div>
  <form class="mobile-search-bar" action="index.php?page=agenda" method="get">
    <input type="text" height="30" class="zoekbalk-mobile" id="search" name="query" placeholder="Search..." value=""><br/>
    <input type="hidden" name="page" value="agenda">
    <input type="submit" name="action" value="Zoek" class="zoekbutton alberto">
  </form>
  <ul class="menu-wrapper alberto">
    <li class="mobile-navlistitem alberto"><a href="index.php">Home</a></li>
    <li class="mobile-navlistitem alberto"><a href="?page=agenda">Agenda</a></li>
    <li class="mobile-navlistitem alberto"><a href="#">Info</a></li>

    <li class="mobile-navlistitem alberto"><div class="dok">DOK</div>
      <ul class="dok-items">
        <li class="alberto dok-item"><az href="#">Gebruiken</a></li>
        <li class="alberto dok-item"><a href="#">Bewoners</a></li>
        <li class="alberto dok-item"><a href="#">Keuken</a></li>
        <li class="alberto dok-item"><a href="#">Sport</a></li>
        <li class="alberto dok-item"><a href="#">Tank</a></li>
      </ul>
    </li>

    <li class="mobile-navlistitem alberto">Zones
      <ul class="dok-items hidden">
        <li class="alberto dok-item"><a href="#">Kantine</a></li>
        <li class="alberto dok-item"><a href="#">Box</a></li>
        <li class="alberto dok-item"><a href="#">Markt</a></li>
        <li class="alberto dok-item"><a href="#">Strand en terras</a></li>
        <li class="alberto dok-item"><a href="#">Arena</a></li>
        <li class="alberto dok-item"><a href="#">Park</a></li>
      </ul>
    </li>

  </ul>
</div>

<!-- DESKTOP NAV -->
<nav class="mainnav">
  <ul class="navlist">
    <li class="navlistitem alberto"><a href="index.php"><div class="navlogo"></div></a></li>
    <li class="navlistitem alberto"><a href="?page=agenda">Agenda</a></li>
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
    <li class="navlistitem alberto dokhover"><a href="#">Zones</a>
      <ul class="dok-items">
        <li class="alberto dok-item"><a href="#">Kantine</a></li>
        <li class="alberto dok-item"><a href="#">Box</a></li>
        <li class="alberto dok-item"><a href="#">Markt</a></li>
        <li class="alberto dok-item"><a href="#">Strand en terras</a></li>
        <li class="alberto dok-item"><a href="#">Arena</a></li>
        <li class="alberto dok-item"><a href="#">Park</a></li>
      </ul>
    </li>
    <li class="navslistitem search">
      <form class="search-wrapper" action="index.php?page=agenda" method="get">
        <div class="search-icon"></div>
          <div class="search-bar">
            <input type="text" id="search" class="zoekbalk" name="query" placeholder="Search..."><br/>
            <input type="hidden" name="page" value="agenda">
            <input type="submit" name="action" value="Zoek" class="zoekbutton alberto">
          </div>
      </form>
    </li>
  </ul>


</nav>
