<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequests;

final class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"repo":{"title":"Repo Ref","required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"url":{"type":"string","format":"uri"}}},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'PullRequests\\Base';
    public const SCHEMA_DESCRIPTION = '';
    private string $ref;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo $repo;
    private string $sha;
    public function ref() : string
    {
        return $this->ref;
    }
    public function repo() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo
    {
        return $this->repo;
    }
    public function sha() : string
    {
        return $this->sha;
    }
}
