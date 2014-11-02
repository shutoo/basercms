<?php
/**
 * [MYPAGE] デフォルトレイアウト（デモ用）
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2014, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2014, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.View.layout
 * @since			baserCMS v 0.1.0
 * @license			http://basercms.net/license/index.html
 */
?>
<?php $this->BcBaser->xmlHeader() ?>
<?php $this->BcBaser->docType() ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
	<head>
		<?php $this->BcBaser->charset() ?>
		<?php $this->BcBaser->title() ?>
		<?php
		$this->BcBaser->css(array(
			'admin/jquery-ui/ui.all',
			'admin/import',
			'../js/admin/jquery.contextMenu-1.0/jquery.contextMenu',
			'admin/colorbox/colorbox'))
		?>
	<!--[if IE]><?php $this->BcBaser->js(array('admin/excanvas')) ?><![endif]-->
		<?php
		$this->BcBaser->js(array(
			'jquery-1.7.2.min',
			'jquery-ui-1.8.19.custom.min',
			'i18n/ui.datepicker-ja',
			'jquery.corner-2.12',
			'jquery.bt.min',
			'jquery.contextMenu-1.0/jquery.contextMenu',
			'jquery.form-2.94',
			'jquery.validate.min',
			'jquery.colorbox-min-1.4.5',
			'jquery.mScroll',
			'jquery.baseUrl',
			'credit',
			'validate_messages_ja',
			'functions',
			'startup',
			'adjust_scroll'))
		?>
<?php $this->BcBaser->scripts() ?>
	</head>
	<div id="BaseUrl" style="display: none"><?php echo $this->request->base ?></div>
	<body id="<?php $this->BcBaser->contentsName() ?>" class="normal">
		<!-- Waiting -->
		<div id="Waiting" class="waiting-box" style="display:none">
			<div class="corner10">
		<?php echo $this->Html->image('ajax-loader.gif') ?><br />
				W A I T
			</div>
		</div>
<?php $this->BcBaser->flash() ?>
<?php $this->BcBaser->content() ?>

<?php $this->BcBaser->func() ?>
	</body>
</html>
