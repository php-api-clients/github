<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

use ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface;

final class Create implements WebHookInterface
{
    public function resolve(array $data): string
    {
    }
}
