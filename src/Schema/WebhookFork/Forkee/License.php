<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookFork\Forkee;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class License
{
    public const SCHEMA_JSON         = '{"title":"License","required":["key","name","spdx_id","url","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"spdx_id":{"type":"string"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE        = 'License';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated","name":"generated","node_id":"generated","spdx_id":"generated","url":"https:\\/\\/example.com\\/"}';

    public function __construct(public string $key, public string $name, #[MapFrom('node_id')] public string $nodeId, #[MapFrom('spdx_id')] public string $spdxId, public ?string $url)
    {
    }
}
