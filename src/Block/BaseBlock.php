<?php

namespace srag\Plugins\SrLearningProgressPDBlock\Block;

use ilBlockGUI;
use ilSrLearningProgressPDBlockPlugin;
use srag\CustomInputGUIs\SrLearningProgressPDBlock\CustomInputGUIsTrait;
use srag\DIC\SrLearningProgressPDBlock\DICTrait;
use srag\Plugins\SrLearningProgressPDBlock\Utils\SrLearningProgressPDBlockTrait;

/**
 * Class BaseBlock
 *
 * @package srag\Plugins\SrLearningProgressPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class BaseBlock extends ilBlockGUI
{

    use DICTrait;
    use SrLearningProgressPDBlockTrait;
    use CustomInputGUIsTrait;

    const PLUGIN_CLASS_NAME = ilSrLearningProgressPDBlockPlugin::class;
    const LANG_MODULE = "block";
    /**
     * @var int[]
     */
    protected $obj_ids = [];


    /**
     * BaseBlock constructor
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * @return string
     */
    public function getBlockType() : string
    {
        return ilSrLearningProgressPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @return bool
     */
    protected function isRepositoryObject() : bool
    {
        return false;
    }


    /**
     * @return string
     */
    public function getHTML() : string
    {
        if ($this->enabled()) {
            $this->initBlock();

            return parent::getHTML();
        } else {
            return "";
        }
    }


    /**
     *
     */
    protected function initBlock()/*: void*/
    {
        $this->initTitle();

        $this->initObjIds();

        if (self::version()->is6()) {
            $this->new_rendering = true;
        }
    }


    /**
     * @inheritDoc
     */
    protected function getLegacyContent() : string
    {
        return $this->getPie();
    }


    /**
     * @inheritDoc
     */
    public function fillDataSection()/*: void*/
    {
        $this->setDataSection($this->getPie());
    }


    /**
     * @return string
     */
    protected function getPie() : string
    {
        $obj_ids = array_filter($this->obj_ids, function (int $obj_id) : bool {
            return self::srLearningProgressPDBlock()->access()->hasReadAccess($obj_id);
        });

        $pie = self::output()->getHTML(self::customInputGUIs()->learningProgressPie()->objIds()->withObjIds($obj_ids)->withUsrId(self::dic()->user()
            ->getId())->withShowLegend(true));

        if (!empty($pie)) {
            return $pie;
        } else {
            return self::plugin()->translate("none", self::LANG_MODULE);
        }
    }


    /**
     * @return bool
     */
    protected abstract function enabled() : bool;


    /**
     *
     */
    protected abstract function initObjIds()/*: void*/ ;


    /**
     *
     */
    protected abstract function initTitle()/*: void*/ ;
}
