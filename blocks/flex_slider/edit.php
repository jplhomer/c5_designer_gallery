<?php defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<style type="text/css">
	div.ccm-pane-controls label {
		font-weight: normal !important;
		margin-bottom: 0;
	}
	.gallery-display-table {
		width:100%;
		padding-bottom: 10px;
	}
	.gallery-display-table td {
		padding: 10px 0;
		border-bottom: 1px dotted gray;
	}
	.gallery-display-table td.label {
		text-align: right;
		padding-right: 3px;
	}
	.gallery-display-table input {
		text-align: center;
		width: 30px;
	}
</style>

<table border="0" cellpadding="0" cellspacing="0" class="gallery-display-table">
	<tr><td class="label">
		<?php echo $form->label('fsID', t('File Set:')); ?>
	</td><td colspan="5">
		<select id="fsID" name="fsID">
			<option value="0"><?php echo t('Loading&hellip;'); ?></option>
		</select>
		&nbsp;&nbsp;&nbsp;
		[<a href="#" id="fileManagerLink"><?php echo t('Open File Manager&hellip;'); ?></a>]
	</td></tr>
	
	<tr><td class="label">
		<?php echo $form->label('randomize', t('Display Order:')); ?>
	</td><td colspan="5">
		<?php echo $form->select('randomize', array('0' => t('Fileset Order'), '1' => t('Random Order')), $randomize); ?>
	</td></tr>

	<tr <?php echo $showLargeControls ? '' : 'style="display:none;"'; ?>>
		<td class="label">
			<?php echo $form->label('cropLarge', t('Size Options:')); ?>
		</td><td>
			<?php echo $form->select('cropLarge', array('-1' => t('Keep Original Size'), '0' => t('Shrink Proportionally'), '1' => t('Crop To Fit')), $cropLarge); ?>
		</td><td class="label">
			<?php echo $form->label('largeWidth', t('Width:')); ?>
		</td><td>
			<?php echo $form->text('largeWidth', $largeWidth); ?> px
		</td><td class="label">
			<?php echo $form->label('largeHeight', t('Height:')); ?>
		</td><td>
			<?php echo $form->text('largeHeight', $largeHeight); ?> px
		</td>
	</tr>
	
	<tr <?php echo $showThumbControls ? '' : 'style="display:none;"'; ?>>
		<td class="label">
			<?php echo $form->label('cropThumb', t('Thumbnail Options:')); ?>
		</td><td>
			<?php echo $form->select('cropThumb', array('0' => t('Shrink Proportionally'), '1' => t('Crop To Fit')), $cropThumb); ?>
		</td><td class="label">
			<?php echo $form->label('thumbWidth', t('Width:')); ?>
		</td><td>
			<?php echo $form->text('thumbWidth', $thumbWidth); ?> px
		</td><td class="label">
			<?php echo $form->label('thumbHeight', t('Height:')); ?>
		</td><td>
			<?php echo $form->text('thumbHeight', $thumbHeight); ?> px
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('animation', t('Animation')); ?>
		</td><td>
			<?php echo $form->select('animation', array('fade' => t('Fade'), 'slide' => t('Slide')), $animation); ?>
		</td><td colspan="3">
			<p>String Controls the animation type, "Fade" or "Slide".</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('direction', t('Direction')); ?>
		</td><td>
			<?php echo $form->select('direction', array('horizontal' => t('Horizontal'), 'vertical' => t('Vertical')), $direction); ?>
		</td><td colspan="3">
			<p>Controls the animation direction, "horizontal" or "vertical"</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('animationLoop', t('Animation Loop')); ?>
		</td><td>
			<?php echo $form->radio('animationLoop', 1, $animationLoop); ?>
			Yes
		</td><td>
			<?php echo $form->radio('animationLoop', 0, $animationLoop); ?>
			No
		</td><td colspan="2">
			<p>Gives the slider a seamless infinite loop.</p>
		</td>
	</tr>

	<tr>
		<td class="label">
			<?php echo $form->label('slideshowSpeed', t('Slideshow Speed')); ?>
		</td><td>
			<?php echo $form->text('slideshowSpeed', $slideshowSpeed); ?>
		</td><td colspan="3">
			<p>Set the speed of the slideshow cycling, in milliseconds</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('animationSpeed', t('Animation Speed')); ?>
		</td><td>
			<?php echo $form->text('animationSpeed', $animationSpeed); ?>
		</td><td colspan="3">
			<p>Set the speed of animations, in milliseconds</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('pauseOnAction', t('Pause on Action')); ?>
		</td><td>
			<?php echo $form->radio('pauseOnAction', 1, $pauseOnAction); ?>
			Yes
		</td><td>
			<?php echo $form->radio('pauseOnAction', 0, $pauseOnAction); ?>
			No
		</td><td colspan="2">
			<p>Pause the slideshow when interacting with control elements.</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('pauseOnHover', t('Pause on Hover')); ?>
		</td><td>
			<?php echo $form->radio('pauseOnHover', 1, $pauseOnHover); ?>
			Yes
		</td><td>
			<?php echo $form->radio('pauseOnHover', 0, $pauseOnHover); ?>
			No
		</td><td colspan="2">
			<p>Pause the slideshow when hovering over slider, then resume when no longer hovering.</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('useCSS', t('Use CSS Transitions')); ?>
		</td><td>
			<?php echo $form->radio('useCSS', 1, $useCSS); ?>
			Yes
		</td><td>
			<?php echo $form->radio('useCSS', 0, $useCSS); ?>
			No
		</td><td colspan="2">
			<p>Slider will use CSS3 transitions, if available</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('touch', t('Allow Touch Swipe')); ?>
		</td><td>
			<?php echo $form->radio('touch', 1, $touch); ?>
			Yes
		</td><td>
			<?php echo $form->radio('touch', 0, $touch); ?>
			No
		</td><td colspan="2">
			<p>Allow touch swipe navigation of the slider on enabled devices</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('controlNav', t('Control Navigation')); ?>
		</td><td>
			<?php echo $form->radio('controlNav', 1, $controlNav); ?>
			Yes
		</td><td>
			<?php echo $form->radio('controlNav', 0, $controlNav); ?>
			No
		</td><td colspan="2">
			<p>Create navigation for paging control of each slide.</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('directionNav', t('Directional Navigation')); ?>
		</td><td>
			<?php echo $form->radio('directionNav', 1, $directionNav); ?>
			Yes
		</td><td>
			<?php echo $form->radio('directionNav', 0, $directionNav); ?>
			No
		</td><td colspan="2">
			<p>Create previous/next arrow navigation.</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('prevText', t('Previous Text')); ?>
		</td><td>
			<?php echo $form->text('prevText', $prevText); ?>
		</td><td colspan="3">
			<p>Set the text for the "previous" directionNav item</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('nextText', t('Next Text')); ?>
		</td><td>
			<?php echo $form->text('nextText', $nextText); ?>
		</td><td colspan="3">
			<p>Set the text for the "next" directionNav item</p>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('itemWidth', t('Item Width')); ?>
		</td><td>
			<?php echo $form->text('itemWidth', $itemWidth); ?>
		</td>
		<td class="label">
			<?php echo $form->label('itemMargin', t('Item Margin')); ?>
		</td><td>
			<?php echo $form->text('itemMargin', $itemMargin); ?>
		</td>
	</tr>
	
	<tr>
		<td class="label">
			<?php echo $form->label('minItems', t('Minimum Items')); ?>
		</td><td>
			<?php echo $form->text('minItems', $minItems); ?>
		</td>
		<td class="label">
			<?php echo $form->label('maxItems', t('Maximum Items')); ?>
		</td><td>
			<?php echo $form->text('maxItems', $maxItems); ?>
		</td>
	</tr>
</table>

<script type="text/javascript">
var FILESETS_URL = '<?php echo $filesetsToolURL ?>';
refreshFilesetList(<?php echo $fsID ?>);
</script>
