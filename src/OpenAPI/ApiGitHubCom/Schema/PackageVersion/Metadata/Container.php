<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PackageVersion\Metadata;

final readonly class Container
{
    public const SCHEMA_JSON = '{"title":"Container Metadata","required":["tags"],"type":"object","properties":{"tags":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'Container Metadata';
    public const SCHEMA_DESCRIPTION = '';
    public ?array $tags;
    public function __construct(array $tags)
    {
        $this->tags = $tags;
    }
}
