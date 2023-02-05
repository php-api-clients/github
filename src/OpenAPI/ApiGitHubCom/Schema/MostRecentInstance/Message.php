<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MostRecentInstance;

final class Message
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'MostRecentInstance\\Message';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
