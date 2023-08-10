<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietB9B591C0\Tiet051B15E0\Tiet6AE540DE;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet19573BBF
{
    public const SCHEMA_JSON         = '{"required":["id","node_id"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":2,"node_id":"generated"}';

    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId,)
    {
    }
}
