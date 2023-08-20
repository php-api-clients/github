<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleCommitterEmailPattern
{
    public const SCHEMA_JSON         = '{
    "title": "committer_email_pattern",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "committer_email_pattern"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "operator",
                "pattern"
            ],
            "type": "object",
            "properties": {
                "name": {
                    "type": "string",
                    "description": "How this rule will appear to users."
                },
                "negate": {
                    "type": "boolean",
                    "description": "If true, the rule will fail if the pattern matches."
                },
                "operator": {
                    "enum": [
                        "starts_with",
                        "ends_with",
                        "contains",
                        "regex"
                    ],
                    "type": "string",
                    "description": "The operator to use for matching."
                },
                "pattern": {
                    "type": "string",
                    "description": "The pattern to match with."
                }
            }
        }
    },
    "description": "Parameters to be used for the committer_email_pattern rule"
}';
    public const SCHEMA_TITLE        = 'committer_email_pattern';
    public const SCHEMA_DESCRIPTION  = 'Parameters to be used for the committer_email_pattern rule';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "committer_email_pattern",
    "parameters": {
        "name": "generated",
        "negate": false,
        "operator": "regex",
        "pattern": "generated"
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleCommitterEmailPattern\Parameters|null $parameters)
    {
    }
}
