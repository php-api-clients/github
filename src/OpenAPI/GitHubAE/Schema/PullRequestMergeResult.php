<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '000000000c1cef4b0000000065732ccc';
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
