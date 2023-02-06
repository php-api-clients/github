<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PageBuild;

final class Error
{
    public const SCHEMA_JSON = '{"required":["message"],"type":"object","properties":{"message":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PageBuild\\Error';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $message;
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}
