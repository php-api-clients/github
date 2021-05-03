<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '000000004a4bae200000000021d13a21';
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
