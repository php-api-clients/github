<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietF13B5ABF\TietCDF31C82\Tiet2F9DAB19;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet1DB2FC80
{
    public const SCHEMA_JSON         = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"cwe_id":"generated","name":"generated"}';

    public function __construct(#[MapFrom('cwe_id')] public string $cweId, public string $name)
    {
    }
}
