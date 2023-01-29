<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SetSuitesPreferences\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"auto_trigger_checks":{"type":"array","items":{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}},"description":"Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default."}}}';
    public const SCHEMA_TITLE = 'SetSuitesPreferences\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Enables or disables automatic creation of CheckSuite events upon pushes to the repository. Enabled by default.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\AutoTriggerChecks>
     */
    public readonly array $auto_trigger_checks;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json\AutoTriggerChecks> $auto_trigger_checks
     */
    public function __construct(array $auto_trigger_checks)
    {
        $this->auto_trigger_checks = $auto_trigger_checks;
    }
}
