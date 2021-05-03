<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '0000000008b9231300000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    private ?string $sha = null;
    private ?bool $merged = null;
    private ?string $message = null;
    public function sha() : ?string
    {
        return $this->sha;
    }
    public function merged() : ?bool
    {
        return $this->merged;
    }
    public function message() : ?string
    {
        return $this->message;
    }
}
