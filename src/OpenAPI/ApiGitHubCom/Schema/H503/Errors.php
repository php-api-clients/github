<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H503;

final class Errors
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"code":{"type":"string"},"message":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'H503\\Errors';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $code;
    public readonly string $message;
    public function __construct(string $code, string $message)
    {
        $this->code = $code;
        $this->message = $message;
    }
}
