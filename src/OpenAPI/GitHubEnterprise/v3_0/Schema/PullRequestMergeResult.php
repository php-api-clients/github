<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '0000000065dd69d5000000006352672d';
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
