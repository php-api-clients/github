<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class MergeGroup
{
    public const SCHEMA_JSON         = '{
    "title": "Merge Group",
    "required": [
        "head_sha",
        "head_ref",
        "base_sha",
        "base_ref",
        "head_commit"
    ],
    "type": "object",
    "properties": {
        "head_sha": {
            "type": "string",
            "description": "The SHA of the merge group."
        },
        "head_ref": {
            "type": "string",
            "description": "The full ref of the merge group."
        },
        "base_sha": {
            "type": "string",
            "description": "The SHA of the merge group\'s parent commit."
        },
        "base_ref": {
            "type": "string",
            "description": "The full ref of the branch the merge group will be merged into."
        },
        "head_commit": {
            "title": "Simple Commit",
            "required": [
                "id",
                "tree_id",
                "message",
                "timestamp",
                "author",
                "committer"
            ],
            "type": "object",
            "properties": {
                "id": {
                    "type": "string",
                    "description": "SHA for the commit",
                    "examples": [
                        "7638417db6d59f3c431d3e1f261cc637155684cd"
                    ]
                },
                "tree_id": {
                    "type": "string",
                    "description": "SHA for the commit\'s tree"
                },
                "message": {
                    "type": "string",
                    "description": "Message describing the purpose of the commit",
                    "examples": [
                        "Fix #42"
                    ]
                },
                "timestamp": {
                    "type": "string",
                    "description": "Timestamp of the commit",
                    "format": "date-time",
                    "examples": [
                        "2014-08-09T08:02:04+12:00"
                    ]
                },
                "author": {
                    "required": [
                        "name",
                        "email"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "name": {
                            "type": "string",
                            "description": "Name of the commit\'s author",
                            "examples": [
                                "Monalisa Octocat"
                            ]
                        },
                        "email": {
                            "type": "string",
                            "description": "Git email address of the commit\'s author",
                            "format": "email",
                            "examples": [
                                "monalisa.octocat@example.com"
                            ]
                        }
                    },
                    "description": "Information about the Git author"
                },
                "committer": {
                    "required": [
                        "name",
                        "email"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "name": {
                            "type": "string",
                            "description": "Name of the commit\'s committer",
                            "examples": [
                                "Monalisa Octocat"
                            ]
                        },
                        "email": {
                            "type": "string",
                            "description": "Git email address of the commit\'s committer",
                            "format": "email",
                            "examples": [
                                "monalisa.octocat@example.com"
                            ]
                        }
                    },
                    "description": "Information about the Git committer"
                }
            },
            "description": "A commit."
        }
    },
    "description": "A group of pull requests that the merge queue has grouped together to be merged.\\n"
}';
    public const SCHEMA_TITLE        = 'Merge Group';
    public const SCHEMA_DESCRIPTION  = 'A group of pull requests that the merge queue has grouped together to be merged.
';
    public const SCHEMA_EXAMPLE_DATA = '{
    "head_sha": "generated",
    "head_ref": "generated",
    "base_sha": "generated",
    "base_ref": "generated",
    "head_commit": {
        "id": "7638417db6d59f3c431d3e1f261cc637155684cd",
        "tree_id": "generated",
        "message": "Fix #42",
        "timestamp": "2014-08-09T08:02:04+12:00",
        "author": {
            "name": "Monalisa Octocat",
            "email": "monalisa.octocat@example.com"
        },
        "committer": {
            "name": "Monalisa Octocat",
            "email": "monalisa.octocat@example.com"
        }
    }
}';

    /**
     * headSha: The SHA of the merge group.
     * headRef: The full ref of the merge group.
     * baseSha: The SHA of the merge group's parent commit.
     * baseRef: The full ref of the branch the merge group will be merged into.
     * headCommit: A commit.
     */
    public function __construct(#[MapFrom('head_sha')]
    public string $headSha, #[MapFrom('head_ref')]
    public string $headRef, #[MapFrom('base_sha')]
    public string $baseSha, #[MapFrom('base_ref')]
    public string $baseRef, #[MapFrom('head_commit')]
    public Schema\SimpleCommit $headCommit,)
    {
    }
}
