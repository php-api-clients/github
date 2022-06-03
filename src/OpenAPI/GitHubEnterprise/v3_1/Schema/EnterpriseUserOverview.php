<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseUserOverview
{
    public const SCHEMA_TITLE = 'Enterprise User Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_users;
    private int $admin_users;
    private int $suspended_users;
    public function total_users() : int
    {
        return $this->total_users;
    }
    public function admin_users() : int
    {
        return $this->admin_users;
    }
    public function suspended_users() : int
    {
        return $this->suspended_users;
    }
}
