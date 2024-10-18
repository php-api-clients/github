<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnerGroupsForOrg\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "runner_groups"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "number"
        },
        "runner_groups": {
            "type": "array",
            "items": {
                "required": [
                    "id",
                    "name",
                    "visibility",
                    "default",
                    "runners_url",
                    "inherited",
                    "allows_public_repositories"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "number"
                    },
                    "name": {
                        "type": "string"
                    },
                    "visibility": {
                        "type": "string"
                    },
                    "default": {
                        "type": "boolean"
                    },
                    "selected_repositories_url": {
                        "type": "string",
                        "description": "Link to the selected repositories resource for this runner group. Not present unless visibility was set to `selected`"
                    },
                    "runners_url": {
                        "type": "string"
                    },
                    "hosted_runners_url": {
                        "type": "string"
                    },
                    "inherited": {
                        "type": "boolean"
                    },
                    "inherited_allows_public_repositories": {
                        "type": "boolean"
                    },
                    "allows_public_repositories": {
                        "type": "boolean"
                    },
                    "workflow_restrictions_read_only": {
                        "type": "boolean",
                        "description": "If `true`, the `restricted_to_workflows` and `selected_workflows` fields cannot be modified.",
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
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 1.1,
    "runner_groups": [
        {
            "id": 0.2,
            "name": "generated",
            "visibility": "generated",
            "default": false,
            "selected_repositories_url": "generated",
            "runners_url": "generated",
            "hosted_runners_url": "generated",
            "inherited": false,
            "inherited_allows_public_repositories": false,
            "allows_public_repositories": false,
            "workflow_restrictions_read_only": false,
            "restricted_to_workflows": false,
            "selected_workflows": [
                "generated",
                "generated"
            ]
        },
        {
            "id": 0.2,
            "name": "generated",
            "visibility": "generated",
            "default": false,
            "selected_repositories_url": "generated",
            "runners_url": "generated",
            "hosted_runners_url": "generated",
            "inherited": false,
            "inherited_allows_public_repositories": false,
            "allows_public_repositories": false,
            "workflow_restrictions_read_only": false,
            "restricted_to_workflows": false,
            "selected_workflows": [
                "generated",
                "generated"
            ]
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int|float $totalCount, #[MapFrom('runner_groups')]
    public array $runnerGroups,)
    {
    }
}
