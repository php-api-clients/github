<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAutofixCommitsResponse
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "target_ref": {
            "type": "string",
            "description": "The Git reference of target branch for the commit. For more information, see \\"[Git References](https:\\/\\/git-scm.com\\/book\\/en\\/v2\\/Git-Internals-Git-References)\\" in the Git documentation."
        },
        "sha": {
            "type": "string",
            "description": "SHA of commit with autofix."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "target_ref": "generated",
    "sha": "generated"
}';

    /**
     * targetRef: The Git reference of target branch for the commit. For more information, see "[Git References](https://git-scm.com/book/en/v2/Git-Internals-Git-References)" in the Git documentation.
     * sha: SHA of commit with autofix.
     */
    public function __construct(#[MapFrom('target_ref')]
    public string|null $targetRef, public string|null $sha,)
    {
    }
}
