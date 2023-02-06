<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis;

final class SecretScanning
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\SecretScanning';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $status;
    public function __construct(string $status)
    {
        $this->status = $status;
    }
}
