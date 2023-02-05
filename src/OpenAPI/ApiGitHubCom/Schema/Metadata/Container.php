<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata;

final class Container
{
    public const SCHEMA_JSON = '{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Container Metadata';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Container\Tags>
     */
    public readonly array $tags;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Container\Tags> $tags
     */
    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }
}
