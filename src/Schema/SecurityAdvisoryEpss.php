<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class SecurityAdvisoryEpss
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "percentage": {
            "maximum": 100,
            "minimum": 0,
            "type": "number"
        },
        "percentile": {
            "maximum": 100,
            "minimum": 0,
            "type": "number"
        }
    },
    "description": "The EPSS scores as calculated by the [Exploit Prediction Scoring System](https:\\/\\/www.first.org\\/epss).",
    "readOnly": true
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The EPSS scores as calculated by the [Exploit Prediction Scoring System](https://www.first.org/epss).';
    public const SCHEMA_EXAMPLE_DATA = '{
    "percentage": 1,
    "percentile": 1
}';

    public function __construct(public int|float|null $percentage, public int|float|null $percentile)
    {
    }
}
