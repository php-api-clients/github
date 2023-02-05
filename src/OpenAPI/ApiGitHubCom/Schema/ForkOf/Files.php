<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ForkOf;

final class Files
{
    public const SCHEMA_JSON = '{"type":"object","additionalProperties":{"type":"object","properties":{"filename":{"type":"string"},"type":{"type":"string"},"language":{"type":"string"},"raw_url":{"type":"string"},"size":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = 'ForkOf\\Files';
    public const SCHEMA_DESCRIPTION = '';
    public function __construct()
    {
    }
}
