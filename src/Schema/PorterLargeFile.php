<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PorterLargeFile
{
    public const SCHEMA_JSON         = '{"title":"Porter Large File","required":["oid","path","ref_name","size"],"type":"object","properties":{"ref_name":{"type":"string"},"path":{"type":"string"},"oid":{"type":"string"},"size":{"type":"integer"}},"description":"Porter Large File"}';
    public const SCHEMA_TITLE        = 'Porter Large File';
    public const SCHEMA_DESCRIPTION  = 'Porter Large File';
    public const SCHEMA_EXAMPLE_DATA = '{"ref_name":"generated","path":"generated","oid":"generated","size":4}';

    public function __construct(#[MapFrom('ref_name')] public string $refName, public string $path, public string $oid, public int $size)
    {
    }
}
