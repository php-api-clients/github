<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class EnterpriseHookOverview
{
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
