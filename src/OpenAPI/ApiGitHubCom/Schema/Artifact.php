<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Artifact
{
    public const SCHEMA_JSON = '{"title":"Artifact","required":["id","node_id","name","size_in_bytes","url","archive_download_url","expired","created_at","expires_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDEwOkNoZWNrU3VpdGU1"]},"name":{"type":"string","description":"The name of the artifact.","examples":["AdventureWorks.Framework"]},"size_in_bytes":{"type":"integer","description":"The size in bytes of the artifact.","examples":[12345]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5"]},"archive_download_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip"]},"expired":{"type":"boolean","description":"Whether or not the artifact has expired."},"created_at":{"type":["string","null"],"format":"date-time"},"expires_at":{"type":["string","null"],"format":"date-time"},"updated_at":{"type":["string","null"],"format":"date-time"},"workflow_run":{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}},"description":"An artifact"}';
    public const SCHEMA_TITLE = 'Artifact';
    public const SCHEMA_DESCRIPTION = 'An artifact';
    public readonly int $id;
    public readonly string $node_id;
    /**
     * The name of the artifact.
     */
    public readonly string $name;
    /**
     * The size in bytes of the artifact.
     */
    public readonly int $size_in_bytes;
    public readonly string $url;
    public readonly string $archive_download_url;
    /**
     * Whether or not the artifact has expired.
     */
    public readonly bool $expired;
    public readonly ?string $created_at;
    public readonly ?string $expires_at;
    public readonly ?string $updated_at;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact\WorkflowRun $workflow_run;
    public function __construct(int $id, string $node_id, string $name, int $size_in_bytes, string $url, string $archive_download_url, bool $expired, string $created_at, string $expires_at, string $updated_at, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Artifact\WorkflowRun $workflow_run)
    {
        $this->id = $id;
        $this->node_id = $node_id;
        $this->name = $name;
        $this->size_in_bytes = $size_in_bytes;
        $this->url = $url;
        $this->archive_download_url = $archive_download_url;
        $this->expired = $expired;
        $this->created_at = $created_at;
        $this->expires_at = $expires_at;
        $this->updated_at = $updated_at;
        $this->workflow_run = $workflow_run;
    }
}
