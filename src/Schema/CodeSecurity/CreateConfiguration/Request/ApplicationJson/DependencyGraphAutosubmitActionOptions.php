<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeSecurity\CreateConfiguration\Request\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class DependencyGraphAutosubmitActionOptions
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "labeled_runners": {
            "type": "boolean",
            "description": "Whether to use runners labeled with \'dependency-submission\' or standard GitHub runners.",
            "default": false
        }
    },
    "description": "Feature options for Automatic dependency submission"
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Feature options for Automatic dependency submission';
    public const SCHEMA_EXAMPLE_DATA = '{
    "labeled_runners": false
}';

    /**
     * labeledRunners: Whether to use runners labeled with 'dependency-submission' or standard GitHub runners.
     */
    public function __construct(#[MapFrom('labeled_runners')]
    public bool|null $labeledRunners,)
    {
    }
}
