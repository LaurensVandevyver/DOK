<header>
  <?php include 'nav.php';?>
</header>

<main>
  <div class="container">
    <div class="error-wrapper">
      <h2 class="errortitle alberto">Bedankt!</h2>
      <p class="errormessage"><?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?></p>
    <a class="terugbutton alberto" href="index.php">Terug</a>
    </div>
  </div>
</main>

<?php include 'footer.php'; ?>
