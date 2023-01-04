<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata;

final class Container
{
    public const SCHEMA_JSON = '{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Container Metadata';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Container\Tags>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Container\Tags::class)
     */
    private array $tags = array();
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Container\Tags>
     */
    public function tags() : array
    {
        return $this->tags;
    }
}
