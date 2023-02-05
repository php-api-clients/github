<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Preferences;

final class AutoTriggerChecks
{
    public const SCHEMA_JSON = '{"required":["app_id","setting"],"type":"object","properties":{"app_id":{"type":"integer"},"setting":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'Preferences\\AutoTriggerChecks';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $app_id;
    public readonly bool $setting;
    public function __construct(int $app_id, bool $setting)
    {
        $this->app_id = $app_id;
        $this->setting = $setting;
    }
}
