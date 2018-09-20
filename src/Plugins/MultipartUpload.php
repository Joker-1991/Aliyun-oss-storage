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
        return 'MultipartUpload';
    }

    public function handle($path, $filePath)
    {
        if ( ! $this->filesystem->getAdapter()->has($path)) {
            throw new FileNotFoundException($path.' not found');
        }

        return $this->filesystem->getAdapter()->getClient()->MultipartUpload($path, $filePath);
    }
}