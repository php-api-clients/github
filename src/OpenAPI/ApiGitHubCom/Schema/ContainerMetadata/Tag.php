<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ContainerMetadata;

final class Tag
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"digest":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'ContainerMetadata\\Tag';
    public const SCHEMA_DESCRIPTION = '';
    private string $digest;
    private string $name;
    public function digest() : string
    {
        return $this->digest;
    }
    public function name() : string
    {
        return $this->name;
    }
}
