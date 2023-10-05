<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Migrations\StartForOrg\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "repositories"
    ],
    "type": "object",
    "properties": {
        "repositories": {
            "type": "array",
            "items": {
                "type": "string"
            },
            "description": "A list of arrays indicating which repositories should be migrated."
        },
        "lock_repositories": {
            "type": "boolean",
            "description": "Indicates whether repositories should be locked (to prevent manipulation) while migrating data.",
            "default": false,
            "examples": [
                true
            ]
        },
        "exclude_metadata": {
            "type": "boolean",
            "description": "Indicates whether metadata should be excluded and only git source should be included for the migration.",
            "default": false
        },
        "exclude_git_data": {
            "type": "boolean",
            "description": "Indicates whether the repository git data should be excluded from the migration.",
            "default": false
        },
        "exclude_attachments": {
            "type": "boolean",
            "description": "Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).",
            "default": false,
            "examples": [
                true
            ]
        },
        "exclude_releases": {
            "type": "boolean",
            "description": "Indicates whether releases should be excluded from the migration (to reduce migration archive file size).",
            "default": false,
            "examples": [
                true
            ]
        },
        "exclude_owner_projects": {
            "type": "boolean",
            "description": "Indicates whether projects owned by the organization or users should be excluded. from the migration.",
            "default": false,
            "examples": [
                true
            ]
        },
        "org_metadata_only": {
            "type": "boolean",
            "description": "Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).",
            "default": false,
            "examples": [
                true
            ]
        },
        "exclude": {
            "type": "array",
            "items": {
                "enum": [
                    "repositories"
                ],
                "type": "string"
            },
            "description": "Exclude related items from being returned in the response in order to improve performance of the request."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repositories": [
        "generated",
        "generated"
    ],
    "lock_repositories": true,
    "exclude_metadata": false,
    "exclude_git_data": false,
    "exclude_attachments": true,
    "exclude_releases": true,
    "exclude_owner_projects": true,
    "org_metadata_only": true,
    "exclude": [
        "generated",
        "generated"
    ]
}';

    /**
     * repositories: A list of arrays indicating which repositories should be migrated.
     * lockRepositories: Indicates whether repositories should be locked (to prevent manipulation) while migrating data.
     * excludeMetadata: Indicates whether metadata should be excluded and only git source should be included for the migration.
     * excludeGitData: Indicates whether the repository git data should be excluded from the migration.
     * excludeAttachments: Indicates whether attachments should be excluded from the migration (to reduce migration archive file size).
     * excludeReleases: Indicates whether releases should be excluded from the migration (to reduce migration archive file size).
     * excludeOwnerProjects: Indicates whether projects owned by the organization or users should be excluded. from the migration.
     * orgMetadataOnly: Indicates whether this should only include organization metadata (repositories array should be empty and will ignore other flags).
     * exclude: Exclude related items from being returned in the response in order to improve performance of the request.
     */
    public function __construct(public array $repositories, #[MapFrom('lock_repositories')]
    public bool|null $lockRepositories, #[MapFrom('exclude_metadata')]
    public bool|null $excludeMetadata, #[MapFrom('exclude_git_data')]
    public bool|null $excludeGitData, #[MapFrom('exclude_attachments')]
    public bool|null $excludeAttachments, #[MapFrom('exclude_releases')]
    public bool|null $excludeReleases, #[MapFrom('exclude_owner_projects')]
    public bool|null $excludeOwnerProjects, #[MapFrom('org_metadata_only')]
    public bool|null $orgMetadataOnly, public array|null $exclude,)
    {
    }
}
