<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom\Sbom\Packages;

final readonly class ExternalRefs
{
    public const SCHEMA_JSON         = '{
    "required": [
        "referenceCategory",
        "referenceLocator",
        "referenceType"
    ],
    "type": "object",
    "properties": {
        "referenceCategory": {
            "type": "string",
            "description": "The category of reference to an external resource this reference refers to.",
            "examples": [
                "PACKAGE-MANAGER"
            ]
        },
        "referenceLocator": {
            "type": "string",
            "description": "A locator for the particular external resource this reference refers to.",
            "examples": [
                "pkg:gem\\/rails@6.0.1"
            ]
        },
        "referenceType": {
            "type": "string",
            "description": "The category of reference to an external resource this reference refers to.",
            "examples": [
                "purl"
            ]
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "referenceCategory": "PACKAGE-MANAGER",
    "referenceLocator": "pkg:gem\\/rails@6.0.1",
    "referenceType": "purl"
}';

    /**
     * referenceCategory: The category of reference to an external resource this reference refers to.
     * referenceLocator: A locator for the particular external resource this reference refers to.
     * referenceType: The category of reference to an external resource this reference refers to.
     */
    public function __construct(public string $referenceCategory, public string $referenceLocator, public string $referenceType)
    {
    }
}
