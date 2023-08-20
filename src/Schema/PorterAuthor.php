<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class PorterAuthor
{
    public const SCHEMA_JSON         = '{
    "title": "Porter Author",
    "required": [
        "id",
        "remote_id",
        "remote_name",
        "email",
        "name",
        "url",
        "import_url"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "remote_id": {
            "type": "string"
        },
        "remote_name": {
            "type": "string"
        },
        "email": {
            "type": "string"
        },
        "name": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "import_url": {
            "type": "string",
            "format": "uri"
        }
    },
    "description": "Porter Author"
}';
    public const SCHEMA_TITLE        = 'Porter Author';
    public const SCHEMA_DESCRIPTION  = 'Porter Author';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "remote_id": "generated",
    "remote_name": "generated",
    "email": "generated",
    "name": "generated",
    "url": "https:\\/\\/example.com\\/",
    "import_url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public int $id, #[MapFrom('remote_id')]
    public string $remoteId, #[MapFrom('remote_name')]
    public string $remoteName, public string $email, public string $name, public string $url, #[MapFrom('import_url')]
    public string $importUrl,)
    {
    }
}
