<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\CheckSuitePreference;

final class Preferences
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}}}}';
    public const SCHEMA_TITLE = 'CheckSuitePreference\\Preferences';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Preferences\AutoTriggerChecks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Preferences\AutoTriggerChecks::class)
     */
    private array $auto_trigger_checks = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Preferences\AutoTriggerChecks>
     */
    public function auto_trigger_checks() : array
    {
        return $this->auto_trigger_checks;
    }
}
