<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DOK</title>
    <?php echo $css;?>
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

    <div class="container">

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>
  </body>
</html>
