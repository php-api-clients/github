<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PullRequestMergeResult
{
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SPL_HASH = '000000000c929cac000000006ad867a6';
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
