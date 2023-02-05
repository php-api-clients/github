<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities;

final class FirstPatchedVersion
{
    public const SCHEMA_JSON = '{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Vulnerabilities\\FirstPatchedVersion';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $identifier;
    public function __construct(string $identifier)
    {
        $this->identifier = $identifier;
    }
}
