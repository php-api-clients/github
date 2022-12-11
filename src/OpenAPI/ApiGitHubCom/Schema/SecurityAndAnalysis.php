<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecurityAndAnalysis
{
    public const SCHEMA_TITLE = 'security-and-analysis';
    public const SCHEMA_DESCRIPTION = '';
    private array $advanced_security = array();
    private array $secret_scanning = array();
    private array $secret_scanning_push_protection = array();
    public function advanced_security() : array
    {
        return $this->advanced_security;
    }
    public function secret_scanning() : array
    {
        return $this->secret_scanning;
    }
    public function secret_scanning_push_protection() : array
    {
        return $this->secret_scanning_push_protection;
    }
}
