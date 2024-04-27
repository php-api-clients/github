<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet3725E255\Tiet9D780678\Tiet2692985E;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class TietE129B0E5
{
    public const SCHEMA_JSON         = '{
    "required": [
        "html",
        "pull_request"
    ],
    "type": "object",
    "properties": {
        "html": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
                }
            }
        },
        "pull_request": {
            "title": "Link",
            "required": [
                "href"
            ],
            "type": "object",
            "properties": {
                "href": {
                    "type": "string",
                    "format": "uri-template"
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

    public function __construct(public Schema\WebhooksReview\Links\Html $html, #[MapFrom('pull_request')]
    public Schema\WebhooksReview\Links\PullRequest $pullRequest,)
    {
    }
}
