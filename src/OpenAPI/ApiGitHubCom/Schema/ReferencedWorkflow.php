<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferencedWorkflow
{
    public const SCHEMA_JSON = '{"title":"Referenced workflow","required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"sha":{"type":"string"},"ref":{"type":"string"}},"description":"A workflow referenced\\/reused by the initial caller workflow"}';
    public const SCHEMA_TITLE = 'Referenced workflow';
    public const SCHEMA_DESCRIPTION = 'A workflow referenced/reused by the initial caller workflow';
    private string $path;
    private string $sha;
    private ?string $ref = null;
    public function path() : string
    {
        return $this->path;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function ref() : ?string
    {
        return $this->ref;
    }
}
