<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="sidebar">
    <?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>
	</div><!-- sidebar -->
<div id="content">
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>