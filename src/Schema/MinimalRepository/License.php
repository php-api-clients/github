<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\MinimalRepository;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class License
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":"string"},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated","name":"generated","spdx_id":"generated","url":"generated","node_id":"generated"}';

    public function __construct(public ?string $key, public ?string $name, #[MapFrom('spdx_id')] public ?string $spdxId, public ?string $url, #[MapFrom('node_id')] public ?string $nodeId)
    {
    }
}
