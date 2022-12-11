<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE;

interface WebHookInterface
{
    public function resolve(array $data) : string;
}
