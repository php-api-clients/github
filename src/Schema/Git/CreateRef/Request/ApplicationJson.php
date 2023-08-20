<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Git\CreateRef\Request;

final readonly class ApplicationJson
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ref",
        "sha"
    ],
    "type": "object",
    "properties": {
        "ref": {
            "type": "string",
            "description": "The name of the fully qualified reference (ie: `refs\\/heads\\/master`). If it doesn\'t start with \'refs\' and have at least two slashes, it will be rejected."
        },
        "sha": {
            "type": "string",
            "description": "The SHA1 value for this reference."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ref": "generated",
    "sha": "generated"
}';

    /**
     * ref: The name of the fully qualified reference (ie: `refs/heads/master`). If it doesn't start with 'refs' and have at least two slashes, it will be rejected.
     * sha: The SHA1 value for this reference.
     */
    public function __construct(public string $ref, public string $sha)
    {
    }
}
