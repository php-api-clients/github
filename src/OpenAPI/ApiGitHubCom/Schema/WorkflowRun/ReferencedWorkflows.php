<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRun;

final class ReferencedWorkflows
{
    public const SCHEMA_JSON = '{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WorkflowRun\\ReferencedWorkflows';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $path;
    public readonly ?string $ref;
    public readonly string $sha;
    public function __construct(string $path, string $ref, string $sha)
    {
        $this->path = $path;
        $this->ref = $ref;
        $this->sha = $sha;
    }
}
