<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Login
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Changes\\Login';
    public const SCHEMA_DESCRIPTION = '';
    private string $from;
    public function from() : string
    {
        return $this->from;
    }
}
