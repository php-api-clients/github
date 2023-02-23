<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class PullRequestMergeResult
{
    public const SCHEMA_JSON = '{"title":"Pull Request Merge Result","required":["merged","message","sha"],"type":"object","properties":{"sha":{"type":"string"},"merged":{"type":"boolean"},"message":{"type":"string"}},"description":"Pull Request Merge Result"}';
    public const SCHEMA_TITLE = 'Pull Request Merge Result';
    public const SCHEMA_DESCRIPTION = 'Pull Request Merge Result';
    public ?string $sha;
    public ?bool $merged;
    public ?string $message;
    public function __construct(string $sha, bool $merged, string $message)
    {
        $this->sha = $sha;
        $this->merged = $merged;
        $this->message = $message;
    }
}
