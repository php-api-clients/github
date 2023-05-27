<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet067B84F7\TietD0AA2418\Tiet59585D81;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietA391DB12
{
    public const SCHEMA_JSON         = '{"required":["about_url","name","type","url","vendor"],"type":["object","null"],"properties":{"about_url":{"type":"string","format":"uri"},"name":{"type":"string"},"type":{"type":"string"},"url":{"type":"string","format":"uri"},"vendor":{"type":"string"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"about_url":"https:\\/\\/example.com\\/","name":"generated","type":"generated","url":"https:\\/\\/example.com\\/","vendor":"generated"}';

    public function __construct(#[MapFrom('about_url')] public string $aboutUrl, public string $name, public string $type, public string $url, public string $vendor)
    {
    }
}
