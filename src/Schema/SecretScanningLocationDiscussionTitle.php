<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningLocationDiscussionTitle
{
    public const SCHEMA_JSON         = '{
    "required": [
        "discussion_title_url"
    ],
    "type": "object",
    "properties": {
        "discussion_title_url": {
            "type": "string",
            "description": "The URL to the discussion where the secret was detected.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082"
            ]
        }
    },
    "description": "Represents a \'discussion_title\' secret scanning location type. This location type shows that a secret was detected in the title of a discussion."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Represents a \'discussion_title\' secret scanning location type. This location type shows that a secret was detected in the title of a discussion.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "discussion_title_url": "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082"
}';

    /**
     * discussionTitleUrl: The URL to the discussion where the secret was detected.
     */
    public function __construct(#[MapFrom('discussion_title_url')]
    public string $discussionTitleUrl,)
    {
    }
}
