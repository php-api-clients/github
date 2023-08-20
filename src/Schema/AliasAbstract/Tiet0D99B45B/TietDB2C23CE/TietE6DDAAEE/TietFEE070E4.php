<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet0D99B45B\TietDB2C23CE\TietE6DDAAEE;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietFEE070E4
{
    public const SCHEMA_JSON         = '{
    "required": [
        "job_id",
        "duration_ms"
    ],
    "type": "object",
    "properties": {
        "job_id": {
            "type": "integer"
        },
        "duration_ms": {
            "type": "integer"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "job_id": 6,
    "duration_ms": 11
}';

    public function __construct(#[MapFrom('job_id')]
    public int $jobId, #[MapFrom('duration_ms')]
    public int $durationMs,)
    {
    }
}
