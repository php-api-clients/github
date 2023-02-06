<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Json;

final class AutoTriggerChecks
{
    public const SCHEMA_JSON = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Json\\AutoTriggerChecks';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The `id` of the GitHub App.
     */
    public readonly int $app_id;
    /**
     * Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
     */
    public readonly bool $setting;
    public function __construct(int $app_id, bool $setting)
    {
        $this->app_id = $app_id;
        $this->setting = $setting;
    }
}
