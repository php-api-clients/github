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
        "comment": {
            "type": "string",
            "description": "An optional comment about the SPDX document.",
            "examples": [
                "Exact versions could not be resolved for some packages. For more information: https:\\/\\/docs.github.com\\/en\\/code-security\\/supply-chain-security\\/understanding-your-software-supply-chain\\/"
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
        "documentNamespace": {
            "type": "string",
            "description": "The namespace for the SPDX document.",
            "examples": [
                "https:\\/\\/spdx.org\\/spdxdocs\\/protobom\\/15e41dd2-f961-4f4d-b8dc-f8f57ad70d57"
            ]
        },
        "packages": {
            "required": [
                "SPDXID",
                "name",
                "versionInfo",
                "downloadLocation",
                "filesAnalyzed"
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
                            "github\\/github"
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
                    "copyrightText": {
                        "type": "string",
                        "description": "The copyright holders of the package, and any dates present with those notices, if available.",
                        "examples": [
                            "Copyright (c) 1985 GitHub.com"
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
        },
        "relationships": {
            "required": [
                "relationshipType",
                "spdxElementId",
                "relatedSpdxElement"
            ],
            "type": "array",
            "items": {
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
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "SPDXID": "SPDXRef-DOCUMENT",
    "spdxVersion": "SPDX-2.3",
    "comment": "Exact versions could not be resolved for some packages. For more information: https:\\/\\/docs.github.com\\/en\\/code-security\\/supply-chain-security\\/understanding-your-software-supply-chain\\/",
    "creationInfo": {
        "created": "2021-11-03T00:00:00Z",
        "creators": [
            "generated",
            "generated"
        ]
    },
    "name": "github\\/github",
    "dataLicense": "CC0-1.0",
    "documentNamespace": "https:\\/\\/spdx.org\\/spdxdocs\\/protobom\\/15e41dd2-f961-4f4d-b8dc-f8f57ad70d57",
    "packages": [
        {
            "SPDXID": "SPDXRef-Package",
            "name": "github\\/github",
            "versionInfo": "1.0.0",
            "downloadLocation": "NOASSERTION",
            "filesAnalyzed": false,
            "licenseConcluded": "MIT",
            "licenseDeclared": "NOASSERTION",
            "supplier": "NOASSERTION",
            "copyrightText": "Copyright (c) 1985 GitHub.com",
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
            "name": "github\\/github",
            "versionInfo": "1.0.0",
            "downloadLocation": "NOASSERTION",
            "filesAnalyzed": false,
            "licenseConcluded": "MIT",
            "licenseDeclared": "NOASSERTION",
            "supplier": "NOASSERTION",
            "copyrightText": "Copyright (c) 1985 GitHub.com",
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
    ],
    "relationships": [
        {
            "relationshipType": "DEPENDS_ON",
            "spdxElementId": "generated",
            "relatedSpdxElement": "generated"
        },
        {
            "relationshipType": "DEPENDS_ON",
            "spdxElementId": "generated",
            "relatedSpdxElement": "generated"
        }
    ]
}';

    /**
     * spdxid: The SPDX identifier for the SPDX document.
     * spdxVersion: The version of the SPDX specification that this document conforms to.
     * comment: An optional comment about the SPDX document.
     * name: The name of the SPDX document.
     * dataLicense: The license under which the SPDX document is licensed.
     * documentNamespace: The namespace for the SPDX document.
     */
    public function __construct(#[MapFrom('SPDXID')]
    public string $spdxid, public string $spdxVersion, public string|null $comment, public Schema\DependencyGraphSpdxSbom\Sbom\CreationInfo $creationInfo, public string $name, public string $dataLicense, public string $documentNamespace, public array $packages, public array|null $relationships,)
    {
    }
}
