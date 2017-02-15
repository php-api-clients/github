<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TreeInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Tree';

    /**
     * @return string
     */
    public function url() : string;

    /**
     * @return string
     */
    public function sha() : string;
}
