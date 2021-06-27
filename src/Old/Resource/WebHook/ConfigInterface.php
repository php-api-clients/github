<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\WebHook;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ConfigInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'WebHook\\Config';

    public function url(): string;

    public function contentType(): string;
}
