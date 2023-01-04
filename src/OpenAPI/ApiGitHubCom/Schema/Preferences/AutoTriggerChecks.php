<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Preferences;

final class AutoTriggerChecks
{
    public const SCHEMA_JSON = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Preferences\\AutoTriggerChecks';
    public const SCHEMA_DESCRIPTION = '';
    private int $app_id;
    private bool $setting;
    public function app_id() : int
    {
        return $this->app_id;
    }
    public function setting() : bool
    {
        return $this->setting;
    }
}
