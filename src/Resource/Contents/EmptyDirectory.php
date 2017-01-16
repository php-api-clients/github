<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyDirectory implements DirectoryInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function type() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function encoding() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function size() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function path() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function sha() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function url() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function gitUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function htmlUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function downloadUrl() : string
    {
        return null;
    }

    /**
     * @return Contents\Links
     */
    public function links() : Contents\Links
    {
        return null;
    }
}
