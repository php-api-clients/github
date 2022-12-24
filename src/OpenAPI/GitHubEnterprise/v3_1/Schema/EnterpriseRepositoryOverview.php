<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseRepositoryOverview
{
    public const SCHEMA_JSON = '{"title":"Repository Enterprise Stats","required":["total_repos","root_repos","fork_repos","org_repos","total_pushes","total_wikis"],"type":"object","properties":{"total_repos":{"type":"integer"},"root_repos":{"type":"integer"},"fork_repos":{"type":"integer"},"org_repos":{"type":"integer"},"total_pushes":{"type":"integer"},"total_wikis":{"type":"integer"}}}';
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
