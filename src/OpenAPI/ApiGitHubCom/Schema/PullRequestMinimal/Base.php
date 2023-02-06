<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal;

final class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PullRequestMinimal\\Base';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $ref;
    public readonly string $sha;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo $repo;
    public function __construct(string $ref, string $sha, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo $repo)
    {
        $this->ref = $ref;
        $this->sha = $sha;
        $this->repo = $repo;
    }
}
