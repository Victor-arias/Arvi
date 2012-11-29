<?php
// No direct access.
defined('_JEXEC') or die;

JHtml::_('behavior.framework', true);
JFactory::getDocument()->setGenerator('');

$app            = JFactory::getApplication();
$doc            = JFactory::getDocument();
$templateparams = $app->getTemplate(true)->params;
$menu           =& JSite::getMenu();
$active         = $menu->getActive();

$home           = false;
if ($active->home == 1) $home = true;

$lateral        = false;
if($this->countModules('lateral')) $lateral = true;

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
  <head>
    <meta charset="utf-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/jquery-1.8.3.min.js"><\/script>')</script>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css">
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" type="text/css" />
    <![endif]-->
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <div class="nav-bar">
          <jdoc:include type="modules" name="top-bar" style="xhtml" />
      </div>
    <div class="container">
      <header>
          <jdoc:include type="modules" name="header" style="xhtml" />
      </header>
      <nav>
        <jdoc:include type="modules" name="menu" style="none" />
      </nav>
      <section id="content" <?php if($home) echo"class='home'" ?>>
      <?php if($home): ?>
        <div id="banner">
          <jdoc:include type="modules" name="banner" style="none" />
        </div>
        <div id="top">
          <jdoc:include type="modules" name="top" style="none" />
        </div>
        <div id="middle">
          <jdoc:include type="modules" name="middle" style="none" />
        </div> 
        <div id="bottom">
          <jdoc:include type="modules" name="bottom" style="xhtml" />
        </div>    
      <?php else: ?>
        <jdoc:include type="modules" name="breadcrumbs" style="none" />
        <?php if($lateral): ?>
          <div id="lateral">
            <jdoc:include type="modules" name="lateral" style="xhtml" />
          </div>
        <?php endif; ?>
        <div id="main_content" <?php if(!$lateral): ?>class="full"<?php endif; ?> >
          <jdoc:include type="component" />
        </div>
      <?php endif; ?>
      </section>
      <footer>
        <jdoc:include type="modules" name="footer" style="none" />
      </footer>
    </div>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-__________-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>
