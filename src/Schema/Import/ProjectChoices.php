<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Import;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class ProjectChoices
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "vcs": {
            "type": "string"
        },
        "tfvc_project": {
            "type": "string"
        },
        "human_name": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "vcs": "generated",
    "tfvc_project": "generated",
    "human_name": "generated"
}';

    public function __construct(public string|null $vcs, #[MapFrom('tfvc_project')]
    public string|null $tfvcProject, #[MapFrom('human_name')]
    public string|null $humanName,)
    {
    }
}
