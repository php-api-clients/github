<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAutofixCommits
{
    public const SCHEMA_JSON         = '{
    "type": [
        "object",
        "null"
    ],
    "properties": {
        "target_ref": {
            "type": "string",
            "description": "The Git reference of target branch for the commit. Branch needs to already exist.  For more information, see \\"[Git References](https:\\/\\/git-scm.com\\/book\\/en\\/v2\\/Git-Internals-Git-References)\\" in the Git documentation."
        },
        "message": {
            "type": "string",
            "description": "Commit message to be used."
        }
    },
    "description": "Commit an autofix for a code scanning alert"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Commit an autofix for a code scanning alert';
    public const SCHEMA_EXAMPLE_DATA = '{
    "target_ref": "generated",
    "message": "generated"
}';

    /**
     * targetRef: The Git reference of target branch for the commit. Branch needs to already exist.  For more information, see "[Git References](https://git-scm.com/book/en/v2/Git-Internals-Git-References)" in the Git documentation.
     * message: Commit message to be used.
     */
    public function __construct(#[MapFrom('target_ref')]
    public string|null $targetRef, public string|null $message,)
    {
    }
}
