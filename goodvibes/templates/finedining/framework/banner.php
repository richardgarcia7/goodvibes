<?php if($bannerwidth=="fix") { ?><div id="spacer" class="clr">&nbsp;</div><?php } ?>
<?php if($this->countModules('banner')) : ?>
<div id="banner-outer" class="clr">
<div<?php if($bannerwidth=="fix") { echo ' id="banner-inner"'; } ?>>
<jdoc:include type="modules" name="banner" style="none" />
</div>
</div>
<?php endif; ?>