<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery Mobile Docs - Sample Form Submit to Self</title>
    <link rel="stylesheet"  href="/css/jquery.mobile.css" />
    <link rel="stylesheet" href="/css/jqm-docs.css"/>

    <script src="/js/jquery.js"></script>
    <script src="/js/jqm-docs.js"></script>
    <script src="/js/js.js"></script>

  </head>
  <body>

    <div data-role="page" class="type-interior">

      <div data-role="header" data-theme="f">
        <h1>Sample form submit to self</h1>
        <a href="../../" data-icon="home" data-iconpos="notext" data-direction="reverse">Home</a>
        <a href="../nav.html" data-icon="search" data-iconpos="notext" data-rel="dialog" data-transition="fade">Search</a>
      </div><!-- /header -->

      <div data-role="content" data-theme="c">

        <form action="" method="post">

          <?php
          if ( isset ( $_REQUEST[ 'submit' ] ) ) {
            $submit = $_REQUEST[ 'submit' ] ;
          }
          else {
            $submit = "" ;
          }
          if ( isset ( $_REQUEST[ 'layout' ] ) ) {
            $layout = $_REQUEST[ 'layout' ] ;
          }
          else {
            $layout = "" ;
          }
          if ( isset ( $_REQUEST[ 'title' ] ) ) {
            $title = $_REQUEST[ 'title' ] ;
          }
          else {
            $title = "" ;
          }
          if ( isset ( $_REQUEST[ 'timeout' ] ) ) {
            $timeout = $_REQUEST[ 'timeout' ] ;
          }
          else {
            $timeout = "0" ;
          }
          if ( isset ( $_REQUEST[ 'transition' ] ) ) {
            $transition = $_REQUEST[ 'transition' ] ;
          }
          else {
            $transition = "" ;
          }
          ?>

          <div data-role="fieldcontain">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="diashow title"value="<?php echo $title ?>" />
          </div>

          <div data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal">
              <legend>Preview:</legend>
              <input type="radio" name="layout" id="layout-radio-a" value="List" <?php echo $layout == "List" ? "checked" : "" ?> />
              <label for="layout-radio-a">List</label>
              <input type="radio" name="layout" id="layout-radio-b" value="Grid" <?php echo $layout == "Grid" ? "checked" : "" ?> />
              <label for="layout-radio-b">Grid</label>
              <input type="radio" name="layout" id="layout-radio-c" value="Gallery" <?php echo $layout == "Gallery" ? "checked" : "" ?> />
              <label for="layout-radio-c">Gallery</label>
            </fieldset>
          </div>

          <div data-role="fieldcontain">
            <label for="timeout">Timeout:</label>
            <input type="range" name="timeout" id="timeout" value="<?php echo $timeout ?>" min="0" max="150" step="10" data-highlight="true"  />
          </div>

          <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
              <legend>Transition:</legend>
              <input type="radio" name="transition" id="transition-1" value="Pop" <?php echo $transition == "Pop" ? "checked" : "" ?>/>
              <label for="transition-1">Pop</label>

              <input type="radio" name="transition" id="transition-2" value="Fade" <?php echo $transition == "Fade" ? "checked" : "" ?> />
              <label for="transition-2">Fade</label>

              <input type="radio" name="transition" id="transition-3" value="Slide" <?php echo $transition == "Slide" ? "checked" : "" ?> />
              <label for="transition-3">Slide</label>
            </fieldset>
          </div>

          <button type="submit" name="submit" value="submit" data-theme="b">Submit</button>
        </form>

        <h2><?php echo $submit == "" ? "Please fill in the form and press submit" : "You chose:" ?></h2>
        <div class="ui-body ui-body-d ui-corner-all">
          <p>Title: <strong><?php echo $submit == "" ? "-" : $title ?></strong></p>
          <p>Preview: <strong><?php echo $submit == "" ? "-" : $layout ?></strong></p>
          <p>Timeout: <strong><?php echo $submit == "" ? "-" : $timeout ?></strong></p>
          <p>Transition: <strong><?php echo $submit == "" ? "-" : $transition ?></strong></p>
        </div>


      </div><!-- /content -->

      <div data-role="footer" class="footer-docs" data-theme="c">
        <p class="jqm-version"></p>
        <p>&copy; 2012 jQuery Foundation and other contributors</p>
      </div>

    </div><!-- /page -->

  </body>
</html>