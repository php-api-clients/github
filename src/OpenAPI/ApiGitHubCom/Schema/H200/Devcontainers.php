<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\H200;

final class Devcontainers
{
    public const SCHEMA_JSON = '{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'H200\\Devcontainers';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $path;
    public readonly ?string $name;
    public function __construct(string $path, string $name)
    {
        $this->path = $path;
        $this->name = $name;
    }
}
