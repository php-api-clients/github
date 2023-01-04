<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestMinimal;

final class Base
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'PullRequestMinimal\\Base';
    public const SCHEMA_DESCRIPTION = '';
    private string $ref;
    private string $sha;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo $repo;
    public function ref() : string
    {
        return $this->ref;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function repo() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base\Repo
    {
        return $this->repo;
    }
}
