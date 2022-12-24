<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseHookOverview
{
    public const SCHEMA_JSON = '{"title":"Hooks Enterprise Stats","required":["total_hooks","active_hooks","inactive_hooks"],"type":"object","properties":{"total_hooks":{"type":"integer"},"active_hooks":{"type":"integer"},"inactive_hooks":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Hooks Enterprise Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_hooks;
    private int $active_hooks;
    private int $inactive_hooks;
    public function total_hooks() : int
    {
        return $this->total_hooks;
    }
    public function active_hooks() : int
    {
        return $this->active_hooks;
    }
    public function inactive_hooks() : int
    {
        return $this->inactive_hooks;
    }
}
