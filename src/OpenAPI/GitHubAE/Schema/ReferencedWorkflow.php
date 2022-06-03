<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ReferencedWorkflow
{
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
