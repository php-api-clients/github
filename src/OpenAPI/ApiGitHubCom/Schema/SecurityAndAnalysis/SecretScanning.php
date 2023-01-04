<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis;

final class SecretScanning
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string","description":"Can be `enabled` or `disabled`."}},"description":"Use the `status` property to enable or disable secret scanning for this repository. For more information, see \\"[About secret scanning](\\/code-security\\/secret-security\\/about-secret-scanning).\\""}';
    public const SCHEMA_TITLE = 'SecurityAndAnalysis\\SecretScanning';
    public const SCHEMA_DESCRIPTION = 'Use the `status` property to enable or disable secret scanning for this repository. For more information, see "[About secret scanning](/code-security/secret-security/about-secret-scanning)."';
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
