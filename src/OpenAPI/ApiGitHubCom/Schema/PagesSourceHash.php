<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class PagesSourceHash
{
    public const SCHEMA_JSON = '{"title":"Pages Source Hash","required":["branch","path"],"type":"object","properties":{"branch":{"type":"string"},"path":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $branch;
    public ?string $path;
    public function __construct(string $branch, string $path)
    {
        $this->branch = $branch;
        $this->path = $path;
    }
}
