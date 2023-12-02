<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningLocationPullRequestComment
{
    public const SCHEMA_JSON         = '{
    "required": [
        "pull_request_comment_url"
    ],
    "type": "object",
    "properties": {
        "pull_request_comment_url": {
            "type": "string",
            "description": "The API URL to get the pull request comment where the secret was detected.",
            "format": "uri",
            "examples": [
                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"
            ]
        }
    },
    "description": "Represents a \'pull_request_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on a pull request."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Represents a \'pull_request_comment\' secret scanning location type. This location type shows that a secret was detected in a comment on a pull request.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "pull_request_comment_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments\\/1081119451"
}';

    /**
     * pullRequestCommentUrl: The API URL to get the pull request comment where the secret was detected.
     */
    public function __construct(#[MapFrom('pull_request_comment_url')]
    public string $pullRequestCommentUrl,)
    {
    }
}
