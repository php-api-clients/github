<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PullRequest\Head\Repo;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class License
{
    public const SCHEMA_JSON         = '{"required":["key","name","url","spdx_id","node_id"],"type":["object","null"],"properties":{"key":{"type":"string"},"name":{"type":"string"},"url":{"type":["string","null"],"format":"uri"},"spdx_id":{"type":["string","null"]},"node_id":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"key":"generated","name":"generated","url":"https:\\/\\/example.com\\/","spdx_id":"generated","node_id":"generated"}';

    public function __construct(public string $key, public string $name, public string|null $url, #[MapFrom('spdx_id')]
    public string|null $spdxId, #[MapFrom('node_id')]
    public string $nodeId,)
    {
    }
}
