<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsHostedRunnerLimits
{
    public const SCHEMA_JSON         = '{
    "required": [
        "public_ips"
    ],
    "type": "object",
    "properties": {
        "public_ips": {
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
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "public_ips": {
        "maximum": 50,
        "current_usage": 17
    }
}';

    /**
     * publicIps: Provides details of static public IP limits for GitHub-hosted Hosted Runners
     */
    public function __construct(#[MapFrom('public_ips')]
    public Schema\ActionsHostedRunnerLimits\PublicIps $publicIps,)
    {
    }
}
