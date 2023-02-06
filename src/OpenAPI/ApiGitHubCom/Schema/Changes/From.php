<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\From';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis $security_and_analysis;
    public function __construct(?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis $security_and_analysis)
    {
        $this->security_and_analysis = $security_and_analysis;
    }
}
