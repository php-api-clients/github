<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningLocationDiscussionBody
{
    public const SCHEMA_JSON         = '{
    "required": [
        "discussion_body_url"
    ],
    "type": "object",
    "properties": {
        "discussion_body_url": {
            "type": "string",
            "description": "The URL to the discussion where the secret was detected.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082#discussion-4566270"
            ]
        }
    },
    "description": "Represents a \'discussion_body\' secret scanning location type. This location type shows that a secret was detected in the body of a discussion."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Represents a \'discussion_body\' secret scanning location type. This location type shows that a secret was detected in the body of a discussion.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "discussion_body_url": "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082#discussion-4566270"
}';

    /**
     * discussionBodyUrl: The URL to the discussion where the secret was detected.
     */
    public function __construct(#[MapFrom('discussion_body_url')]
    public string $discussionBodyUrl,)
    {
    }
}
