<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C3258430Cc798035Cd54C186Bcc49C1F3;

final class Devcontainers
{
    public const SCHEMA_JSON = '{"required":["path"],"type":"object","properties":{"path":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'C3258430Cc798035Cd54C186Bcc49C1F3\\Devcontainers';
    public const SCHEMA_DESCRIPTION = '';
    private string $path;
    private ?string $name = null;
    public function path() : string
    {
        return $this->path;
    }
    public function name() : ?string
    {
        return $this->name;
    }
}
