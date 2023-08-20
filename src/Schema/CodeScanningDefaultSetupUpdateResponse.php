<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningDefaultSetupUpdateResponse
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "run_id": {
            "type": "integer",
            "description": "ID of the corresponding run."
        },
        "run_url": {
            "type": "string",
            "description": "URL of the corresponding run."
        }
    },
    "description": "You can use `run_url` to track the status of the run. This includes a property status and conclusion.\\nYou should not rely on this always being an actions workflow run object."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'You can use `run_url` to track the status of the run. This includes a property status and conclusion.
You should not rely on this always being an actions workflow run object.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "run_id": 6,
    "run_url": "generated"
}';

    /**
     * runId: ID of the corresponding run.
     * runUrl: URL of the corresponding run.
     */
    public function __construct(#[MapFrom('run_id')]
    public int|null $runId, #[MapFrom('run_url')]
    public string|null $runUrl,)
    {
    }
}
