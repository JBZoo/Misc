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
 * Class TestClassUnderscoreTrue
 * @package JBZoo\Misc
 */
class TestClassUnderscoreTrue
{
    /**
     * @var string
     */
    private $_private = '';

    /**
     * @var string
     */
    protected $_protected = '';

    /**
     * @var string
     */
    public $public = '';

    /**
     * @param string $text
     * @return string
     */
    private function _privateFunc($text = '')
    {
        return $text;
    }

    /**
     * @param string $text
     * @return string
     */
    protected function _protectedFunc($text = '')
    {
        return $text;
    }

    /**
     * @param string $text
     * @return string
     */
    public function publicFunc($text = '')
    {
        return $text;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return '';
    }

    /**
     * @param string $value
     * @return string
     */
    public function _($value = '')
    {
        return $value;
    }
}
