<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis;

final class AdvancedSecurity
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see \\"[About GitHub Advanced Security](\\/github\\/getting-started-with-github\\/learning-about-github\\/about-github-advanced-security).\\""}';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\AdvancedSecurity';
    public const SCHEMA_DESCRIPTION = 'Use the `status` property to enable or disable GitHub Advanced Security for this repository. For more information, see "[About GitHub Advanced Security](/github/getting-started-with-github/learning-about-github/about-github-advanced-security)."';
    /**
     * Can be `enabled` or `disabled`.
     */
    private string $status;
    /**
     * Can be `enabled` or `disabled`.
     */
    public function status() : string
    {
        return $this->status;
    }
}
