<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet559AE5A2\Tiet1A070067\Tiet14156653;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietD2E15261
{
    public const SCHEMA_JSON         = '{"title":"Reactions","required":["url","total_count","+1","-1","laugh","confused","heart","hooray","eyes","rocket"],"type":"object","properties":{"+1":{"type":"integer"},"-1":{"type":"integer"},"confused":{"type":"integer"},"eyes":{"type":"integer"},"heart":{"type":"integer"},"hooray":{"type":"integer"},"laugh":{"type":"integer"},"rocket":{"type":"integer"},"total_count":{"type":"integer"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE        = 'Reactions';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"+1":11,"-1":10,"confused":8,"eyes":4,"heart":5,"hooray":6,"laugh":5,"rocket":6,"total_count":11,"url":"https:\\/\\/example.com\\/"}';

    public function __construct(#[MapFrom('+1')] public int $plusOne, #[MapFrom('-1')] public int $minOne, public int $confused, public int $eyes, public int $heart, public int $hooray, public int $laugh, public int $rocket, #[MapFrom('total_count')] public int $totalCount, public string $url)
    {
    }
}
