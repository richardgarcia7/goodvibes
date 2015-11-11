<?php

defined('_JEXEC') or die;

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$slides          = $this->params->get('slides');
$shadows         = $this->params->get('shadows');
$headHeigh	     = $this->params->get('headHeigh');
$socialCode         = $this->params->get ('socialCode');
$jukenburn_thumb1 	= $this->params->get('jukenburn_thumb1', '' );
$jukenburn_thumb2 	= $this->params->get('jukenburn_thumb2', '' );
$jukenburn_thumb3 	= $this->params->get('jukenburn_thumb3', '' );
$jukenburn_thumb4 	= $this->params->get('jukenburn_thumb4', '' );
$jukenburn_thumb5 	= $this->params->get('jukenburn_thumb5', '' );
$jukenburn_thumb6 	= $this->params->get('jukenburn_thumb6', '' );
$jukenburn_image1 	= $this->params->get('jukenburn_image1', '' );
$jukenburn_image2 	= $this->params->get('jukenburn_image2', '' );
$jukenburn_image3 	= $this->params->get('jukenburn_image3', '' );
$jukenburn_image4 	= $this->params->get('jukenburn_image4', '' );
$jukenburn_image5 	= $this->params->get('jukenburn_image5', '' );
$jukenburn_image6 	= $this->params->get('jukenburn_image6', '' );
$jukenburn_texts1 	= $this->params->get('jukenburn_texts1', '' );
$jukenburn_texts2 	= $this->params->get('jukenburn_texts2', '' );
$jukenburn_texts3 	= $this->params->get('jukenburn_texts3', '' );
$jukenburn_texts4 	= $this->params->get('jukenburn_texts4', '' );
$jukenburn_texts5 	= $this->params->get('jukenburn_texts5', '' );
$jukenburn_texts6 	= $this->params->get('jukenburn_texts6', '' );
$jukenburn_text1 	= $this->params->get('jukenburn_text1', '' );
$jukenburn_text2 	= $this->params->get('jukenburn_text2', '' );
$jukenburn_text3 	= $this->params->get('jukenburn_text3', '' );
$jukenburn_text4 	= $this->params->get('jukenburn_text4', '' );
$jukenburn_text5 	= $this->params->get('jukenburn_text5', '' );
$jukenburn_text6 	= $this->params->get('jukenburn_text6', '' );
$jukenburn_desc1 	= $this->params->get('jukenburn_desc1', '' );
$jukenburn_desc2 	= $this->params->get('jukenburn_desc2', '' );
$jukenburn_desc3 	= $this->params->get('jukenburn_desc3', '' );
$jukenburn_desc4 	= $this->params->get('jukenburn_desc4', '' );
$jukenburn_desc5 	= $this->params->get('jukenburn_desc5', '' );
$jukenburn_desc6 	= $this->params->get('jukenburn_desc6', '' );
$jukenburn_info1 	= $this->params->get('jukenburn_info1', '' );
$jukenburn_info2 	= $this->params->get('jukenburn_info2', '' );
$jukenburn_info3 	= $this->params->get('jukenburn_info3', '' );
$jukenburn_info4 	= $this->params->get('jukenburn_info4', '' );
$jukenburn_info5 	= $this->params->get('jukenburn_info5', '' );
$jukenburn_info6 	= $this->params->get('jukenburn_info6', '' );
$jukenburn_desc1 	= $this->params->get('jukenburn_desc1', '' );
$jukenburn_desc2 	= $this->params->get('jukenburn_desc2', '' );
$jukenburn_desc3 	= $this->params->get('jukenburn_desc3', '' );
$jukenburn_desc4 	= $this->params->get('jukenburn_desc4', '' );
$jukenburn_desc5 	= $this->params->get('jukenburn_desc5', '' );
$jukenburn_desc6 	= $this->params->get('jukenburn_desc6', '' );

if ($jukenburn_thumb1 || $jukenburn_thumb2 || $jukenburn_thumb3 || $jukenburn_thumb4 || $jukenburn_thumb5) {
// use images from template manager
} else {
// use default images
$jukenburn_thumb1 = $this->baseurl . '/templates/' . $this->template . '/slider/header01.jpg';
$jukenburn_thumb2 = $this->baseurl . '/templates/' . $this->template . '/slider/header02.jpg';
}

?>

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/slider/css/style.css" type="text/css" />
<style>
.fullwidthbanner-container{
width:100% !important;		
position:relative;
padding:0;
margin: 0px;
max-height:500px !important;
overflow:hidden;
background-repeat: repeat;
background-position:center;
}
</style>
<section id="slider" class="sliderpot">
<div class="fullwidthbanner-container">
<div class="fullwidthbanner">          
<ul>
<?php if ($jukenburn_thumb1): ?>
<!-- FADE -->
<li data-transition="fade" data-slotamount="4" > <img src="<?php echo $jukenburn_thumb1; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb2): ?>
<!-- SLIDEUP -->
<li data-transition="" data-slotamount="15" > <img src="<?php echo $jukenburn_thumb2; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb3): ?>
<!-- SLIDEUP -->
<li data-transition="" data-slotamount="10" > <img src="<?php echo $jukenburn_thumb3; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb4): ?>
<!-- SLIDEUP -->
<li data-transition="" data-slotamount="10"> <img src="<?php echo $jukenburn_thumb4; ?>">
</li>
<?php endif;?>
<?php if ($jukenburn_thumb5): ?>
<!-- SLIDEUP -->
<li data-transition="" data-slotamount="12"> <img src="<?php echo $jukenburn_thumb5; ?>">
</li>
<?php endif;?>
</ul>
<div class="tp-bannertimer"></div>
</div>
</div>
</section>
<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/jquery.plugins.min.js"></script>
<script type = "text/javascript" src = "<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slider/js/jquery.revolution.min.js"></script>		
<script type="text/javascript">								
var tpj=jQuery;
tpj.noConflict();				
tpj(document).ready(function() {				
if (tpj.fn.cssOriginal!=undefined)
tpj.fn.css = tpj.fn.cssOriginal;
tpj('.fullwidthbanner').revolution(
{	
delay:5000,												
startwidth:890,
startheight:450,							
onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off
thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
thumbHeight:30,
thumbAmount:3,
hideThumbs:10,
navigationType:"bullet",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none
navigationStyle:"square",				//round,square,navbar
touchenabled:"on",						// Enable Swipe Function : on/off
navOffsetHorizontal:0,
navOffsetVertical:20,
fullWidth:"on",
shadow:3,								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
stopLoop:"off"							// on == Stop loop at the last Slie,  off== Loop all the time.		
});	
});
</script>
  

