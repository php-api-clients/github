<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\AliasAbstract\TietCBFBC5DA\Tiet410A0D57\TietB65A397E;

use EventSauce\ObjectHydrator\MapFrom;

abstract readonly class Tiet98165A46
{
    public const SCHEMA_JSON         = '{
    "title": "Label",
    "required": [
        "id",
        "node_id",
        "url",
        "name",
        "color",
        "default",
        "description"
    ],
    "type": "object",
    "properties": {
        "color": {
            "type": "string",
            "description": "6-character hex code, without the leading #, identifying the color"
        },
        "default": {
            "type": "boolean"
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": "string",
            "description": "The name of the label."
        },
        "node_id": {
            "type": "string"
        },
        "url": {
            "type": "string",
            "description": "URL for the label",
            "format": "uri"
        }
    }
}';
    public const SCHEMA_TITLE        = 'Label';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "color": "generated",
    "default": false,
    "description": "generated",
    "id": 2,
    "name": "generated",
    "node_id": "generated",
    "url": "https:\\/\\/example.com\\/"
}';

    /**
     * color: 6-character hex code, without the leading #, identifying the color
     * name: The name of the label.
     * url: URL for the label
     */
    public function __construct(public string $color, public bool $default, public string|null $description, public int $id, public string $name, #[MapFrom('node_id')]
    public string $nodeId, public string $url,)
    {
    }
}
