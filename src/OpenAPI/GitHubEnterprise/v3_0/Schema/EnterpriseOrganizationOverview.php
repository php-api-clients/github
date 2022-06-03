<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class EnterpriseOrganizationOverview
{
    public const SCHEMA_TITLE = 'Enterprise Organization Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_orgs;
    private int $disabled_orgs;
    private int $total_teams;
    private int $total_team_members;
    public function total_orgs() : int
    {
        return $this->total_orgs;
    }
    public function disabled_orgs() : int
    {
        return $this->disabled_orgs;
    }
    public function total_teams() : int
    {
        return $this->total_teams;
    }
    public function total_team_members() : int
    {
        return $this->total_team_members;
    }
}
