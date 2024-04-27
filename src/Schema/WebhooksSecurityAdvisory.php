<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksSecurityAdvisory
{
    public const SCHEMA_JSON         = '{
    "required": [
        "cvss",
        "cwes",
        "ghsa_id",
        "summary",
        "description",
        "severity",
        "identifiers",
        "references",
        "published_at",
        "updated_at",
        "withdrawn_at",
        "vulnerabilities"
    ],
    "type": "object",
    "properties": {
        "cvss": {
            "required": [
                "vector_string",
                "score"
            ],
            "type": "object",
            "properties": {
                "score": {
                    "type": "number"
                },
                "vector_string": {
                    "type": [
                        "string",
                        "null"
                    ]
                }
            }
        },
        "cwes": {
            "type": "array",
            "items": {
                "required": [
                    "cwe_id",
                    "name"
                ],
                "type": "object",
                "properties": {
                    "cwe_id": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    }
                }
            }
        },
        "description": {
            "type": "string"
        },
        "ghsa_id": {
            "type": "string"
        },
        "identifiers": {
            "type": "array",
            "items": {
                "required": [
                    "value",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "type": "string"
                    },
                    "value": {
                        "type": "string"
                    }
                }
            }
        },
        "published_at": {
            "type": "string"
        },
        "references": {
            "type": "array",
            "items": {
                "required": [
                    "url"
                ],
                "type": "object",
                "properties": {
                    "url": {
                        "type": "string",
                        "format": "uri"
                    }
                }
            }
        },
        "severity": {
            "type": "string"
        },
        "summary": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "vulnerabilities": {
            "type": "array",
            "items": {
                "required": [
                    "package",
                    "severity",
                    "vulnerable_version_range",
                    "first_patched_version"
                ],
                "type": "object",
                "properties": {
                    "first_patched_version": {
                        "required": [
                            "identifier"
                        ],
                        "type": [
                            "object",
                            "null"
                        ],
                        "properties": {
                            "identifier": {
                                "type": "string"
                            }
                        }
                    },
                    "package": {
                        "required": [
                            "ecosystem",
                            "name"
                        ],
                        "type": "object",
                        "properties": {
                            "ecosystem": {
                                "type": "string"
                            },
                            "name": {
                                "type": "string"
                            }
                        }
                    },
                    "severity": {
                        "type": "string"
                    },
                    "vulnerable_version_range": {
                        "type": "string"
                    }
                }
            }
        },
        "withdrawn_at": {
            "type": [
                "string",
                "null"
            ]
        }
    },
    "description": "The details of the security advisory, including summary, description, and severity."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'The details of the security advisory, including summary, description, and severity.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "cvss": {
        "score": 0.5,
        "vector_string": "generated"
    },
    "cwes": [
        {
            "cwe_id": "generated",
            "name": "generated"
        },
        {
            "cwe_id": "generated",
            "name": "generated"
        }
    ],
    "description": "generated",
    "ghsa_id": "generated",
    "identifiers": [
        {
            "type": "generated",
            "value": "generated"
        },
        {
            "type": "generated",
            "value": "generated"
        }
    ],
    "published_at": "generated",
    "references": [
        {
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "severity": "generated",
    "summary": "generated",
    "updated_at": "generated",
    "vulnerabilities": [
        {
            "first_patched_version": {
                "identifier": "generated"
            },
            "package": {
                "ecosystem": "generated",
                "name": "generated"
            },
            "severity": "generated",
            "vulnerable_version_range": "generated"
        },
        {
            "first_patched_version": {
                "identifier": "generated"
            },
            "package": {
                "ecosystem": "generated",
                "name": "generated"
            },
            "severity": "generated",
            "vulnerable_version_range": "generated"
        }
    ],
    "withdrawn_at": "generated"
}';

    public function __construct(public Schema\WebhooksSecurityAdvisory\Cvss $cvss, public array $cwes, public string $description, #[MapFrom('ghsa_id')]
    public string $ghsaId, public array $identifiers, #[MapFrom('published_at')]
    public string $publishedAt, public array $references, public string $severity, public string $summary, #[MapFrom('updated_at')]
    public string $updatedAt, public array $vulnerabilities, #[MapFrom('withdrawn_at')]
    public string|null $withdrawnAt,)
    {
    }
}
