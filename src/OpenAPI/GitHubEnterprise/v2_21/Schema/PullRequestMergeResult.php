<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '0000000065d621e7000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    private string $sha;
    private boolean $merged;
    private string $message;
    public function sha() : string
    {
        return $this->sha;
    }
    public function merged() : boolean
    {
        return $this->merged;
    }
    public function message() : string
    {
        return $this->message;
    }
}
