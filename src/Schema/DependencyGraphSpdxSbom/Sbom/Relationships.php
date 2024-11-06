<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom;

final readonly class Relationships
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "relationshipType": {
            "type": "string",
            "description": "The type of relationship between the two SPDX elements.",
            "examples": [
                "DEPENDS_ON"
            ]
        },
        "spdxElementId": {
            "type": "string",
            "description": "The SPDX identifier of the package that is the source of the relationship."
        },
        "relatedSpdxElement": {
            "type": "string",
            "description": "The SPDX identifier of the package that is the target of the relationship."
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "relationshipType": "DEPENDS_ON",
    "spdxElementId": "generated",
    "relatedSpdxElement": "generated"
}';

    /**
     * relationshipType: The type of relationship between the two SPDX elements.
     * spdxElementId: The SPDX identifier of the package that is the source of the relationship.
     * relatedSpdxElement: The SPDX identifier of the package that is the target of the relationship.
     */
    public function __construct(public string|null $relationshipType, public string|null $spdxElementId, public string|null $relatedSpdxElement)
    {
    }
}
