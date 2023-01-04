<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps;

final class Permissions
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"metadata":{"type":"string"},"contents":{"type":"string"},"issues":{"type":"string"},"single_file":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Apps\\Permissions';
    public const SCHEMA_DESCRIPTION = '';
    private string $metadata;
    private string $contents;
    private string $issues;
    private string $single_file;
    public function metadata() : string
    {
        return $this->metadata;
    }
    public function contents() : string
    {
        return $this->contents;
    }
    public function issues() : string
    {
        return $this->issues;
    }
    public function single_file() : string
    {
        return $this->single_file;
    }
}
