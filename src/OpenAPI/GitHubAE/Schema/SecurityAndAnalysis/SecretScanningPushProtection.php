<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\SecurityAndAnalysis;

final class SecretScanningPushProtection
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\SecretScanningPushProtection';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    public function status() : string
    {
        return $this->status;
    }
}
