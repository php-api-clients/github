<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\CodeScanningAlertInstance;

final class Message
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'CodeScanningAlertInstance\\Message';
    public const SCHEMA_DESCRIPTION = '';
    private string $text;
    public function text() : string
    {
        return $this->text;
    }
}
