<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseOrganizationOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Organization Stats","required":["total_orgs","disabled_orgs","total_teams","total_team_members"],"type":"object","properties":{"total_orgs":{"type":"integer"},"disabled_orgs":{"type":"integer"},"total_teams":{"type":"integer"},"total_team_members":{"type":"integer"}}}';
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
