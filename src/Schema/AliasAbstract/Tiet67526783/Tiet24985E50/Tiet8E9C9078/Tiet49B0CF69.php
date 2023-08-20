<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet67526783\Tiet24985E50\Tiet8E9C9078;

abstract readonly class Tiet49B0CF69
{
    public const SCHEMA_JSON         = '{
    "required": [
        "content"
    ],
    "type": "object",
    "properties": {
        "content": {
            "enum": [
                "+1",
                "-1",
                "laugh",
                "confused",
                "heart",
                "hooray",
                "rocket",
                "eyes"
            ],
            "type": "string",
            "description": "The [reaction type](https:\\/\\/docs.github.com\\/rest\\/reactions\\/reactions#about-reactions) to add to the team discussion."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "content": "+1"
}';

    /**
     * content: The [reaction type](https://docs.github.com/rest/reactions/reactions#about-reactions) to add to the team discussion.
     */
    public function __construct(public string $content)
    {
    }
}
