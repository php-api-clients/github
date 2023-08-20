<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet07DCB36B\Tiet91F472DA\TietA9474AC9;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet7F1CE862
{
    public const SCHEMA_JSON         = '{
    "required": [
        "html",
        "pull_request"
    ],
    "type": "object",
    "properties": {
        "html": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            }
        },
        "pull_request": {
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string"
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "html": {
        "href": "generated"
    },
    "pull_request": {
        "href": "generated"
    }
}';

    public function __construct(public Schema\TimelineReviewedEvent\Links\Html $html, #[MapFrom('pull_request')]
    public Schema\TimelineReviewedEvent\Links\PullRequest $pullRequest,)
    {
    }
}
