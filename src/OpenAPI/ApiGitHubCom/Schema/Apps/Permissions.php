<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Apps\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $metadata;
    public readonly string $contents;
    public readonly string $issues;
    public readonly string $single_file;
    public function __construct(string $metadata, string $contents, string $issues, string $single_file)
    {
        $this->metadata = $metadata;
        $this->contents = $contents;
        $this->issues = $issues;
        $this->single_file = $single_file;
    }
}
