<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C650E46F6982C8A8A4228F05E17A996F3
{
    public const SCHEMA_JSON = '{"required":["ref","sha","repo"],"type":"object","properties":{"ref":{"type":"string"},"sha":{"type":"string"},"repo":{"required":["id","url","name"],"type":"object","properties":{"id":{"type":"integer"},"url":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'c_650e46f6982c8a8a4228f05e17a996f3';
    public const SCHEMA_DESCRIPTION = '';
    private string $ref;
    private string $sha;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C72F326166A9787Ba9Ddc9E7E8E246D35::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C72F326166A9787Ba9Ddc9E7E8E246D35 $repo;
    public function ref() : string
    {
        return $this->ref;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function repo() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C72F326166A9787Ba9Ddc9E7E8E246D35
    {
        return $this->repo;
    }
}
