<?php
use sgpb\AdminHelper;
$defaultData = ConfigDataHelper::defaultData();
$defaultConditions = $defaultData['freeConditions'];
?>

<div class="sgpb-wrapper">
	<div class="row">
		<div class="col-md-4">
			<label><?php _e('Select conditions', SG_POPUP_TEXT_DOMAIN);?></label>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-3">
			<?php echo AdminHelper::createSelectBox($defaultConditions, '', array('class' => 'js-sg-select2')); ?>
		</div>
	</div>
</div>
