<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookDeploymentReviewApproved;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class WorkflowJobRuns
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "conclusion": {
            "type": [
                "null"
            ]
        },
        "created_at": {
            "type": "string"
        },
        "environment": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": [
                "string",
                "null"
            ]
        },
        "status": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "conclusion": "generated",
    "created_at": "generated",
    "environment": "generated",
    "html_url": "generated",
    "id": 2,
    "name": "generated",
    "status": "generated",
    "updated_at": "generated"
}';

    public function __construct(public string $conclusion, #[MapFrom('created_at')]
    public string|null $createdAt, public string|null $environment, #[MapFrom('html_url')]
    public string|null $htmlUrl, public int|null $id, public string|null $name, public string|null $status, #[MapFrom('updated_at')]
    public string|null $updatedAt,)
    {
    }
}
