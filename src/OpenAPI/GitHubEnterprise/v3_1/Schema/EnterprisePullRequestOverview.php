<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterprisePullRequestOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Pull Request Stats","required":["total_pulls","merged_pulls","mergeable_pulls","unmergeable_pulls"],"type":"object","properties":{"total_pulls":{"type":"integer"},"merged_pulls":{"type":"integer"},"mergeable_pulls":{"type":"integer"},"unmergeable_pulls":{"type":"integer"}}}';
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
