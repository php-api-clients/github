<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class EnterpriseCommentOverview
{
    public const SCHEMA_TITLE = 'Enterprise Comment Stats';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_commit_comments;
    private int $total_gist_comments;
    private int $total_issue_comments;
    private int $total_pull_request_comments;
    public function total_commit_comments() : int
    {
        return $this->total_commit_comments;
    }
    public function total_gist_comments() : int
    {
        return $this->total_gist_comments;
    }
    public function total_issue_comments() : int
    {
        return $this->total_issue_comments;
    }
    public function total_pull_request_comments() : int
    {
        return $this->total_pull_request_comments;
    }
}
