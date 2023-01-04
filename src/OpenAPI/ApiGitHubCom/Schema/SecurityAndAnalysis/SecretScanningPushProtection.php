<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis;

final class SecretScanningPushProtection
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see \\"[Protecting pushes with secret scanning](\\/code-security\\/secret-scanning\\/protecting-pushes-with-secret-scanning).\\""}';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\SecretScanningPushProtection';
    public const SCHEMA_DESCRIPTION = 'Use the `status` property to enable or disable secret scanning push protection for this repository. For more information, see "[Protecting pushes with secret scanning](/code-security/secret-scanning/protecting-pushes-with-secret-scanning)."';
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
