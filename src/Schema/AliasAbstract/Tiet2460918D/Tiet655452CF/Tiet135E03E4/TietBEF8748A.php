<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet2460918D\Tiet655452CF\Tiet135E03E4;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietBEF8748A
{
    public const SCHEMA_JSON         = '{
    "required": [
        "seats_cancelled"
    ],
    "type": "object",
    "properties": {
        "seats_cancelled": {
            "type": "integer"
        }
    },
    "description": "The total number of seat assignments cancelled."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The total number of seat assignments cancelled.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "seats_cancelled": 15
}';

    public function __construct(#[MapFrom('seats_cancelled')]
    public int $seatsCancelled,)
    {
    }
}
