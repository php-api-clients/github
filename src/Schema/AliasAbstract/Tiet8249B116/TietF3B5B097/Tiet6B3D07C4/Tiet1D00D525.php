<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\Tiet8249B116\TietF3B5B097\Tiet6B3D07C4;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet1D00D525
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "sha": {
            "type": "string"
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "url": "generated",
    "html_url": "generated",
    "sha": "generated"
}';

    public function __construct(public string|null $url, #[MapFrom('html_url')]
    public string|null $htmlUrl, public string|null $sha,)
    {
    }
}
