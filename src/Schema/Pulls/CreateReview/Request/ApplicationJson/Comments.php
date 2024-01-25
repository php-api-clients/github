<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Pulls\CreateReview\Request\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Comments
{
    public const SCHEMA_JSON         = '{
    "required": [
        "path",
        "body"
    ],
    "type": "object",
    "properties": {
        "path": {
            "type": "string",
            "description": "The relative path to the file that necessitates a review comment."
        },
        "position": {
            "type": "integer",
            "description": "The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. The `position` value equals the number of lines down from the first \\"@@\\" hunk header in the file you want to add a comment. The line just below the \\"@@\\" line is position 1, the next line is position 2, and so on. The position in the diff continues to increase through lines of whitespace and additional hunks until the beginning of a new file."
        },
        "body": {
            "type": "string",
            "description": "Text of the review comment."
        },
        "line": {
            "type": "integer",
            "examples": [
                28
            ]
        },
        "side": {
            "type": "string",
            "examples": [
                "RIGHT"
            ]
        },
        "start_line": {
            "type": "integer",
            "examples": [
                26
            ]
        },
        "start_side": {
            "type": "string",
            "examples": [
                "LEFT"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "path": "generated",
    "position": 8,
    "body": "generated",
    "line": 28,
    "side": "RIGHT",
    "start_line": 26,
    "start_side": "LEFT"
}';

    /**
     * path: The relative path to the file that necessitates a review comment.
     * position: The position in the diff where you want to add a review comment. Note this value is not the same as the line number in the file. The `position` value equals the number of lines down from the first "@@" hunk header in the file you want to add a comment. The line just below the "@@" line is position 1, the next line is position 2, and so on. The position in the diff continues to increase through lines of whitespace and additional hunks until the beginning of a new file.
     * body: Text of the review comment.
     */
    public function __construct(public string $path, public int|null $position, public string $body, public int|null $line, public string|null $side, #[MapFrom('start_line')]
    public int|null $startLine, #[MapFrom('start_side')]
    public string|null $startSide,)
    {
    }
}
