<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class EnterpriseCommentOverview
{
    public const SCHEMA_JSON = '{"title":"Enterprise Comment Stats","required":["total_commit_comments","total_gist_comments","total_issue_comments","total_pull_request_comments"],"type":"object","properties":{"total_commit_comments":{"type":"integer"},"total_gist_comments":{"type":"integer"},"total_issue_comments":{"type":"integer"},"total_pull_request_comments":{"type":"integer"}}}';
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
