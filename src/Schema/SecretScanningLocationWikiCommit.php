<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class SecretScanningLocationWikiCommit
{
    public const SCHEMA_JSON         = '{
    "required": [
        "path",
        "start_line",
        "end_line",
        "start_column",
        "end_column",
        "blob_sha",
        "page_url",
        "commit_sha",
        "commit_url"
    ],
    "type": "object",
    "properties": {
        "path": {
            "type": "string",
            "description": "The file path of the wiki page",
            "examples": [
                "\\/example\\/Home.md"
            ]
        },
        "start_line": {
            "type": "number",
            "description": "Line number at which the secret starts in the file"
        },
        "end_line": {
            "type": "number",
            "description": "Line number at which the secret ends in the file"
        },
        "start_column": {
            "type": "number",
            "description": "The column at which the secret starts within the start line when the file is interpreted as 8-bit ASCII."
        },
        "end_column": {
            "type": "number",
            "description": "The column at which the secret ends within the end line when the file is interpreted as 8-bit ASCII."
        },
        "blob_sha": {
            "type": "string",
            "description": "SHA-1 hash ID of the associated blob",
            "examples": [
                "af5626b4a114abcb82d63db7c8082c3c4756e51b"
            ]
        },
        "page_url": {
            "type": "string",
            "description": "The GitHub URL to get the associated wiki page",
            "examples": [
                "https:\\/\\/github.com\\/octocat\\/Hello-World\\/wiki\\/Home\\/302c0b7e200761c9dd9b57e57db540ee0b4293a5"
            ]
        },
        "commit_sha": {
            "type": "string",
            "description": "SHA-1 hash ID of the associated commit",
            "examples": [
                "302c0b7e200761c9dd9b57e57db540ee0b4293a5"
            ]
        },
        "commit_url": {
            "type": "string",
            "description": "The GitHub URL to get the associated wiki commit",
            "examples": [
                "https:\\/\\/github.com\\/octocat\\/Hello-World\\/wiki\\/_compare\\/302c0b7e200761c9dd9b57e57db540ee0b4293a5"
            ]
        }
    },
    "description": "Represents a \'wiki_commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository wiki."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Represents a \'wiki_commit\' secret scanning location type. This location type shows that a secret was detected inside a commit to a repository wiki.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "path": "\\/example\\/Home.md",
    "start_line": 1,
    "end_line": 0.8,
    "start_column": 1.2,
    "end_column": 1,
    "blob_sha": "af5626b4a114abcb82d63db7c8082c3c4756e51b",
    "page_url": "https:\\/\\/github.com\\/octocat\\/Hello-World\\/wiki\\/Home\\/302c0b7e200761c9dd9b57e57db540ee0b4293a5",
    "commit_sha": "302c0b7e200761c9dd9b57e57db540ee0b4293a5",
    "commit_url": "https:\\/\\/github.com\\/octocat\\/Hello-World\\/wiki\\/_compare\\/302c0b7e200761c9dd9b57e57db540ee0b4293a5"
}';

    /**
     * path: The file path of the wiki page
     * startLine: Line number at which the secret starts in the file
     * endLine: Line number at which the secret ends in the file
     * startColumn: The column at which the secret starts within the start line when the file is interpreted as 8-bit ASCII.
     * endColumn: The column at which the secret ends within the end line when the file is interpreted as 8-bit ASCII.
     * blobSha: SHA-1 hash ID of the associated blob
     * pageUrl: The GitHub URL to get the associated wiki page
     * commitSha: SHA-1 hash ID of the associated commit
     * commitUrl: The GitHub URL to get the associated wiki commit
     */
    public function __construct(public string $path, #[MapFrom('start_line')]
    public int|float $startLine, #[MapFrom('end_line')]
    public int|float $endLine, #[MapFrom('start_column')]
    public int|float $startColumn, #[MapFrom('end_column')]
    public int|float $endColumn, #[MapFrom('blob_sha')]
    public string $blobSha, #[MapFrom('page_url')]
    public string $pageUrl, #[MapFrom('commit_sha')]
    public string $commitSha, #[MapFrom('commit_url')]
    public string $commitUrl,)
    {
    }
}
