<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\WebHook;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ConfigInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'WebHook\\Config';

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function contentType(): string;
}
