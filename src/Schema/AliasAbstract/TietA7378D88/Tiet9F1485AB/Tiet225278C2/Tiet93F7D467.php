<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietA7378D88\Tiet9F1485AB\Tiet225278C2;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet93F7D467
{
    public const SCHEMA_JSON         = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE        = 'License';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated","name":"generated","node_id":"generated","spdx_id":"generated","url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $key, public string $name, #[MapFrom('node_id')]
    public string $nodeId, #[MapFrom('spdx_id')]
    public string $spdxId, public string|null $url,)
    {
    }
}
