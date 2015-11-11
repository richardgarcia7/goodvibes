<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Stools Framework   
# ---------------------------------------------------------------
# Author - joomla2you http://www.joomla2you.com
# Copyright (C) 2008 - 2014 joomla2you.com. All Rights Reserved.
# Websites: http://www.joomla2you.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/frame.php');
$jversion = new JVersion;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$stools->loadHead();
$stools->addCSS('template.css,joomla.css,menu.css,override.css,modules.css');
if ($stools->isRTL()) $stools->addCSS('template_rtl.css');
?>
<?php
if ($this->params->get('niceScroll') =="1" ) { ?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.nicescroll.js"></script> 
<script type="text/javascript">
jQuery(document).ready(
function() { 
jQuery("html").niceScroll();
}
);	
</script>
<?php } ?>
</head>
<?php $stools->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $stools->direction . ' ' . $stools->style ?> clearfix">
<?php $stools->addFeatures('cpanel'); ?>

<header id="header">
<div id="trueHeader">
<div class="ju-base">	
<?php 
$stools->addFeatures('logo');//Logo
?>
<?php 
$stools->addModules("mainmenu"); //position mainmenu
?>
</div>
<div class="clearfix">
</div>	
</div>
</header> 
<?php if ($stools->showSlideItem()): ?>
<div id="slides">
<?php include 'slider/slider.php'; ?> 
</div>
<?php endif; ?>
<?php if ($this->countModules('header')): ?>
<div id="slides">
<div class="ju-base">
<?php 
$stools->addModules("header"); //position header
?>
</div>
</div>
<?php endif; ?>
<div id="tops">
<div class="ju-base">
<?php
$stools->addModules('top1, top2, top3, top4, top5, top6', 'ju_block', 'ju-userpos'); //positions top1-top6 
?>
</div>
</div>
<div class="ju-base main-bg clearfix">	
<?php 
$stools->addModules("breadcrumbs"); //breadcrumbs
?>
<div class="clearfix">
<?php $stools->loadLayout(); //mainbody ?>
</div>
<?php
$stools->addModules('bottom', 'ju_xhtml'); //bottom 
?>
</div>

<div class="bott_col">
<?php
$stools->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'ju_block', 'ju-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>

<!--Start Footer-->
<div id="ju-footer" class="clearfix">
<div class="ju-base">
<div class="cp">
<?php $stools->addFeatures('copyright,designed')  ?>					
</div>
<?php 
$stools->addFeatures('gotop');			
$stools->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->

<?php 
$stools->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>