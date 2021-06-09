<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks;

interface WebHookInterface
{
    public function resolve(array $data): string;
}
