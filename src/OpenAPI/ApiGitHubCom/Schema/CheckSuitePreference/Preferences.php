<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckSuitePreference;

final class Preferences
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = 'CheckSuitePreference\\Preferences';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Preferences\AutoTriggerChecks>
     */
    public readonly array $auto_trigger_checks;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Preferences\AutoTriggerChecks> $auto_trigger_checks
     */
    public function __construct(array $auto_trigger_checks)
    {
        $this->auto_trigger_checks = $auto_trigger_checks;
    }
}
