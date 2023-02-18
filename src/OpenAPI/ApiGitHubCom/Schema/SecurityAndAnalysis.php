<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity;

final readonly class SecurityAndAnalysis
{
    public const SCHEMA_JSON        = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?AdvancedSecurity $advanced_security;
    public ?AdvancedSecurity $secret_scanning;
    public ?AdvancedSecurity $secret_scanning_push_protection;

    public function __construct(AdvancedSecurity $advanced_security, AdvancedSecurity $secret_scanning, AdvancedSecurity $secret_scanning_push_protection)
    {
        $this->advanced_security               = $advanced_security;
        $this->secret_scanning                 = $secret_scanning;
        $this->secret_scanning_push_protection = $secret_scanning_push_protection;
    }
}
