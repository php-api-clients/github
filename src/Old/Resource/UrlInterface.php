<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface UrlInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Url';

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function htmlUrl(): string;
}
