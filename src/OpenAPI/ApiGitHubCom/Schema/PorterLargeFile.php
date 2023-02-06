<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PorterLargeFile
{
    public const SCHEMA_JSON = '{"title":"Porter Large File","required":["oid","path","ref_name","size"],"type":"object","properties":{"ref_name":{"type":"string"},"path":{"type":"string"},"oid":{"type":"string"},"size":{"type":"integer"}},"description":"Porter Large File"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Porter Large File';
    public const SCHEMA_DESCRIPTION = 'Porter Large File';
    public readonly string $ref_name;
    public readonly string $path;
    public readonly string $oid;
    public readonly int $size;
    public function __construct(string $ref_name, string $path, string $oid, int $size)
    {
        $this->ref_name = $ref_name;
        $this->path = $path;
        $this->oid = $oid;
        $this->size = $size;
    }
}
