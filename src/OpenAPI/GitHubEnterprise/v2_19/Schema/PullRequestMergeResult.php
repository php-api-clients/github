<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '00000000631281000000000044ad25fc';
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
