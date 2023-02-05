<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata;

final class Docker
{
    public const SCHEMA_JSON = '{"title":"Docker Metadata","required":["tags"],"type":"object","properties":{"tag":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Docker Metadata';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Docker\Tag>
     */
    public readonly array $tag;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Docker\Tag> $tag
     */
    public function __construct(array $tag)
    {
        $this->tag = $tag;
    }
}
