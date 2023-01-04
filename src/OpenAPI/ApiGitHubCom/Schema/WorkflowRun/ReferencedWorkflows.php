<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class ReferencedWorkflows
{
    public const SCHEMA_JSON = '{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'WorkflowRun\\ReferencedWorkflows';
    public const SCHEMA_DESCRIPTION = '';
    private string $path;
    private ?string $ref = null;
    private string $sha;
    public function path() : string
    {
        return $this->path;
    }
    public function ref() : ?string
    {
        return $this->ref;
    }
    public function sha() : string
    {
        return $this->sha;
    }
}
