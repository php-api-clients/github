<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet816635D3\TietC55238BA\TietBF74F2E8;

abstract readonly class Tiet24A1EBA4
{
    public const SCHEMA_JSON         = '{"required":["path","sha"],"type":"object","properties":{"path":{"type":"string"},"ref":{"type":"string"},"sha":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated","ref":"generated","sha":"generated"}';

    public function __construct(public string $path, public ?string $ref, public string $sha)
    {
    }
}
