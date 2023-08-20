<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy\Apps;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Permissions
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "metadata": {
            "type": "string"
        },
        "contents": {
            "type": "string"
        },
        "issues": {
            "type": "string"
        },
        "single_file": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "metadata": "generated",
    "contents": "generated",
    "issues": "generated",
    "single_file": "generated"
}';

    public function __construct(public string|null $metadata, public string|null $contents, public string|null $issues, #[MapFrom('single_file')]
    public string|null $singleFile,)
    {
    }
}
