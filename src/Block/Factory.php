<?php

namespace srag\Plugins\SrLearningProgressPDBlock\Block;

use ilSrLearningProgressPDBlockPlugin;
use srag\DIC\SrLearningProgressPDBlock\DICTrait;
use srag\Plugins\SrLearningProgressPDBlock\Utils\SrLearningProgressPDBlockTrait;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrLearningProgressPDBlock\Block
 */
final class Factory
{

    use DICTrait;
    use SrLearningProgressPDBlockTrait;

    const PLUGIN_CLASS_NAME = ilSrLearningProgressPDBlockPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @return CoursesBlock
     */
    public function courses() : CoursesBlock
    {
        $block = new CoursesBlock();

        return $block;
    }


    /**
     * @return DashboardBlock
     */
    public function dashboard() : DashboardBlock
    {
        $block = new DashboardBlock();

        return $block;
    }
}
