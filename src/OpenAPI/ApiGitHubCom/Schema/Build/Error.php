<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Build;

final class Error
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'Build\\Error';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $message;
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
