<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\ActionsHostedRunnerLimits;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PublicIps
{
    public const SCHEMA_JSON         = '{
    "title": "Static public IP Limits for GitHub-hosted Hosted Runners.",
    "required": [
        "maximum",
        "current_usage"
    ],
    "type": "object",
    "properties": {
        "maximum": {
            "type": "integer",
            "description": "The maximum number of static public IP addresses that can be used for Hosted Runners.",
            "examples": [
                50
            ]
        },
        "current_usage": {
            "type": "integer",
            "description": "The current number of static public IP addresses in use by Hosted Runners.",
            "examples": [
                17
            ]
        }
    },
    "description": "Provides details of static public IP limits for GitHub-hosted Hosted Runners"
}';
    public const SCHEMA_TITLE        = 'Static public IP Limits for GitHub-hosted Hosted Runners.';
    public const SCHEMA_DESCRIPTION  = 'Provides details of static public IP limits for GitHub-hosted Hosted Runners';
    public const SCHEMA_EXAMPLE_DATA = '{
    "maximum": 50,
    "current_usage": 17
}';

    /**
     * maximum: The maximum number of static public IP addresses that can be used for Hosted Runners.
     * currentUsage: The current number of static public IP addresses in use by Hosted Runners.
     */
    public function __construct(public int $maximum, #[MapFrom('current_usage')]
    public int $currentUsage,)
    {
    }
}
