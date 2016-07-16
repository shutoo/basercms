<?php
/**
 * BcContentsEventListener
 *
 * baserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2016, baserCMS Users Community <http://sites.google.com/site/baserusers/>
 *
 * @copyright		Copyright 2008 - 2016, baserCMS Users Community
 * @link			http://basercms.net baserCMS Project
 * @package			Baser.Event
 * @since			baserCMS v 3.1.0
 * @license			http://basercms.net/license/index.html
 */

/**
 * baserCMS Contents Event Listener
 *
 * 階層コンテンツと連携したフォーム画面を表示する為のイベント
 * BcContentsComponent でコントロールされる
 *
 * @package Baser.Event
 */
class BcContentsEventListener extends Object implements CakeEventListener {

/**
 * Implemented Events
 *
 * @return array
 */
	public function implementedEvents() {
		return array(
			'Helper.Form.beforeCreate' => array('callable' => 'formBeforeCreate'),
			'Helper.Form.afterCreate' => array('callable' => 'formAfterCreate'),
			'Helper.Form.afterSubmit' => array('callable' => 'formAfterSubmit')
		);
	}

/**
 * Form Before Create
 *
 * @param CakeEvent $event
 */
	public function formBeforeCreate(CakeEvent $event) {
		$event->data['options']['type'] = 'file';
	}

/**
 * Form After Create
 *
 * @param CakeEvent $event
 * @return string
 */
	public function formAfterCreate(CakeEvent $event) {
		$View = $event->subject();
		if(!preg_match('/(AdminEditForm|AdminEditAliasForm)$/', $event->data['id'])) {
			return;
		}
		return $event->data['out'] . "\n" . $View->element('admin/content_fields');
	}

/**
 * Form After Submit
 *
 * フォームの保存ボタンの前後に、一覧、プレビュー、削除ボタンを配置する
 * プレビューを配置する場合は、設定にて、preview を true にする
 *
 * @param CakeEvent $event
 * @return string
 */
	public function formAfterSubmit(CakeEvent $event) {
		$View = $event->subject();
		$data = $View->request->data;
		if(!preg_match('/(AdminEditForm|AdminEditAliasForm)$/', $event->data['id'])) {
			return;
		}
		$output = $View->BcHtml->link('一覧に戻る', array('plugin' => '', 'admin' => true, 'controller' => 'contents', 'action' => 'index'), array('class' => 'button'));
		$setting = Configure::read('BcContents.items.' . $data['Content']['plugin'] . '.' . $data['Content']['type']);
		if (!empty($setting['preview'])) {
			$output .= "\n" . $View->BcForm->button('プレビュー', array('class' => 'button', 'id' => 'BtnPreview'));
		}
		$output .= $event->data['out'];
		if(empty($data['Content']['site_root'])) {
			$output .= $View->BcForm->button('削除', array('class' => 'button', 'id' => 'BtnDelete'));
		}
		return $output;
	}

}