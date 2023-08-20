<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class CodeScanningAnalysisDeletion
{
    public const SCHEMA_JSON         = '{
    "title": "Analysis deletion",
    "required": [
        "next_analysis_url",
        "confirm_delete_url"
    ],
    "type": "object",
    "properties": {
        "next_analysis_url": {
            "type": [
                "string",
                "null"
            ],
            "description": "Next deletable analysis in chain, without last analysis deletion confirmation",
            "format": "uri",
            "readOnly": true
        },
        "confirm_delete_url": {
            "type": [
                "string",
                "null"
            ],
            "description": "Next deletable analysis in chain, with last analysis deletion confirmation",
            "format": "uri",
            "readOnly": true
        }
    },
    "description": "Successful deletion of a code scanning analysis"
}';
    public const SCHEMA_TITLE        = 'Analysis deletion';
    public const SCHEMA_DESCRIPTION  = 'Successful deletion of a code scanning analysis';
    public const SCHEMA_EXAMPLE_DATA = '{
    "next_analysis_url": "https:\\/\\/example.com\\/",
    "confirm_delete_url": "https:\\/\\/example.com\\/"
}';

    /**
     * nextAnalysisUrl: Next deletable analysis in chain, without last analysis deletion confirmation
     * confirmDeleteUrl: Next deletable analysis in chain, with last analysis deletion confirmation
     */
    public function __construct(#[MapFrom('next_analysis_url')]
    public string|null $nextAnalysisUrl, #[MapFrom('confirm_delete_url')]
    public string|null $confirmDeleteUrl,)
    {
    }
}
