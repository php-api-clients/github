<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PorterLargeFile
{
    public const SCHEMA_TITLE = 'Porter Large File';
    public const SPL_HASH = '00000000207019710000000042193899';
    public const SCHEMA_DESCRIPTION = 'Porter Large File';
    private string $ref_name;
    private string $path;
    private string $oid;
    private int $size;
    public function ref_name() : string
    {
        return $this->ref_name;
    }
    public function path() : string
    {
        return $this->path;
    }
    public function oid() : string
    {
        return $this->oid;
    }
    public function size() : int
    {
        return $this->size;
    }
}
