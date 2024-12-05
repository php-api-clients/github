<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningDefaultSetupOptions
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "runner_type": {
            "enum": [
                "standard",
                "labeled",
                "not_set"
            ],
            "type": "string",
            "description": "Whether to use labeled runners or standard GitHub runners."
        },
        "runner_label": {
            "type": [
                "string",
                "null"
            ],
            "description": "The label of the runner to use for code scanning default setup when runner_type is \'labeled\'."
        }
    },
    "description": "Feature options for code scanning default setup"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Feature options for code scanning default setup';
    public const SCHEMA_EXAMPLE_DATA = '{
    "runner_type": "standard",
    "runner_label": "generated"
}';

    /**
     * runnerType: Whether to use labeled runners or standard GitHub runners.
     * runnerLabel: The label of the runner to use for code scanning default setup when runner_type is 'labeled'.
     */
    public function __construct(#[MapFrom('runner_type')]
    public string|null $runnerType, #[MapFrom('runner_label')]
    public string|null $runnerLabel,)
    {
    }
}
