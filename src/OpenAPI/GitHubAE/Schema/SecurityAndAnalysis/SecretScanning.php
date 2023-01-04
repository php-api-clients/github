<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SecurityAndAnalysis;

final class SecretScanning
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\SecretScanning';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    public function status() : string
    {
        return $this->status;
    }
}
