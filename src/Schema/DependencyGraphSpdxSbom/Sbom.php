<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Sbom
{
    public const SCHEMA_JSON         = '{
    "required": [
        "SPDXID",
        "spdxVersion",
        "creationInfo",
        "name",
        "dataLicense",
        "documentDescribes",
        "documentNamespace",
        "packages"
    ],
    "type": "object",
    "properties": {
        "SPDXID": {
            "type": "string",
            "description": "The SPDX identifier for the SPDX document.",
            "examples": [
                "SPDXRef-DOCUMENT"
            ]
        },
        "spdxVersion": {
            "type": "string",
            "description": "The version of the SPDX specification that this document conforms to.",
            "examples": [
                "SPDX-2.3"
            ]
        },
        "creationInfo": {
            "required": [
                "created",
                "creators"
            ],
            "type": "object",
            "properties": {
                "created": {
                    "type": "string",
                    "description": "The date and time the SPDX document was created.",
                    "examples": [
                        "2021-11-03T00:00:00Z"
                    ]
                },
                "creators": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "examples": [
                            "GitHub"
                        ]
                    },
                    "description": "The tools that were used to generate the SPDX document."
                }
            }
        },
        "name": {
            "type": "string",
            "description": "The name of the SPDX document.",
            "examples": [
                "github\\/github"
            ]
        },
        "dataLicense": {
            "type": "string",
            "description": "The license under which the SPDX document is licensed.",
            "examples": [
                "CC0-1.0"
            ]
        },
        "documentDescribes": {
            "type": "array",
            "items": {
                "type": "string",
                "examples": [
                    "github\\/github"
                ]
            },
            "description": "The name of the repository that the SPDX document describes."
        },
        "documentNamespace": {
            "type": "string",
            "description": "The namespace for the SPDX document.",
            "examples": [
                "https:\\/\\/github.com\\/example\\/dependency_graph\\/sbom-123"
            ]
        },
        "packages": {
            "required": [
                "SPDXID",
                "name",
                "versionInfo",
                "downloadLocation",
                "filesAnalyzed",
                "supplier"
            ],
            "type": "array",
            "items": {
                "type": "object",
                "properties": {
                    "SPDXID": {
                        "type": "string",
                        "description": "A unique SPDX identifier for the package.",
                        "examples": [
                            "SPDXRef-Package"
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the package.",
                        "examples": [
                            "rubygems:github\\/github"
                        ]
                    },
                    "versionInfo": {
                        "type": "string",
                        "description": "The version of the package. If the package does not have an exact version specified,\\na version range is given.",
                        "examples": [
                            "1.0.0"
                        ]
                    },
                    "downloadLocation": {
                        "type": "string",
                        "description": "The location where the package can be downloaded,\\nor NOASSERTION if this has not been determined.",
                        "examples": [
                            "NOASSERTION"
                        ]
                    },
                    "filesAnalyzed": {
                        "type": "boolean",
                        "description": "Whether the package\'s file content has been subjected to\\nanalysis during the creation of the SPDX document.",
                        "examples": [
                            false
                        ]
                    },
                    "licenseConcluded": {
                        "type": "string",
                        "description": "The license of the package as determined while creating the SPDX document.",
                        "examples": [
                            "MIT"
                        ]
                    },
                    "licenseDeclared": {
                        "type": "string",
                        "description": "The license of the package as declared by its author, or NOASSERTION if this information\\nwas not available when the SPDX document was created.",
                        "examples": [
                            "NOASSERTION"
                        ]
                    },
                    "supplier": {
                        "type": "string",
                        "description": "The distribution source of this package, or NOASSERTION if this was not determined.",
                        "examples": [
                            "NOASSERTION"
                        ]
                    },
                    "externalRefs": {
                        "type": "array",
                        "items": {
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
                        }
                    }
                }
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "SPDXID": "SPDXRef-DOCUMENT",
    "spdxVersion": "SPDX-2.3",
    "creationInfo": {
        "created": "2021-11-03T00:00:00Z",
        "creators": [
            "generated",
            "generated"
        ]
    },
    "name": "github\\/github",
    "dataLicense": "CC0-1.0",
    "documentDescribes": [
        "generated",
        "generated"
    ],
    "documentNamespace": "https:\\/\\/github.com\\/example\\/dependency_graph\\/sbom-123",
    "packages": [
        {
            "SPDXID": "SPDXRef-Package",
            "name": "rubygems:github\\/github",
            "versionInfo": "1.0.0",
            "downloadLocation": "NOASSERTION",
            "filesAnalyzed": false,
            "licenseConcluded": "MIT",
            "licenseDeclared": "NOASSERTION",
            "supplier": "NOASSERTION",
            "externalRefs": [
                {
                    "referenceCategory": "PACKAGE-MANAGER",
                    "referenceLocator": "pkg:gem\\/rails@6.0.1",
                    "referenceType": "purl"
                },
                {
                    "referenceCategory": "PACKAGE-MANAGER",
                    "referenceLocator": "pkg:gem\\/rails@6.0.1",
                    "referenceType": "purl"
                }
            ]
        },
        {
            "SPDXID": "SPDXRef-Package",
            "name": "rubygems:github\\/github",
            "versionInfo": "1.0.0",
            "downloadLocation": "NOASSERTION",
            "filesAnalyzed": false,
            "licenseConcluded": "MIT",
            "licenseDeclared": "NOASSERTION",
            "supplier": "NOASSERTION",
            "externalRefs": [
                {
                    "referenceCategory": "PACKAGE-MANAGER",
                    "referenceLocator": "pkg:gem\\/rails@6.0.1",
                    "referenceType": "purl"
                },
                {
                    "referenceCategory": "PACKAGE-MANAGER",
                    "referenceLocator": "pkg:gem\\/rails@6.0.1",
                    "referenceType": "purl"
                }
            ]
        }
    ]
}';

    /**
     * spdxid: The SPDX identifier for the SPDX document.
     * spdxVersion: The version of the SPDX specification that this document conforms to.
     * name: The name of the SPDX document.
     * dataLicense: The license under which the SPDX document is licensed.
     * documentDescribes: The name of the repository that the SPDX document describes.
     * documentNamespace: The namespace for the SPDX document.
     */
    public function __construct(#[MapFrom('SPDXID')]
    public string $spdxid, public string $spdxVersion, public Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo $creationInfo, public string $name, public string $dataLicense, public array $documentDescribes, public string $documentNamespace, public array $packages,)
    {
    }
}
