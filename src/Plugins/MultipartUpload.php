<?php

namespace Jacobcyl\AliOSS\Plugins;

use League\Flysystem\Plugin\AbstractPlugin;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class MultipartUpload extends AbstractPlugin
{

    /**
     * Get the method name.
     *
     * @return string
     */
    public function getMethod()
    {
        return 'multipartUpload';
    }

    public function handle($path, $file)
    {
        return $this->filesystem->getAdapter()->multipartUpload($path, $file);
    }
}