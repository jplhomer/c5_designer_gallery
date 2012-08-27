<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<?php
/* You can loop through all of the images in the chosen file set with some code like this:
 *
 *   <?php foreach ($images as $img): ?>
 *       ...
 *   <?php endforeach; ?>
 *
 * Inside the loop, the following data is available about each image:
 *   $img->title : Image's "Title" attribute (set via File Manager properties). Note that C5 sets titles to the file name upon initial upload, so you might not want to display this if you don't expect users to edit them)
 *   $img->description : Image's "Description" attribute (set via File Manager properties) -- use this for captions
 *   $img->orig->src : Original (full-size) image src
 *   $img->orig->width : Original (full-size) image width (in pixels)
 *   $img->orig->height : Original (full-size) image height (in pixels)
 *   $img->large->src : Large image src
 *   $img->large->width : Large image width (in pixels)
 *   $img->large->height : Large image height (in pixels)
 *   $img->thumb->src : Thumbnail image src
 *   $img->thumb->width : Thumbnail image width (in pixels)
 *   $img->thumb->height : Thumbnail image height (in pixels)
 *   $img->titleRaw : Unescaped title (html entities are not encoded -- use with caution!)
 *   $img->descriptionRaw : Unescaped title (html entities are not encoded -- use with caution!)
 *   $img->fID : Image's File ID (assigned by Concrete5 when first uploaded)
 *   $img->LinkUrl : URL of a page that the image should link to when clicked (NOTE THAT THIS DOES NOT WORK OUT OF THE BOX -- SEE DOCUMENTATION FOR HOW TO SET THIS UP ON YOUR SITE)
 *
 * If you need to set a container width/height or pass in an overall width/height to your plugin, you can use these:
 *   <?php echo $maxOrigWidth ?>
 *   <?php echo $maxOrigHeight ?>
 *   <?php echo $maxLargeWidth ?>
 *   <?php echo $maxLargeHeight ?>
 *   <?php echo $maxThumbWidth ?>
 *   <?php echo $maxThumbHeight ?>
 *
 * As with all C5 block templates, the $bID (Block ID) variable is available. If you're using a jquery plugin,
 * you will want to output this variable as part of an id so that this block's images can be uniquely identified
 * (otherwise there will be problems if the user adds more than one of this block to the same page).
 */
?>

<div class="flexslider" id="slider<?php echo $bID ?>">
	<ul class="slides">
	<?php foreach ($images as $img): ?>
		<li>
			<?php if ($img->LinkUrl) { ?>
			<a href="<?php echo $img->LinkUrl; ?>">
			<img src="<?php echo $img->large->src ?>" width="<?php echo $img->large->width ?>" height="<?php echo $img->large->height ?>" alt="<?php echo $img->title; ?>" />
			</a>
			<?php } else { ?>
			<img src="<?php echo $img->large->src ?>" width="<?php echo $img->large->width ?>" height="<?php echo $img->large->height ?>" alt="<?php echo $img->title; ?>" />
			<?php } ?>
		</li>
	<?php endforeach; ?>
	</ul>
</div>

<?php
/* Turn boolean values in to literan 'true/false' values for our javascript */
$isAnimationLoop = ($animationLoop) ? 'true' : 'false';
$isPauseOnAction = ($pauseOnAction) ? 'true' : 'false';
$isPauseOnHover = ($pauseOnHover) ? 'true' : 'false';
$isUseCSS = ($useCSS) ? 'true' : 'false';
$isTouch = ($touch) ? 'true' : 'false';
$isControlNav = ($controlNav) ? 'true' : 'false';
$isDirectionNav = ($directionNav) ? 'true' : 'false';
?>

<script type="text/javascript">
$(document).ready(function() {
	$('#slider<?php echo $bID ?>').flexslider({
		'animation' : '<?php echo $animation; ?>',
		'animationLoop' : <?php echo $isAnimationLoop; ?>,
		'animationSpeed' : '<?php echo $animationSpeed; ?>',
		'slideshowSpeed' : '<?php echo $slideshowSpeed; ?>',
		'pauseOnAction' : <?php echo $isPauseOnAction; ?>,
		'pauseOnHover' : <?php echo $isPauseOnHover; ?>,
		'useCSS' : <?php echo $isUseCSS; ?>,
		'touch' : <?php echo $isTouch; ?>,
		'controlNav' : <?php echo $isControlNav; ?>,
		'directionNav' : <?php echo $isDirectionNav; ?>,
		'prevText' : '<?php echo $prevText; ?>',
		'nextText' : '<?php echo $nextText; ?>',
		'itemWidth' : '<?php echo $itemWidth; ?>',
		'itemHeight' : '<?php echo $itemHeight; ?>',
		'minItems' : '<?php echo $minItems; ?>',
		'maxItems' : '<?php echo $maxItems; ?>'		
	});
});
</script>