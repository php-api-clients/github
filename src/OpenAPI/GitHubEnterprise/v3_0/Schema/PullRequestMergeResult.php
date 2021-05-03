<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '000000001f1e230e000000004be6709d';
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
