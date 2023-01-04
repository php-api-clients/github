<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities;

final class FirstPatchedVersion
{
    public const SCHEMA_JSON = '{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Vulnerabilities\\FirstPatchedVersion';
    public const SCHEMA_DESCRIPTION = '';
    private string $identifier;
    public function identifier() : string
    {
        return $this->identifier;
    }
}
