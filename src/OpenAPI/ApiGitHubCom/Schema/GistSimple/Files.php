<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple;

final class Files
{
    public const SCHEMA_JSON = '{"type":"object","additionalProperties":{"type":["object","null"],"properties":{"filename":{"type":"string"},"type":{"type":"string"},"language":{"type":"string"},"raw_url":{"type":"string"},"size":{"type":"integer"},"truncated":{"type":"boolean"},"content":{"type":"string"}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'GistSimple\\Files';
    public const SCHEMA_DESCRIPTION = '';
    public function __construct()
    {
    }
}
