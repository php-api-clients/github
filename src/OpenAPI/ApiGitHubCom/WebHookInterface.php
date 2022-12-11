<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom;

interface WebHookInterface
{
    public function resolve(array $data) : string;
}
