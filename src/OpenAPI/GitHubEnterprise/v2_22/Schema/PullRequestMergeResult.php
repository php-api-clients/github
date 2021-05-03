<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '000000003d2c3ad00000000068da5fbb';
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
