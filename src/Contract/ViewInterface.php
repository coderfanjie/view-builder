<?php

/**
 * PHP后台常用视图生成器view-builder
 *
 * @package  Ccbox\ViewBuilder
 * @author   ccbox <ccbox.net@163.com>
 * @version  0.1
 * @license  MIT
 * @link     https://github.com/ccbox/view-builder
 */

namespace Ccbox\ViewBuilder\Contract;

interface ViewInterface
{
    public function view($template);
    public function js($type);
    public function css($type);
}
