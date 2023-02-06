<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CodeScanningAlertInstance;

final class Message
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CodeScanningAlertInstance\\Message';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }
}
