<?php
/**
 * Created by PhpStorm.
 * User: yuri
 * Date: 05.06.17
 * Time: 19:57
 */

namespace AppBundle\Services\Filesystem;

use Gaufrette\Filesystem;

class FileReader
{
    /** @var  Filesystem */
    private $filesystem;

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function ls()
    {
        return $this->filesystem->keys();
    }

}