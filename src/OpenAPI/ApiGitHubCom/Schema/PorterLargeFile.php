<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PorterLargeFile
{
    public const SCHEMA_TITLE = 'Porter Large File';
    public const SCHEMA_DESCRIPTION = 'Porter Large File';
    private ?string $ref_name = null;
    private ?string $path = null;
    private ?string $oid = null;
    private ?int $size = null;
    public function ref_name() : ?string
    {
        return $this->ref_name;
    }
    public function path() : ?string
    {
        return $this->path;
    }
    public function oid() : ?string
    {
        return $this->oid;
    }
    public function size() : ?int
    {
        return $this->size;
    }
}
