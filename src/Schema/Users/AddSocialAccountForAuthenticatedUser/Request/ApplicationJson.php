<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Users\AddSocialAccountForAuthenticatedUser\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "account_urls"
    ],
    "type": "object",
    "properties": {
        "account_urls": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "https:\\/\\/twitter.com\\/github"
                ]
            },
            "description": "Full URLs for the social media profiles to add.",
            "examples": []
        }
    },
    "example": {
        "account_urls": [
            "https:\\/\\/www.linkedin.com\\/company\\/github\\/",
            "https:\\/\\/twitter.com\\/github"
        ]
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "account_urls": [
        "generated",
        "generated"
    ]
}';

    /**
     * accountUrls: Full URLs for the social media profiles to add.
     */
    public function __construct(#[MapFrom('account_urls')]
    public array $accountUrls,)
    {
    }
}
