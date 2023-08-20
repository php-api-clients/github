<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet62DE450E\TietBDB05BA1\Tiet285A643A;

use ApiClients\Client\GitHub\Schema;

abstract readonly class Tiet4D2CA009
{
    public const SCHEMA_JSON         = '{
    "required": [
        "url",
        "id",
        "number",
        "head",
        "base"
    ],
    "type": "object",
    "properties": {
        "base": {
            "required": [
                "ref",
                "sha",
                "repo"
            ],
            "type": "object",
            "properties": {
                "ref": {
                    "type": "string"
                },
                "repo": {
                    "title": "Repo Ref",
                    "required": [
                        "id",
                        "url",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer"
                        },
                        "name": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "sha": {
                    "type": "string"
                }
            }
        },
        "head": {
            "required": [
                "ref",
                "sha",
                "repo"
            ],
            "type": "object",
            "properties": {
                "ref": {
                    "type": "string"
                },
                "repo": {
                    "title": "Repo Ref",
                    "required": [
                        "id",
                        "url",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer"
                        },
                        "name": {
                            "type": "string"
                        },
                        "url": {
                            "type": "string",
                            "format": "uri"
                        }
                    }
                },
                "sha": {
                    "type": "string"
                }
            }
        },
        "id": {
            "type": "number"
        },
        "number": {
            "type": "number"
        },
        "url": {
            "type": "string",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "base": {
        "ref": "generated",
        "repo": {
            "id": 2,
            "name": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "sha": "generated"
    },
    "head": {
        "ref": "generated",
        "repo": {
            "id": 2,
            "name": "generated",
            "url": "https:\\/\\/example.com\\/"
        },
        "sha": "generated"
    },
    "id": 0.2,
    "number": 0.6,
    "url": "https:\\/\\/example.com\\/"
}';

    public function __construct(public Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Base $base, public Schema\WebhookWorkflowRunCompleted\WorkflowRun\PullRequests\Head $head, public int|float $id, public int|float $number, public string $url)
    {
    }
}
