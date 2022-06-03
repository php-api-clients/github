<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class EnterprisePullRequestOverview
{
    public const SCHEMA_TITLE = 'Enterprise Pull Request Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_pulls;
    private int $merged_pulls;
    private int $mergeable_pulls;
    private int $unmergeable_pulls;
    public function total_pulls() : int
    {
        return $this->total_pulls;
    }
    public function merged_pulls() : int
    {
        return $this->merged_pulls;
    }
    public function mergeable_pulls() : int
    {
        return $this->mergeable_pulls;
    }
    public function unmergeable_pulls() : int
    {
        return $this->unmergeable_pulls;
    }
}
