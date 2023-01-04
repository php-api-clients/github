<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis;

final class AdvancedSecurity
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\AdvancedSecurity';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    public function status() : string
    {
        return $this->status;
    }
}
