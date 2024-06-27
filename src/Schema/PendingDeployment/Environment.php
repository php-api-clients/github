<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\PendingDeployment;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Environment
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The id of the environment.",
            "format": "int64",
            "examples": [
                56780428
            ]
        },
        "node_id": {
            "type": "string",
            "examples": [
                "MDExOkVudmlyb25tZW50NTY3ODA0Mjg="
            ]
        },
        "name": {
            "type": "string",
            "description": "The name of the environment.",
            "examples": [
                "staging"
            ]
        },
        "url": {
            "type": "string",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"
            ]
        },
        "html_url": {
            "type": "string",
            "examples": [
                "https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 56780428,
    "node_id": "MDExOkVudmlyb25tZW50NTY3ODA0Mjg=",
    "name": "staging",
    "url": "https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging",
    "html_url": "https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"
}';

    /**
     * id: The id of the environment.
     * name: The name of the environment.
     */
    public function __construct(public int|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, public string|null $name, public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl,)
    {
    }
}
