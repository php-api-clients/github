<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Artifact
{
    public const SCHEMA_JSON = '{"title":"Artifact","required":["id","node_id","name","size_in_bytes","url","archive_download_url","expired","created_at","expires_at","updated_at"],"type":"object","properties":{"id":{"type":"integer","examples":[5]},"node_id":{"type":"string","examples":["MDEwOkNoZWNrU3VpdGU1"]},"name":{"type":"string","description":"The name of the artifact.","examples":["AdventureWorks.Framework"]},"size_in_bytes":{"type":"integer","description":"The size in bytes of the artifact.","examples":[12345]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5"]},"archive_download_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/actions\\/artifacts\\/5\\/zip"]},"expired":{"type":"boolean","description":"Whether or not the artifact has expired."},"created_at":{"type":["string","null"],"format":"date-time"},"expires_at":{"type":["string","null"],"format":"date-time"},"updated_at":{"type":["string","null"],"format":"date-time"},"workflow_run":{"type":["object","null"],"properties":{"id":{"type":"integer","examples":[10]},"repository_id":{"type":"integer","examples":[42]},"head_repository_id":{"type":"integer","examples":[42]},"head_branch":{"type":"string","examples":["main"]},"head_sha":{"type":"string","examples":["009b8a3a9ccbb128af87f9b1c0f4c62e8a304f6d"]}}}},"description":"An artifact"}';
    public const SCHEMA_TITLE = 'Artifact';
    public const SCHEMA_DESCRIPTION = 'An artifact';
    private int $id;
    private string $node_id;
    /**
     * The name of the artifact.
     */
    private string $name;
    /**
     * The size in bytes of the artifact.
     */
    private int $size_in_bytes;
    private string $url;
    private string $archive_download_url;
    /**
     * Whether or not the artifact has expired.
     */
    private bool $expired;
    private $created_at;
    private $expires_at;
    private $updated_at;
    private $workflow_run;
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * The name of the artifact.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The size in bytes of the artifact.
     */
    public function size_in_bytes() : int
    {
        return $this->size_in_bytes;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function archive_download_url() : string
    {
        return $this->archive_download_url;
    }
    /**
     * Whether or not the artifact has expired.
     */
    public function expired() : bool
    {
        return $this->expired;
    }
    public function created_at()
    {
        return $this->created_at;
    }
    public function expires_at()
    {
        return $this->expires_at;
    }
    public function updated_at()
    {
        return $this->updated_at;
    }
    public function workflow_run()
    {
        return $this->workflow_run;
    }
}
