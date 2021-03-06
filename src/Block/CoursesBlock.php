<?php

namespace srag\Plugins\SrLearningProgressPDBlock\Block;

use ilLPCollection;
use ilObjectLP;
use srag\Plugins\SrLearningProgressPDBlock\Config\Form\FormBuilder;

/**
 * Class CoursesBlock
 *
 * @package srag\Plugins\SrLearningProgressPDBlock\Block
 */
class CoursesBlock extends BaseBlock
{

    const GET_PARAM_REF_ID = "ref_id";
    const GET_PARAM_TARGET = "target";
    /**
     * @var int
     */
    protected $course_obj_id;
    /**
     * @var int
     */
    protected $course_ref_id;


    /**
     * CoursesBlock constructor
     */
    public function __construct()
    {
        $this->course_ref_id = $this->filterRefId();
        $this->course_obj_id = intval(self::dic()->objDataCache()->lookupObjId($this->course_ref_id));

        parent::__construct();
    }


    /**
     * @inheritDoc
     */
    protected function enabled() : bool
    {
        return (self::srLearningProgressPDBlock()->config()->getValue(FormBuilder::KEY_SHOW_ON_COURSES)
            && self::srLearningProgressPDBlock()
                ->ilias()
                ->learningProgress(self::dic()->user())
                ->enabled($this->course_obj_id));
    }


    /**
     * @inheritDoc
     */
    protected function initObjIds()/*: void*/
    {
        /**
         * @var ilObjectLP $lp
         */
        $lp = ilObjectLP::getInstance($this->course_obj_id);
        /**
         * @var ilLPCollection $c
         */
        $c = $lp->getCollectionInstance();

        if (method_exists($c, "getPossibleItems")) { // Abstraction?!
            $this->obj_ids = array_map(function (int $ref_id) : int {
                return intval(self::dic()->objDataCache()->lookupObjId($ref_id));
            }, array_filter($c->getPossibleItems($this->course_ref_id), function (int $ref_id) use ($c) : bool {
                return $c->isAssignedEntry($ref_id);
            }));
        }
    }


    /**
     * @inheritDoc
     */
    protected function initTitle()/*: void*/
    {
        $this->setTitle(self::plugin()->translate("learning_progress", self::LANG_MODULE));
    }


    /**
     * @return int|null
     */
    private function filterRefId()/*: ?int*/
    {
        $obj_ref_id = filter_input(INPUT_GET, self::GET_PARAM_REF_ID);

        if ($obj_ref_id === null) {
            $param_target = filter_input(INPUT_GET, self::GET_PARAM_TARGET);

            $obj_ref_id = explode("_", $param_target)[1];
        }

        $obj_ref_id = intval($obj_ref_id);

        if ($obj_ref_id > 0) {
            return $obj_ref_id;
        } else {
            return null;
        }
    }
}
