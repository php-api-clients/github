<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class OrgPrivateRegistryConfigurationWithSelectedRepositories
{
    public const SCHEMA_JSON         = '{
    "title": "Organization private registry",
    "required": [
        "name",
        "registry_type",
        "visibility",
        "created_at",
        "updated_at"
    ],
    "type": "object",
    "properties": {
        "name": {
            "type": "string",
            "description": "The name of the private registry configuration.",
            "examples": [
                "MAVEN_REPOSITORY_SECRET"
            ]
        },
        "registry_type": {
            "enum": [
                "maven_repository"
            ],
            "type": "string",
            "description": "The registry type."
        },
        "username": {
            "type": "string",
            "description": "The username to use when authenticating with the private registry.",
            "examples": [
                "monalisa"
            ]
        },
        "visibility": {
            "enum": [
                "all",
                "private",
                "selected"
            ],
            "type": "string",
            "description": "Which type of organization repositories have access to the private registry. `selected` means only the repositories specified by `selected_repository_ids` can access the private registry."
        },
        "selected_repository_ids": {
            "type": "array",
            "items": {
                "type": "integer"
            },
            "description": "An array of repository IDs that can access the organization private registry when `visibility` is set to `selected`."
        },
        "created_at": {
            "type": "string",
            "format": "date-time"
        },
        "updated_at": {
            "type": "string",
            "format": "date-time"
        }
    },
    "description": "Private registry configuration for an organization"
}';
    public const SCHEMA_TITLE        = 'Organization private registry';
    public const SCHEMA_DESCRIPTION  = 'Private registry configuration for an organization';
    public const SCHEMA_EXAMPLE_DATA = '{
    "name": "MAVEN_REPOSITORY_SECRET",
    "registry_type": "maven_repository",
    "username": "monalisa",
    "visibility": "selected",
    "selected_repository_ids": [
        24,
        25
    ],
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * name: The name of the private registry configuration.
     * registryType: The registry type.
     * username: The username to use when authenticating with the private registry.
     * visibility: Which type of organization repositories have access to the private registry. `selected` means only the repositories specified by `selected_repository_ids` can access the private registry.
     * selectedRepositoryIds: An array of repository IDs that can access the organization private registry when `visibility` is set to `selected`.
     */
    public function __construct(public string $name, #[MapFrom('registry_type')]
    public string $registryType, public string|null $username, public string $visibility, #[MapFrom('selected_repository_ids')]
    public array|null $selectedRepositoryIds, #[MapFrom('created_at')]
    public string $createdAt, #[MapFrom('updated_at')]
    public string $updatedAt,)
    {
    }
}
