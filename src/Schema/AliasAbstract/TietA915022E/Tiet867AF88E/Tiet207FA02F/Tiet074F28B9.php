<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietA915022E\Tiet867AF88E\Tiet207FA02F;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet074F28B9
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
