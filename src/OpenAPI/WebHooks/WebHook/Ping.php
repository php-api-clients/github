<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class Ping implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Ping\\Event';
    }
}
