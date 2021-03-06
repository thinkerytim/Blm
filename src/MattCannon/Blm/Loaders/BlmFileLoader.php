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

namespace MattCannon\Blm\Loaders;

use League\Flysystem\Filesystem;
use MattCannon\Blm\Interfaces\BlmLoaderInterface;

/**
 * Class BlmFileLoader
 * @package MattCannon\Blm\Loaders
 */
class BlmFileLoader implements BlmLoaderInterface
{
    /**
     * @var Filesystem
     */
    private $fileSystem;
    /**
     * @var string - path to blm, relative to path set against filesystem object.
     */
    private $pathToBlm;

    /**
     * @param Filesystem $fileSystem
     * @param $pathToBlm
     */
    public function __construct(Filesystem $fileSystem, $pathToBlm)
    {
        $this->fileSystem = $fileSystem;
        $this->pathToBlm = $pathToBlm;
    }
    /**
     * @return string contents of blm
     */
    public function getBlmContents()
    {
        $blmContents = $this->fileSystem->read($this->pathToBlm);

        return $blmContents;
    }

}
