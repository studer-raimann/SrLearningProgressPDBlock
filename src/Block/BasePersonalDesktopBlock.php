<?php

namespace srag\Plugins\SrLearningProgressPDBlock\Block;

/**
 * Class BasePersonalDesktopBlock
 *
 * @package srag\Plugins\SrLearningProgressPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class BasePersonalDesktopBlock extends BaseBlock {

	/**
	 * @inheritdoc
	 */
	protected function enabled(): bool {
		return true;
	}


	/**
	 * @inheritdoc
	 */
	protected function initObjIds()/*: void*/ {
		$this->obj_ids = self::ilias()->courses()->getCoursesOfUser(self::dic()->user());
	}


	/**
	 * @inheritdoc
	 */
	protected function initTitle()/*: void*/ {
		$this->setTitle(self::dic()->language()->txt("trac_learning_progress") . " " . self::dic()->language()->txt("my_courses"));
	}
}