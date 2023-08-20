<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class CodeScanningAnalysisCategory
{
    public const SCHEMA_JSON         = '{
    "type": "string",
    "description": "Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Identifies the configuration under which the analysis was executed. Used to distinguish between multiple analyses for the same tool and commit, but performed on different languages or different parts of the code.';
    public const SCHEMA_EXAMPLE_DATA = '[]';

    public function __construct()
    {
    }
}
