<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks;

interface WebHookInterface
{
    public function resolve(array $data) : string;
}
