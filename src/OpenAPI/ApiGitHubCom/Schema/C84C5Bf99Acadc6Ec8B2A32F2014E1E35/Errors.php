<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C84C5Bf99Acadc6Ec8B2A32F2014E1E35;

final class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'C84C5Bf99Acadc6Ec8B2A32F2014E1E35\\Errors';
    public const SCHEMA_DESCRIPTION = '';
    private string $code;
    private string $message;
    public function code() : string
    {
        return $this->code;
    }
    public function message() : string
    {
        return $this->message;
    }
}
