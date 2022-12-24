<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseUserOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise User Stats","required":["total_users","admin_users","suspended_users"],"type":"object","properties":{"total_users":{"type":"integer"},"admin_users":{"type":"integer"},"suspended_users":{"type":"integer"}}}';
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
