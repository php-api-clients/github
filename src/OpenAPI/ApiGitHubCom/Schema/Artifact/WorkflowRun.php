<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact;

final class WorkflowRun
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}';
    public const SCHEMA_TITLE = 'Artifact\\WorkflowRun';
    public const SCHEMA_DESCRIPTION = '';
    private int $id;
    private int $repository_id;
    private int $head_repository_id;
    private string $head_branch;
    private string $head_sha;
    public function id() : int
    {
        return $this->id;
    }
    public function repository_id() : int
    {
        return $this->repository_id;
    }
    public function head_repository_id() : int
    {
        return $this->head_repository_id;
    }
    public function head_branch() : string
    {
        return $this->head_branch;
    }
    public function head_sha() : string
    {
        return $this->head_sha;
    }
}
