<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\Merge\Request;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "base",
        "head"
    ],
    "type": "object",
    "properties": {
        "base": {
            "type": "string",
            "description": "The name of the base branch that the head will be merged into."
        },
        "head": {
            "type": "string",
            "description": "The head to merge. This can be a branch name or a commit SHA1."
        },
        "commit_message": {
            "type": "string",
            "description": "Commit message to use for the merge commit. If omitted, a default message will be used."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "base": "generated",
    "head": "generated",
    "commit_message": "generated"
}';

    /**
     * base: The name of the base branch that the head will be merged into.
     * head: The head to merge. This can be a branch name or a commit SHA1.
     * commitMessage: Commit message to use for the merge commit. If omitted, a default message will be used.
     */
    public function __construct(public string $base, public string $head, #[MapFrom('commit_message')]
    public string|null $commitMessage,)
    {
    }
}
