<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact;

final class WorkflowRun
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}';
    public const SCHEMA_TITLE = 'Artifact\\WorkflowRun';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $id;
    public readonly int $repository_id;
    public readonly int $head_repository_id;
    public readonly string $head_branch;
    public readonly string $head_sha;
    public function __construct(int $id, int $repository_id, int $head_repository_id, string $head_branch, string $head_sha)
    {
        $this->id = $id;
        $this->repository_id = $repository_id;
        $this->head_repository_id = $head_repository_id;
        $this->head_branch = $head_branch;
        $this->head_sha = $head_sha;
    }
}
