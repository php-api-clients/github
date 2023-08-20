<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryRulesetConditionsRepositoryNameTarget
{
    public const SCHEMA_JSON         = '{
    "title": "Repository ruleset conditions for repository names",
    "required": [
        "repository_name"
    ],
    "type": "object",
    "properties": {
        "repository_name": {
            "type": "object",
            "properties": {
                "include": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "Array of repository names or patterns to include. One of these patterns must match for the condition to pass. Also accepts `~ALL` to include all repositories."
                },
                "exclude": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "Array of repository names or patterns to exclude. The condition will not pass if any of these patterns match."
                },
                "protected": {
                    "type": "boolean",
                    "description": "Whether renaming of target repositories is prevented."
                }
            }
        }
    },
    "description": "Parameters for a repository name condition"
}';
    public const SCHEMA_TITLE        = 'Repository ruleset conditions for repository names';
    public const SCHEMA_DESCRIPTION  = 'Parameters for a repository name condition';
    public const SCHEMA_EXAMPLE_DATA = '{
    "repository_name": {
        "include": [
            "generated",
            "generated"
        ],
        "exclude": [
            "generated",
            "generated"
        ],
        "protected": false
    }
}';

    public function __construct(#[MapFrom('repository_name')]
    public Schema\RepositoryRulesetConditionsRepositoryNameTarget\RepositoryName $repositoryName,)
    {
    }
}
