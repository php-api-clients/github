<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Request;

final class AutoTriggerChecks
{
    public const SCHEMA_JSON = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer","description":"The `id` of the GitHub App."},"setting":{"type":"boolean","description":"Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.","default":true}}}';
    public const SCHEMA_TITLE = 'Request\\AutoTriggerChecks';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The `id` of the GitHub App.
     */
    private int $app_id;
    /**
     * Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
     */
    private bool $setting;
    /**
     * The `id` of the GitHub App.
     */
    public function app_id() : int
    {
        return $this->app_id;
    }
    /**
     * Set to `true` to enable automatic creation of CheckSuite events upon pushes to the repository, or `false` to disable them.
     */
    public function setting() : bool
    {
        return $this->setting;
    }
}
