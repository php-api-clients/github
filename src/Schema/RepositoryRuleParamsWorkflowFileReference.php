<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRuleParamsWorkflowFileReference
{
    public const SCHEMA_JSON         = '{
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
}';
    public const SCHEMA_TITLE        = 'WorkflowFileReference';
    public const SCHEMA_DESCRIPTION  = 'A workflow that must run for this rule to pass';
    public const SCHEMA_EXAMPLE_DATA = '{
    "path": "generated",
    "ref": "generated",
    "repository_id": 13,
    "sha": "generated"
}';

    /**
     * path: The path to the workflow file
     * ref: The ref (branch or tag) of the workflow file to use
     * repositoryId: The ID of the repository where the workflow is defined
     * sha: The commit SHA of the workflow file to use
     */
    public function __construct(public string $path, public string|null $ref, #[MapFrom('repository_id')]
    public int $repositoryId, public string|null $sha,)
    {
    }
}
