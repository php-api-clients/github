<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeSecurity\SetConfigurationAsDefault\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "default_for_new_repos": {
            "enum": [
                "all",
                "none",
                "private_and_internal",
                "public"
            ],
            "type": "string",
            "description": "Specify which types of repository this security configuration should be applied to by default."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "default_for_new_repos": "all"
}';

    /**
     * defaultForNewRepos: Specify which types of repository this security configuration should be applied to by default.
     */
    public function __construct(#[MapFrom('default_for_new_repos')]
    public string|null $defaultForNewRepos,)
    {
    }
}
