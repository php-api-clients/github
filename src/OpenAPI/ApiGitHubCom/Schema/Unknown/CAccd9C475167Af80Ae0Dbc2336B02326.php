<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CAccd9C475167Af80Ae0Dbc2336B02326
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}},"description":"Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default."}}}';
    public const SCHEMA_TITLE = 'c_accd9c475167af80ae0dbc2336b02326';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CAccd9C475167Af80Ae0Dbc2336B02326\AutoTriggerChecks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CAccd9C475167Af80Ae0Dbc2336B02326\AutoTriggerChecks::class)
     */
    private array $auto_trigger_checks = array();
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CAccd9C475167Af80Ae0Dbc2336B02326\AutoTriggerChecks>
     */
    public function auto_trigger_checks() : array
    {
        return $this->auto_trigger_checks;
    }
}
