<div id="header-line" class="clr">
<div id="header-structure">
<div id="logo">
<img class="logo" src="<?php echo $this->baseurl ?>/<?php echo "$selectlogo"; ?>" />
</div>
<?php if($this->countModules('header')) : ?>
<div id="header">
<jdoc:include type="modules" name="header" style="none" />
</div>
<?php endif; ?>
</div>
</div>
<?php if($this->countModules('toolbar') or $this->countModules('search')) : ?>
<div id="toolbar-line" class="clr">
<div id="toolbar-structure">
<div id="toolbar-bg">
<?php include dirname(__FILE__).DIRECTORY_SEPARATOR.'toolbar.php'; ?>
<?php if($this->countModules('search')) : ?>
<div id="search">
<jdoc:include type="modules" name="search" style="none" />
</div>
<?php endif; ?>
</div>
</div>
</div>
<div id="spacer-line" class="clr">
<div id="spacer-structure">
<div id="spacer-bg">
&nbsp;
</div>
</div>
</div>
<?php endif; ?>
<?php if($this->countModules('banner')) : ?>
<div id="banner-line" class="clr">
<div id="banner-structure">
<div id="banner-bg">
<jdoc:include type="modules" name="banner" style="none" />
</div>
</div>
</div>
<?php endif; ?>