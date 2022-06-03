<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class EnterpriseRepositoryOverview
{
    public const SCHEMA_TITLE = 'Repository Enterprise Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_repos;
    private int $root_repos;
    private int $fork_repos;
    private int $org_repos;
    private int $total_pushes;
    private int $total_wikis;
    public function total_repos() : int
    {
        return $this->total_repos;
    }
    public function root_repos() : int
    {
        return $this->root_repos;
    }
    public function fork_repos() : int
    {
        return $this->fork_repos;
    }
    public function org_repos() : int
    {
        return $this->org_repos;
    }
    public function total_pushes() : int
    {
        return $this->total_pushes;
    }
    public function total_wikis() : int
    {
        return $this->total_wikis;
    }
}
