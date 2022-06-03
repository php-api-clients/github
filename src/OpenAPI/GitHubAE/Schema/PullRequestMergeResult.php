<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    private string $sha;
    private bool $merged;
    private string $message;
    public function sha() : string
    {
        return $this->sha;
    }
    public function merged() : bool
    {
        return $this->merged;
    }
    public function message() : string
    {
        return $this->message;
    }
}
