<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion;

final class ContainerMetadata
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"labels":{"type":["object","null"]},"manifest":{"type":["object","null"]},"tag":{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'PackageVersion\\ContainerMetadata';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Labels::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Labels $labels;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Manifest::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Manifest $manifest;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Tag::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Tag $tag;
    public function labels() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Labels
    {
        return $this->labels;
    }
    public function manifest() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Manifest
    {
        return $this->manifest;
    }
    public function tag() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata\Tag
    {
        return $this->tag;
    }
}
