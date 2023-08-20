<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Projects\CreateCard\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "oneOf": [
        {
            "required": [
                "note"
            ],
            "type": "object",
            "properties": {
                "note": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The project card\'s note",
                    "examples": [
                        "Update all gems"
                    ]
                }
            }
        },
        {
            "required": [
                "content_id",
                "content_type"
            ],
            "type": "object",
            "properties": {
                "content_id": {
                    "type": "integer",
                    "description": "The unique identifier of the content associated with the card",
                    "examples": [
                        42
                    ]
                },
                "content_type": {
                    "type": "string",
                    "description": "The piece of content associated with the card",
                    "examples": [
                        "PullRequest"
                    ]
                }
            }
        }
    ]
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
