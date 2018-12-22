<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Content\CPanel;

/**
 * Class Module
 * @package MSBios\Content\CPanel
 */
class Module extends \MSBios\Module
{
    /** @const VERSION */
    const VERSION = '1.0.0';

    /**
     * @return string
     */
    protected function getDir()
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    protected function getNamespace()
    {
        return __NAMESPACE__;
    }
}