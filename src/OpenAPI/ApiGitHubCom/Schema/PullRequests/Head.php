<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests;

final class Head
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'PullRequests\\Head';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $ref;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Head\Repo $repo;
    public readonly string $sha;
    public function __construct(string $ref, object $repo, string $sha)
    {
        $this->ref = $ref;
        $this->repo = $repo;
        $this->sha = $sha;
    }
}
