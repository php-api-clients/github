<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\RepositoryRuleRequiredStatusChecks;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Parameters
{
    public const SCHEMA_JSON         = '{
    "required": [
        "required_status_checks",
        "strict_required_status_checks_policy"
    ],
    "type": "object",
    "properties": {
        "required_status_checks": {
            "type": "array",
            "items": {
                "title": "StatusCheckConfiguration",
                "required": [
                    "context"
                ],
                "type": "object",
                "properties": {
                    "context": {
                        "type": "string",
                        "description": "The status check context name that must be present on the commit."
                    },
                    "integration_id": {
                        "type": "integer",
                        "description": "The optional integration ID that this status check must originate from."
                    }
                },
                "description": "Required status check"
            },
            "description": "Status checks that are required."
        },
        "strict_required_status_checks_policy": {
            "type": "boolean",
            "description": "Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "required_status_checks": [
        {
            "context": "generated",
            "integration_id": 14
        },
        {
            "context": "generated",
            "integration_id": 14
        }
    ],
    "strict_required_status_checks_policy": false
}';

    /**
     * requiredStatusChecks: Status checks that are required.
     * strictRequiredStatusChecksPolicy: Whether pull requests targeting a matching branch must be tested with the latest code. This setting will not take effect unless at least one status check is enabled.
     */
    public function __construct(#[MapFrom('required_status_checks')]
    public array $requiredStatusChecks, #[MapFrom('strict_required_status_checks_policy')]
    public bool $strictRequiredStatusChecksPolicy,)
    {
    }
}
