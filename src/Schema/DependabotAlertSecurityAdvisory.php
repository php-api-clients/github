<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class DependabotAlertSecurityAdvisory
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ghsa_id",
        "cve_id",
        "summary",
        "description",
        "vulnerabilities",
        "severity",
        "cvss",
        "cwes",
        "identifiers",
        "references",
        "published_at",
        "updated_at",
        "withdrawn_at"
    ],
    "type": "object",
    "properties": {
        "ghsa_id": {
            "type": "string",
            "description": "The unique GitHub Security Advisory ID assigned to the advisory.",
            "readOnly": true
        },
        "cve_id": {
            "type": [
                "string",
                "null"
            ],
            "description": "The unique CVE ID assigned to the advisory.",
            "readOnly": true
        },
        "summary": {
            "maxLength": 1024,
            "type": "string",
            "description": "A short, plain text summary of the advisory.",
            "readOnly": true
        },
        "description": {
            "type": "string",
            "description": "A long-form Markdown-supported description of the advisory.",
            "readOnly": true
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
                    "package": {
                        "required": [
                            "ecosystem",
                            "name"
                        ],
                        "type": "object",
                        "properties": {
                            "ecosystem": {
                                "type": "string",
                                "description": "The package\'s language or package management ecosystem.",
                                "readOnly": true
                            },
                            "name": {
                                "type": "string",
                                "description": "The unique package name within its ecosystem.",
                                "readOnly": true
                            }
                        },
                        "description": "Details for the vulnerable package.",
                        "readOnly": true,
                        "additionalProperties": false
                    },
                    "severity": {
                        "enum": [
                            "low",
                            "medium",
                            "high",
                            "critical"
                        ],
                        "type": "string",
                        "description": "The severity of the vulnerability.",
                        "readOnly": true
                    },
                    "vulnerable_version_range": {
                        "type": "string",
                        "description": "Conditions that identify vulnerable versions of this vulnerability\'s package.",
                        "readOnly": true
                    },
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
                                "type": "string",
                                "description": "The package version that patches this vulnerability.",
                                "readOnly": true
                            }
                        },
                        "description": "Details pertaining to the package version that patches this vulnerability.",
                        "readOnly": true,
                        "additionalProperties": false
                    }
                },
                "description": "Details pertaining to one vulnerable version range for the advisory.",
                "readOnly": true,
                "additionalProperties": false
            },
            "description": "Vulnerable version range information for the advisory.",
            "readOnly": true
        },
        "severity": {
            "enum": [
                "low",
                "medium",
                "high",
                "critical"
            ],
            "type": "string",
            "description": "The severity of the advisory.",
            "readOnly": true
        },
        "cvss": {
            "required": [
                "score",
                "vector_string"
            ],
            "type": "object",
            "properties": {
                "score": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": "number",
                    "description": "The overall CVSS score of the advisory.",
                    "readOnly": true
                },
                "vector_string": {
                    "type": [
                        "string",
                        "null"
                    ],
                    "description": "The full CVSS vector string for the advisory.",
                    "readOnly": true
                }
            },
            "description": "Details for the advisory pertaining to the Common Vulnerability Scoring System.",
            "readOnly": true,
            "additionalProperties": false
        },
        "cvss_severities": {
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "cvss_v3": {
                    "required": [
                        "vector_string",
                        "score"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "vector_string": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The CVSS 3 vector string."
                        },
                        "score": {
                            "maximum": 10,
                            "minimum": 0,
                            "type": [
                                "number",
                                "null"
                            ],
                            "description": "The CVSS 3 score.",
                            "readOnly": true
                        }
                    }
                },
                "cvss_v4": {
                    "required": [
                        "vector_string",
                        "score"
                    ],
                    "type": [
                        "object",
                        "null"
                    ],
                    "properties": {
                        "vector_string": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The CVSS 4 vector string."
                        },
                        "score": {
                            "maximum": 10,
                            "minimum": 0,
                            "type": [
                                "number",
                                "null"
                            ],
                            "description": "The CVSS 4 score.",
                            "readOnly": true
                        }
                    }
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
                        "type": "string",
                        "description": "The unique CWE ID.",
                        "readOnly": true
                    },
                    "name": {
                        "type": "string",
                        "description": "The short, plain text name of the CWE.",
                        "readOnly": true
                    }
                },
                "description": "A CWE weakness assigned to the advisory.",
                "readOnly": true,
                "additionalProperties": false
            },
            "description": "Details for the advisory pertaining to Common Weakness Enumeration.",
            "readOnly": true
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
                        "enum": [
                            "CVE",
                            "GHSA"
                        ],
                        "type": "string",
                        "description": "The type of advisory identifier.",
                        "readOnly": true
                    },
                    "value": {
                        "type": "string",
                        "description": "The value of the advisory identifer.",
                        "readOnly": true
                    }
                },
                "description": "An advisory identifier.",
                "readOnly": true,
                "additionalProperties": false
            },
            "description": "Values that identify this advisory among security information sources.",
            "readOnly": true
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
                        "description": "The URL of the reference.",
                        "format": "uri",
                        "readOnly": true
                    }
                },
                "description": "A link to additional advisory information.",
                "readOnly": true,
                "additionalProperties": false
            },
            "description": "Links to additional advisory information.",
            "readOnly": true
        },
        "published_at": {
            "type": "string",
            "description": "The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "updated_at": {
            "type": "string",
            "description": "The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        },
        "withdrawn_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.",
            "format": "date-time",
            "readOnly": true
        }
    },
    "description": "Details for the GitHub Security Advisory.",
    "readOnly": true,
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Details for the GitHub Security Advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ghsa_id": "generated",
    "cve_id": "generated",
    "summary": "generated",
    "description": "generated",
    "vulnerabilities": [
        {
            "package": {
                "ecosystem": "generated",
                "name": "generated"
            },
            "severity": "critical",
            "vulnerable_version_range": "generated",
            "first_patched_version": {
                "identifier": "generated"
            }
        },
        {
            "package": {
                "ecosystem": "generated",
                "name": "generated"
            },
            "severity": "critical",
            "vulnerable_version_range": "generated",
            "first_patched_version": {
                "identifier": "generated"
            }
        }
    ],
    "severity": "critical",
    "cvss": {
        "score": 0.5,
        "vector_string": "generated"
    },
    "cvss_severities": {
        "cvss_v3": {
            "vector_string": "generated",
            "score": 0.5
        },
        "cvss_v4": {
            "vector_string": "generated",
            "score": 0.5
        }
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
    "identifiers": [
        {
            "type": "GHSA",
            "value": "generated"
        },
        {
            "type": "GHSA",
            "value": "generated"
        }
    ],
    "references": [
        {
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "published_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "withdrawn_at": "1970-01-01T00:00:00+00:00"
}';

    /**
     * ghsaId: The unique GitHub Security Advisory ID assigned to the advisory.
     * cveId: The unique CVE ID assigned to the advisory.
     * summary: A short, plain text summary of the advisory.
     * description: A long-form Markdown-supported description of the advisory.
     * vulnerabilities: Vulnerable version range information for the advisory.
     * severity: The severity of the advisory.
     * cvss: Details for the advisory pertaining to the Common Vulnerability Scoring System.
     * cwes: Details for the advisory pertaining to Common Weakness Enumeration.
     * identifiers: Values that identify this advisory among security information sources.
     * references: Links to additional advisory information.
     * publishedAt: The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * updatedAt: The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * withdrawnAt: The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(#[MapFrom('ghsa_id')]
    public string $ghsaId, #[MapFrom('cve_id')]
    public string|null $cveId, public string $summary, public string $description, public array $vulnerabilities, public string $severity, public Schema\DependabotAlertSecurityAdvisory\Cvss $cvss, #[MapFrom('cvss_severities')]
    public Schema\CvssSeverities|null $cvssSeverities, public array $cwes, public array $identifiers, public array $references, #[MapFrom('published_at')]
    public string $publishedAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('withdrawn_at')]
    public string|null $withdrawnAt,)
    {
    }
}
