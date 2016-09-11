<!--
	jm_adabi Joomla 3.5+ template

	© Hadi Safari 2016
	hadisafari76[at]gmail.com
-->
<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<?php $app = JFactory::getApplication(); $params = $app->getTemplate(true)->params; ?>
<!doctype html>
<html lang="<?php echo $this->language; ?>"><head>
	<jdoc:include type="head" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php if ($this->params->get("favicon")) : ?>
	<link rel="icon" href="<?php echo $this->params->get("favicon") ?>"> 
	<?php endif; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css">
</head><body>
	<div id="navbar" class="withoutpad">
		<div id="logoholder" style="background-image: url(<?php echo $this->params->get("logoimg") ?>)">&nbsp;</div>
		<div id="navbar_btn"><span class="fa fa-bars"></span></div>
		<jdoc:include type="modules" name="position-1" style="none" />
	</div>
	<?php if ($this->countModules("slider")) : ?>
		<div id="sliderholder" class="withoutpad">
			<jdoc:include type="modules" name="slider" style="none" />
		</div>
	<?php endif; ?>
	<div id="component">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
	<?php if ($this->countModules("position-2")) : ?>
		<div id="breadcrumbholder" class="withoutpad">
			<jdoc:include type="modules" name="position-2" style="none" />
		</div>
	<?php endif; ?>
	<?php if ($this->countModules("about")) : ?>
		<div id="aboutus">
			<h3>دربارهٔ ما</h3>
			<ul>
				<jdoc:include type="modules" name="about" style="none" />
			</ul>
		</div>
	<?php endif; ?>
	<?php if ($this->countModules("contact")) : ?>
		<div id="contactus">
			<jdoc:include type="modules" name="contact" style="xhtml" />
		</div>
	<?php endif; ?>
	<?php if ($this->countModules("user-0") || $this->countModules("user-1") || $this->countModules("social")) : ?>
		<div id="footbar" class="withoutpad">
			<div class="userholder">
				<jdoc:include type="modules" name="user-0" style="xhtml" />
			</div>
			<div class="userholder">
				<jdoc:include type="modules" name="user-1" style="xhtml" />
			</div>
			<div id="socialholder" class="userholder">
				<jdoc:include type="modules" name="social" style="xhtml" />
			</div>
			<div class="clearfix"></div>
		</div>
	<?php endif; ?>
	<div id="footerholder" class="withoutpad">
		<jdoc:include type="modules" name="footer" style="none" />
		<small>اجرا‌شده با <a href="https://www.joomla.org/" target="_blank" rel="no-follow">جوملا!</a> | </small>
		<small>قالب: jm_adabi &nbsp; (طراحی قالب: <span title="hadisafari76[at]gmail.com">هادی صفری</span>)</small>
	</div>
	<jdoc:include type="modules" name="debug" />
	<?php JHtml::_('jquery.framework'); ?>
	<?php JHtml::script(Juri::base() . "templates/" . $this->template . "/js/script.js"); ?>
</body></html>