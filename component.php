<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!doctype html>
<html lang="<?php echo $this->language; ?>"><head>
	<jdoc:include type="head" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_simple.css">
</head><body>
  <h3 id="blogtitleholder">
	  <?php $app = JFactory::getApplication(); echo $app->getCfg( 'sitename' ); ?>
  </h3>
	<jdoc:include type="message" />
	<jdoc:include type="component" />
	<?php if ($this->countModules("position-2")) : ?>
		<div id="breadcrumbholder" class="withoutpad">
			<jdoc:include type="modules" name="position-2" style="none" />
		</div>
	<?php endif; ?>
	<?php if ($this->countModules("footer")): ?>
		<div id="footerholder" class="withoutpad">
			<?php echo Date("Y"); ?>
			&copy;
			<jdoc:include type="modules" name="footer" style="none" />
		</div>
	<?php endif; ?>
</body></html>