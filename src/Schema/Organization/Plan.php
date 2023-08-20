<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Organization;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Plan
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "name": {
            "type": "string"
        },
        "space": {
            "type": "integer"
        },
        "private_repos": {
            "type": "integer"
        },
        "filled_seats": {
            "type": "integer"
        },
        "seats": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "space": 5,
    "private_repos": 13,
    "filled_seats": 12,
    "seats": 5
}';

    public function __construct(public string|null $name, public int|null $space, #[MapFrom('private_repos')]
    public int|null $privateRepos, #[MapFrom('filled_seats')]
    public int|null $filledSeats, public int|null $seats,)
    {
    }
}
