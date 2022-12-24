<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class EnterpriseIssueOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Issue Stats","required":["total_issues","open_issues","closed_issues"],"type":"object","properties":{"total_issues":{"type":"integer"},"open_issues":{"type":"integer"},"closed_issues":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Enterprise Issue Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_issues;
    private int $open_issues;
    private int $closed_issues;
    public function total_issues() : int
    {
        return $this->total_issues;
    }
    public function open_issues() : int
    {
        return $this->open_issues;
    }
    public function closed_issues() : int
    {
        return $this->closed_issues;
    }
}
