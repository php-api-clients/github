<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;

interface DirectoryInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Contents\\Directory';

    /**
     * @return string
     */
    public function type() : string;

    /**
     * @return string
     */
    public function encoding() : string;

    /**
     * @return int
     */
    public function size() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function path() : string;

    /**
     * @return string
     */
    public function sha() : string;

    /**
     * @return string
     */
    public function url() : string;

    /**
     * @return string
     */
    public function gitUrl() : string;

    /**
     * @return string
     */
    public function htmlUrl() : string;

    /**
     * @return string
     */
    public function downloadUrl() : string;

    /**
     * @return Contents\Links
     */
    public function links() : Contents\Links;
}
