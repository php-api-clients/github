<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\CreateSelfHostedRunnerGroupForOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "name"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "Name of the runner group."
        },
        "visibility": {
            "enum": [
                "selected",
                "all",
                "private"
            ],
            "type": "string",
            "description": "Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.",
            "default": "all"
        },
        "selected_repository_ids": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the repository."
            },
            "description": "List of repository IDs that can access the runner group."
        },
        "runners": {
            "type": "array",
            "items": {
                "type": "integer",
                "description": "Unique identifier of the runner."
            },
            "description": "List of runner IDs to add to the runner group."
        },
        "allows_public_repositories": {
            "type": "boolean",
            "description": "Whether the runner group can be used by `public` repositories.",
            "default": false
        },
        "restricted_to_workflows": {
            "type": "boolean",
            "description": "If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.",
            "default": false
        },
        "selected_workflows": {
            "type": "array",
            "items": {
                "type": "string",
                "description": "Name of workflow the runner group should be allowed to run. Note that a ref, tag, or long SHA is required.",
                "examples": [
                    "octo-org\\/octo-repo\\/.github\\/workflows\\/deploy.yaml@main"
                ]
            },
            "description": "List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "generated",
    "visibility": "private",
    "selected_repository_ids": [
        24,
        25
    ],
    "runners": [
        8,
        9
    ],
    "allows_public_repositories": false,
    "restricted_to_workflows": false,
    "selected_workflows": [
        "generated",
        "generated"
    ]
}';

    /**
     * name: Name of the runner group.
     * visibility: Visibility of a runner group. You can select all repositories, select individual repositories, or limit access to private repositories.
     * selectedRepositoryIds: List of repository IDs that can access the runner group.
     * runners: List of runner IDs to add to the runner group.
     * allowsPublicRepositories: Whether the runner group can be used by `public` repositories.
     * restrictedToWorkflows: If `true`, the runner group will be restricted to running only the workflows specified in the `selected_workflows` array.
     * selectedWorkflows: List of workflows the runner group should be allowed to run. This setting will be ignored unless `restricted_to_workflows` is set to `true`.
     */
    public function __construct(public string $name, public string|null $visibility, #[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds, public array|null $runners, #[MapFrom('allows_public_repositories')]
    public bool|null $allowsPublicRepositories, #[MapFrom('restricted_to_workflows')]
    public bool|null $restrictedToWorkflows, #[MapFrom('selected_workflows')]
    public array|null $selectedWorkflows,)
    {
    }
}
