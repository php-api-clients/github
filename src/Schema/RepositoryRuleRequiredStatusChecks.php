<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleRequiredStatusChecks
{
    public const SCHEMA_JSON         = '{
    "title": "required_status_checks",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "required_status_checks"
            ],
            "type": "string"
        },
        "parameters": {
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
        }
    },
    "description": "Choose which status checks must pass before branches can be merged into a branch that matches this rule. When enabled, commits must first be pushed to another branch, then merged or pushed directly to a ref that matches this rule after status checks have passed."
}';
    public const SCHEMA_TITLE        = 'required_status_checks';
    public const SCHEMA_DESCRIPTION  = 'Choose which status checks must pass before branches can be merged into a branch that matches this rule. When enabled, commits must first be pushed to another branch, then merged or pushed directly to a ref that matches this rule after status checks have passed.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "required_status_checks",
    "parameters": {
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
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleRequiredStatusChecks\Parameters|null $parameters)
    {
    }
}
