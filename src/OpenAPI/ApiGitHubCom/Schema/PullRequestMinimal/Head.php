<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal;

final class Head
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'PullRequestMinimal\\Head';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $ref;
    public readonly string $sha;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Head\Repo $repo;
    public function __construct(string $ref, string $sha, object $repo)
    {
        $this->ref = $ref;
        $this->sha = $sha;
        $this->repo = $repo;
    }
}
