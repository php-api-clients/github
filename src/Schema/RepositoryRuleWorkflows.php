<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class RepositoryRuleWorkflows
{
    public const SCHEMA_JSON         = '{
    "title": "workflows",
    "required": [
        "type"
    ],
    "type": "object",
    "properties": {
        "type": {
            "enum": [
                "workflows"
            ],
            "type": "string"
        },
        "parameters": {
            "required": [
                "workflows"
            ],
            "type": "object",
            "properties": {
                "do_not_enforce_on_create": {
                    "type": "boolean",
                    "description": "Allow repositories and branches to be created if a check would otherwise prohibit it."
                },
                "workflows": {
                    "type": "array",
                    "items": {
                        "title": "WorkflowFileReference",
                        "required": [
                            "path",
                            "repository_id"
                        ],
                        "type": "object",
                        "properties": {
                            "path": {
                                "type": "string",
                                "description": "The path to the workflow file"
                            },
                            "ref": {
                                "type": "string",
                                "description": "The ref (branch or tag) of the workflow file to use"
                            },
                            "repository_id": {
                                "type": "integer",
                                "description": "The ID of the repository where the workflow is defined"
                            },
                            "sha": {
                                "type": "string",
                                "description": "The commit SHA of the workflow file to use"
                            }
                        },
                        "description": "A workflow that must run for this rule to pass"
                    },
                    "description": "Workflows that must pass for this rule to pass."
                }
            }
        }
    },
    "description": "Require all changes made to a targeted branch to pass the specified workflows before they can be merged."
}';
    public const SCHEMA_TITLE        = 'workflows';
    public const SCHEMA_DESCRIPTION  = 'Require all changes made to a targeted branch to pass the specified workflows before they can be merged.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "type": "workflows",
    "parameters": {
        "do_not_enforce_on_create": false,
        "workflows": [
            {
                "path": "generated",
                "ref": "generated",
                "repository_id": 13,
                "sha": "generated"
            },
            {
                "path": "generated",
                "ref": "generated",
                "repository_id": 13,
                "sha": "generated"
            }
        ]
    }
}';

    public function __construct(public string $type, public Schema\RepositoryRuleWorkflows\Parameters|null $parameters)
    {
    }
}
