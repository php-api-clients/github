<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookSecurityAndAnalysis\Changes;

final readonly class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\SecurityAndAnalysis $security_and_analysis;
    public function __construct(\ApiClients\Client\Github\Schema\SecurityAndAnalysis $security_and_analysis)
    {
        $this->security_and_analysis = $security_and_analysis;
    }
}
