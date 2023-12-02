<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningLocationDiscussionComment
{
    public const SCHEMA_JSON         = '{
    "required": [
        "discussion_comment_url"
    ],
    "type": "object",
    "properties": {
        "discussion_comment_url": {
            "type": "string",
            "description": "The API URL to get the discussion comment where the secret was detected.",
            "format": "uri",
            "examples": [
                "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082#discussioncomment-4158232"
            ]
        }
    },
    "description": "Represents a \'discussion_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on a discussion."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Represents a \'discussion_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on a discussion.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "discussion_comment_url": "https:\\/\\/github.com\\/community\\/community\\/discussions\\/39082#discussioncomment-4158232"
}';

    /**
     * discussionCommentUrl: The API URL to get the discussion comment where the secret was detected.
     */
    public function __construct(#[MapFrom('discussion_comment_url')]
    public string $discussionCommentUrl,)
    {
    }
}
