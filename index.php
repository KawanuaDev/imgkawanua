<?php
include('imginator.php');

$sitename = 'imgkawanua';

function cssGlobal() {
  $cssList = array(
      "https://assets.kawanua.pp.ua/libs/bootstrap/4.3.1/css/bootstrap.min.css", 
      "https://fonts.kid.or.id/libs/font-awesome/5.11.2/css/all.min.css", 
      "assets/css/core.min.css" 
  );
  $cssSum = count($cssList);

  for($x = 0; $x < $cssSum; $x++) {
      echo '<link rel="stylesheet" href="' . $cssList[$x] . '">';
  }
}

function jsGlobal() {
  $jsList = array(
      "https://assets.kawanua.pp.ua/libs/jquery/3.4.1/jquery.min.js", 
      "https://assets.kawanua.pp.ua/libs/popper.js/1.15.0/umd/popper.min.js", 
      "https://assets.kawanua.pp.ua/libs/bootstrap/4.3.1/js/bootstrap.min.js", 
      "https://fonts.kid.or.id/libs/font-awesome/5.11.2/js/all.min.js",
      "assets/js/core.min.js"
  );
  $jsSum = count($jsList);

  for($x = 0; $x < $jsSum; $x++) {
      echo '<script defer src="' . $jsList[$x] . '"></script>';
  }
}

function prefetchArray() {
  $fetchList = array(
      "//assets.kawanua.pp.ua", 
      "//assets.kid.or.id", 
      "//fonts.kid.or.id"
  );
  $fetchSum = count($fetchList);

  for($x = 0; $x < $fetchSum; $x++) {
      echo '<link rel="dns-prefetch" href="' . $fetchList[$x] . '">';
  }
}

if(isset($_GET['data'])){
  new imginator($_GET['data'], isset($_GET['text']) && $_GET['text'] != '' ? $_GET['text'] : false);
	exit;
}
else {
?>
<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $sitename; ?> - Kawanua ID</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Global CSS -->
    <?php cssGlobal(); ?>

    <link rel="icon" href="/favicon.ico">
  </head>
  <body>
    <header>

    </header>
    <main>
      <div class="container">

        <section id="content">
          <div class="info">
            <div id="what" class="area">
              <h1>What</h1>
              <p><?php echo $sitename; ?> is a simple image placeholder generator. It generates placeholder images, with a few options you can pass.</p>
            </div>

            <div id="how" class="area">
              <h1>How</h1>

              <h2>Size</h2>
              <p>You can set the size by passing the dimensions like <code>300x300</code> or just <code>300</code> for square images. The size is always the first option to pass.</p>
              <pre class="links">
              &lt;img src="<a href="//i.kawanua.id/300x300" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300" target="_blank"></a>"&gt;
              </pre>

              <h2>Color</h2>
              <p>You can set the background- & textcolor by passing hex color values like <code>/ccc/999</code>. First value (after the size) is the background color, the second is the text color. You can pass only the background color or both.</p>
              <pre class="links">
              &lt;img src="<a href="//i.kawanua.id/300/ccc" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc/999" target="_blank"></a>"&gt;
              </pre>

              <h2>Format</h2>
              <p>You can set the image format by adding the file extension (including the .) to any of the 3 options. The supported image formats are <code>.png</code>, <code>.gif</code>, <code>.jpg</code> and <code>.jpeg</code>. If you pass no image format, <code>.png</code> is used.</p>
              <pre class="links">
              &lt;img src="<a href="//i.kawanua.id/300.png/ccc/999" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc.gif/999" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc/999.jpg" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc.jpeg/999" target="_blank"></a>"&gt;
              </pre>
              <h2>Custom Text</h2>
              <p>You can set the text by passing another option like <code>&text=custom+text</code>. The <code>&text=</code> is always at the end. Spaces should be replaced by a <code>+</code>.</p>
              <pre class="links">
              &lt;img src="<a href="//i.kawanua.id/300&text=custom+text" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc&text=custom+text" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc/999&text=custom+text" target="_blank"></a>"&gt;
              &lt;img src="<a href="//i.kawanua.id/300/ccc.gif/999&text=custom+text" target="_blank"></a>"&gt;
              </pre>
            </div>

            <div id="examples" class="area">
              <h1>Examples</h1>
              <p>Checkout these examples, to see it in action.</p>

              <div class="grid">
                <div class="item"><img src="//i.kawanua.id/300" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300/090/fff.jpeg" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300x300" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300/000" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300/f60/000" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300&text=custom+text" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300.png/f00/fff" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300/ccc.gif/000" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300/fc0/000.jpg" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300x300/f60/000" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300.jpg/666/fff&text=custom+text" alt=""></div>
                <div class="item"><img src="//i.kawanua.id/300x300/cccccc/999999" alt=""></div>
              </div>
            </div>
          </div>

        </section>
        <footer>
          <?php echo $sitename; ?> © 2019<script>new Date().getFullYear()>2010&&document.write("-"+new Date().getFullYear());</script> <a href="https://github.com/KawanuaDev" target="_blank" rel="noopener noreferrer">KawanuaDev</a>.<br>
          <cite>Based from <a href="https://github.com/soDEVch/imginator" target="_blank">imginator</a> by Steve Ottoz.</cite>
        </footer>
      </div>
    </main>

    <!-- Global JavaScript -->
    <?php jsGlobal(); ?>
  </body>
</html>
<?php
};
?>
