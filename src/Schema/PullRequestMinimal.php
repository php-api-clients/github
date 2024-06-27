<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;

final readonly class PullRequestMinimal
{
    public const SCHEMA_JSON         = '{
    "title": "Pull Request Minimal",
    "required": [
        "id",
        "number",
        "url",
        "head",
        "base"
    ],
    "type": "object",
    "properties": {
        "id": {
            "type": "integer",
            "format": "int64"
        },
        "number": {
            "type": "integer"
        },
        "url": {
            "type": "string"
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
                "sha": {
                    "type": "string"
                },
                "repo": {
                    "required": [
                        "id",
                        "url",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "format": "int64"
                        },
                        "url": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        }
                    }
                }
            }
        },
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
                "sha": {
                    "type": "string"
                },
                "repo": {
                    "required": [
                        "id",
                        "url",
                        "name"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "format": "int64"
                        },
                        "url": {
                            "type": "string"
                        },
                        "name": {
                            "type": "string"
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = 'Pull Request Minimal';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "number": 6,
    "url": "generated",
    "head": {
        "ref": "generated",
        "sha": "generated",
        "repo": {
            "id": 2,
            "url": "generated",
            "name": "generated"
        }
    },
    "base": {
        "ref": "generated",
        "sha": "generated",
        "repo": {
            "id": 2,
            "url": "generated",
            "name": "generated"
        }
    }
}';

    public function __construct(public int $id, public int $number, public string $url, public Schema\PullRequestMinimal\Head $head, public Schema\PullRequestMinimal\Base $base)
    {
    }
}
