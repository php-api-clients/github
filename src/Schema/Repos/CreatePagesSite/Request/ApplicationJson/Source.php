<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Repos\CreatePagesSite\Request\ApplicationJson;

final readonly class Source
{
    public const SCHEMA_JSON         = '{
    "required": [
        "branch"
    ],
    "type": "object",
    "properties": {
        "branch": {
            "type": "string",
            "description": "The repository branch used to publish your site\'s source files."
        },
        "path": {
            "enum": [
                "\\/",
                "\\/docs"
            ],
            "type": "string",
            "description": "The repository directory that includes the source files for the Pages site. Allowed paths are `\\/` or `\\/docs`. Default: `\\/`",
            "default": "\\/"
        }
    },
    "description": "The source branch and directory used to publish your Pages site."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The source branch and directory used to publish your Pages site.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "branch": "generated",
    "path": "\\/docs"
}';

    /**
     * branch: The repository branch used to publish your site's source files.
     * path: The repository directory that includes the source files for the Pages site. Allowed paths are `/` or `/docs`. Default: `/`
     */
    public function __construct(public string $branch, public string|null $path)
    {
    }
}
