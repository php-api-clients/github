<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests;

final class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'PullRequests\\Base';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $ref;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo $repo;
    public readonly string $sha;
    public function __construct(string $ref, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo $repo, string $sha)
    {
        $this->ref = $ref;
        $this->repo = $repo;
        $this->sha = $sha;
    }
}
