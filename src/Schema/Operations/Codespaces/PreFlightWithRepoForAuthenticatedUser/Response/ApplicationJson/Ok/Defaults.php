<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Codespaces\PreFlightWithRepoForAuthenticatedUser\Response\ApplicationJson\Ok;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Defaults
{
    public const SCHEMA_JSON         = '{
    "required": [
        "location",
        "devcontainer_path"
    ],
    "type": "object",
    "properties": {
        "location": {
            "type": "string"
        },
        "devcontainer_path": {
            "type": [
                "string",
                "null"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "location": "generated",
    "devcontainer_path": "generated"
}';

    public function __construct(public string $location, #[MapFrom('devcontainer_path')]
    public string|null $devcontainerPath,)
    {
    }
}
