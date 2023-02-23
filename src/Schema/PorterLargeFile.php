<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class PorterLargeFile
{
    public const SCHEMA_JSON = '{"title":"Porter Large File","required":["oid","path","ref_name","size"],"type":"object","properties":{"ref_name":{"type":"string"},"path":{"type":"string"},"oid":{"type":"string"},"size":{"type":"integer"}},"description":"Porter Large File"}';
    public const SCHEMA_TITLE = 'Porter Large File';
    public const SCHEMA_DESCRIPTION = 'Porter Large File';
    public ?string $ref_name;
    public ?string $path;
    public ?string $oid;
    public ?int $size;
    public function __construct(string $ref_name, string $path, string $oid, int $size)
    {
        $this->ref_name = $ref_name;
        $this->path = $path;
        $this->oid = $oid;
        $this->size = $size;
    }
}
