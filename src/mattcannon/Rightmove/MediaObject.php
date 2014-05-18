<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2014 Matt Cannon
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 * THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace mattcannon\Rightmove;


/**
 * Class MediaObject
 * @package mattcannon\Rightmove
 */
class MediaObject {

    /**
     * stores the value of the main field
     * @var null|string
     */
    public $value;
    /**
     * stores an associated caption, if available
     * @var null|string
     */
    public $caption;
    /**
     * stores Media object type (Image | Document   )
     * @var string
     */
    public $type;

    /**
     * @param null|string $value
     * @param null|string $caption
     * @param string $type
     */
    function __construct( $value, $caption = null, $type = 'Image')
    {
        $this->value = $value;
        $this->caption = $caption;
        $this->type = $type;
    }
}