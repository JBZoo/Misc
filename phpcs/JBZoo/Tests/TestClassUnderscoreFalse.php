<?php
/**
 * JBZoo Misc
 *
 * This file is part of the JBZoo CCK package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package   Misc
 * @license   MIT
 * @copyright Copyright (C) JBZoo.com,  All rights reserved.
 * @link      https://github.com/JBZoo/Misc
 * @author    Denis Smetannikov <denis@jbzoo.com>
 */

namespace JBZoo\Misc;

/**
 * Class TestClassUnderscoreFalse
 * @package JBZoo\Misc
 */
class TestClassUnderscoreFalse
{
    /**
     * @var string
     */
    private $private = '';

    /**
     * @var string
     */
    protected $protected = '';

    /**
     * @var string
     */
    public $_public = '';

    /**
     * @param string $text
     * @return string
     */
    private function privateFunc($text = '')
    {
        return $text;
    }

    /**
     * @param string $text
     * @return string
     */
    protected function protectedFunc($text = '')
    {
        return $text;
    }

    /**
     * @param string $text
     * @return string
     */
    public function _publicFunc($text = '')
    {
        return $text;
    }

    /**
     * @return string
     */
    public function __myMagic()
    {
        return '';
    }

    /**
     * @param string $value
     * @return string
     */
    protected function _protected($value = '') // rename to _
    {
        return $value;
    }

    /**
     * @param string $value
     * @return string
     */
    private function _private($value = '') // rename to _
    {
        return $value;
    }

}
