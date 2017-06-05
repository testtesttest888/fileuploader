<?php

namespace AppBundle\Services\Filesystem;

use Gaufrette\StreamWrapper;
use Knp\Bundle\GaufretteBundle\FilesystemMap;

class FilesystemManager
{
    public static function createFilesystem($type, FilesystemMap $filesystemMap = null)
    {
        if (!$filesystemMap->has($type)) {
            throw new \RuntimeException(sprintf('No filesystem %s found', $type));
        }

        $filesystem = $filesystemMap->get($type);
        $map = StreamWrapper::getFilesystemMap();
        $map->set('storage', $filesystem);
        StreamWrapper::register();

        return $filesystem;
    }
}