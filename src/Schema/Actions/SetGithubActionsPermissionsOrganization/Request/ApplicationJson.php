<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Actions\SetGithubActionsPermissionsOrganization\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "enabled_repositories"
    ],
    "type": "object",
    "properties": {
        "enabled_repositories": {
            "enum": [
                "all",
                "none",
                "selected"
            ],
            "type": "string",
            "description": "The policy that controls the repositories in the organization that are allowed to run GitHub Actions."
        },
        "allowed_actions": {
            "enum": [
                "all",
                "local_only",
                "selected"
            ],
            "type": "string",
            "description": "The permissions policy that controls the actions and reusable workflows that are allowed to run."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "enabled_repositories": "selected",
    "allowed_actions": "all"
}';

    /**
     * enabledRepositories: The policy that controls the repositories in the organization that are allowed to run GitHub Actions.
     * allowedActions: The permissions policy that controls the actions and reusable workflows that are allowed to run.
     */
    public function __construct(#[MapFrom('enabled_repositories')]
    public string $enabledRepositories, #[MapFrom('allowed_actions')]
    public string|null $allowedActions,)
    {
    }
}
