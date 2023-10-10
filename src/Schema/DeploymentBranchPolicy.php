<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DeploymentBranchPolicy
{
    public const SCHEMA_JSON         = '{
    "title": "Deployment branch policy",
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The unique identifier of the branch or tag policy.",
            "examples": [
                361471
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE="
            ]
        },
        "name": {
            "type": "string",
            "description": "The name pattern that branches or tags must match in order to deploy to the environment.",
            "examples": [
                "release\\/*"
            ]
        },
        "type": {
            "enum": [
                "branch",
                "tag"
            ],
            "type": "string",
            "description": "Whether this rule targets a branch or tag.",
            "examples": [
                "branch"
            ]
        }
    },
    "description": "Details of a deployment branch or tag policy."
}';
    public const SCHEMA_TITLE        = 'Deployment branch policy';
    public const SCHEMA_DESCRIPTION  = 'Details of a deployment branch or tag policy.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 361471,
    "node_id": "MDE2OkdhdGVCcmFuY2hQb2xpY3kzNjE0NzE=",
    "name": "release\\/*",
    "type": "branch"
}';

    /**
     * id: The unique identifier of the branch or tag policy.
     * name: The name pattern that branches or tags must match in order to deploy to the environment.
     * type: Whether this rule targets a branch or tag.
     */
    public function __construct(public int|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, public string|null $name, public string|null $type,)
    {
    }
}
