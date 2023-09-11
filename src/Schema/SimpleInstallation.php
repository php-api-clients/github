<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleInstallation
{
    public const SCHEMA_JSON         = '{
    "title": "Simple Installation",
    "required": [
        "id",
        "node_id"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "description": "The ID of the installation.",
            "examples": [
                1
            ]
        },
        "node_id": {
            "type": "string",
            "description": "The global node ID of the installation.",
            "examples": [
                "MDQ6VXNlcjU4MzIzMQ=="
            ]
        }
    },
    "description": "The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured\\nfor and sent to a GitHub App. For more information,\\nsee \\"[Using webhooks with GitHub Apps](https:\\/\\/docs.github.com\\/apps\\/creating-github-apps\\/registering-a-github-app\\/using-webhooks-with-github-apps).\\""
}';
    public const SCHEMA_TITLE        = 'Simple Installation';
    public const SCHEMA_DESCRIPTION  = 'The GitHub App installation. Webhook payloads contain the `installation` property when the event is configured
for and sent to a GitHub App. For more information,
see "[Using webhooks with GitHub Apps](https://docs.github.com/apps/creating-github-apps/registering-a-github-app/using-webhooks-with-github-apps)."';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 1,
    "node_id": "MDQ6VXNlcjU4MzIzMQ=="
}';

    /**
     * id: The ID of the installation.
     * nodeId: The global node ID of the installation.
     */
    public function __construct(public int $id, #[MapFrom('node_id')]
    public string $nodeId,)
    {
    }
}
