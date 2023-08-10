<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet784E9C0B\TietCAE34930\Tiet8733038A;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet0C864473
{
    public const SCHEMA_JSON         = '{"required":["id","is_solo","node_id"],"type":["object","null"],"properties":{"id":{"type":"integer"},"is_solo":{"type":"boolean"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"is_solo":false,"node_id":"generated"}';

    public function __construct(public int $id, #[MapFrom('is_solo')]
    public bool $isSolo, #[MapFrom('node_id')]
    public string $nodeId,)
    {
    }
}
