<?php

namespace srag\CustomInputGUIs\SrLearningProgressPDBlock\LearningProgressPie;

use ilLearningProgressBaseGUI;
use ilLPObjSettings;
use ilLPStatus;
use ilObjectLP;
use ilTemplate;
use srag\DIC\SrLearningProgressPDBlock\DICTrait;

/**
 * Class LearningProgressPie
 *
 * @package srag\CustomInputGUIs\SrLearningProgressPDBlock\LearningProgressPie
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class LearningProgressPie {

	use DICTrait;
	const LP_STATUS = [
		ilLPStatus::LP_STATUS_NOT_ATTEMPTED_NUM,
		ilLPStatus::LP_STATUS_IN_PROGRESS_NUM,
		ilLPStatus::LP_STATUS_COMPLETED_NUM
		//ilLPStatus::LP_STATUS_FAILED_NUM
	];
	const LP_STATUS_COLOR = [
		ilLPStatus::LP_STATUS_NOT_ATTEMPTED_NUM => "#DDDDDD",
		ilLPStatus::LP_STATUS_IN_PROGRESS_NUM => "#F6D842",
		ilLPStatus::LP_STATUS_COMPLETED_NUM => "#BDCF32",
		ilLPStatus::LP_STATUS_FAILED => "#B06060"
	];
	/**
	 * @var bool
	 */
	protected static $init = false;
	/**
	 * @var int[]
	 */
	protected $obj_ids = [];
	/**
	 * @var int
	 */
	protected $usr_id;
	/**
	 * @var string
	 */
	protected $id;


	/**
	 * LearningProgressPie constructor
	 */
	public function __construct() {

	}


	/**
	 * @param array $obj_ids
	 *
	 * @return self
	 */
	public function withObjIds(array $obj_ids): self {
		$this->obj_ids = $obj_ids;

		return $this;
	}


	/**
	 * @param int $usr_id
	 *
	 * @return self
	 */
	public function withUsrId(int $usr_id): self {
		$this->usr_id = $usr_id;

		return $this;
	}


	/**
	 * @param string $id
	 *
	 * @return self
	 */
	public function withId(string $id): self {
		$this->id = $id;

		return $this;
	}


	/**
	 *
	 */
	private function initJs()/*: void*/ {
		if (self::$init === false) {
			self::$init = true;

			$dir = __DIR__;
			$dir = "./" . substr($dir, strpos($dir, "/Customizing/") + 1);

			self::dic()->mainTemplate()->addJavaScript($dir . "/../../node_modules/d3/dist/d3.min.js");
		}
	}


	/**
	 * @return string
	 */
	public function render(): string {
		if (count($this->obj_ids) > 0) {

			$data = array_reduce($this->obj_ids, function (array $data, int $obj_id): array {
				$status = $this->getStatus($obj_id);

				if (!isset($data[$status])) {
					$data[$status] = 0;
				}

				$data[$status] ++;

				return $data;
			}, []);

			$data = array_filter($data, function (int $data): bool {
				return ($data > 0);
			});

			$data = array_map(function (int $status) use ($data): array {
				return [
					"color" => self::LP_STATUS_COLOR[$status],
					"label" => $data[$status],
					"title" => $this->getText($status),
					"value" => $data[$status]
				];
			}, self::LP_STATUS);

			$data = array_values($data);

			if (count($data) > 0) {
				$this->initJs();

				$tpl = new ilTemplate(__DIR__ . "/templates/chart.html", false, false);

				$tpl->setVariable("ID", $this->id);
				$tpl->setVariable("DATA", json_encode($data));
				$tpl->setVariable("COUNT", count($this->obj_ids));

				return self::output()->getHTML($tpl);
			}
		}

		return "";
	}


	/**
	 * @param int $obj_id
	 *
	 * @return int
	 */
	private function getStatus(int $obj_id): int {
		// Avoid exit
		if (ilObjectLP::getInstance($obj_id)->getCurrentMode() != ilLPObjSettings::LP_MODE_UNDEFINED) {
			$status = intval(ilLPStatus::_lookupStatus($obj_id, $this->usr_id));
		} else {
			$status = ilLPStatus::LP_STATUS_NOT_ATTEMPTED_NUM;
		}

		return $status;
	}


	/**
	 * @param int $status
	 *
	 * @return string
	 */
	private function getText(int $status): string {
		self::dic()->language()->loadLanguageModule("trac");

		return ilLearningProgressBaseGUI::_getStatusText($status);
	}
}
