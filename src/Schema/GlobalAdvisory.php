<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GlobalAdvisory
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ghsa_id",
        "cve_id",
        "url",
        "html_url",
        "repository_advisory_url",
        "summary",
        "description",
        "type",
        "severity",
        "source_code_location",
        "identifiers",
        "references",
        "published_at",
        "updated_at",
        "github_reviewed_at",
        "nvd_published_at",
        "withdrawn_at",
        "vulnerabilities",
        "cvss",
        "cwes",
        "credits"
    ],
    "type": "object",
    "properties": {
        "ghsa_id": {
            "type": "string",
            "description": "The GitHub Security Advisory ID.",
            "readOnly": true
        },
        "cve_id": {
            "type": [
                "string",
                "null"
            ],
            "description": "The Common Vulnerabilities and Exposures (CVE) ID.",
            "readOnly": true
        },
        "url": {
            "type": "string",
            "description": "The API URL for the advisory.",
            "readOnly": true
        },
        "html_url": {
            "type": "string",
            "description": "The URL for the advisory.",
            "format": "uri",
            "readOnly": true
        },
        "repository_advisory_url": {
            "type": [
                "string",
                "null"
            ],
            "description": "The API URL for the repository advisory.",
            "format": "uri",
            "readOnly": true
        },
        "summary": {
            "maxLength": 1024,
            "type": "string",
            "description": "A short summary of the advisory."
        },
        "description": {
            "maxLength": 65535,
            "type": [
                "string",
                "null"
            ],
            "description": "A detailed description of what the advisory entails."
        },
        "type": {
            "enum": [
                "reviewed",
                "unreviewed",
                "malware"
            ],
            "type": "string",
            "description": "The type of advisory.",
            "readOnly": true
        },
        "severity": {
            "enum": [
                "critical",
                "high",
                "medium",
                "low",
                "unknown"
            ],
            "type": "string",
            "description": "The severity of the advisory."
        },
        "source_code_location": {
            "type": [
                "string",
                "null"
            ],
            "description": "The URL of the advisory\'s source code.",
            "format": "uri"
        },
        "identifiers": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "type",
                    "value"
                ],
                "type": "object",
                "properties": {
                    "type": {
                        "enum": [
                            "CVE",
                            "GHSA"
                        ],
                        "type": "string",
                        "description": "The type of identifier."
                    },
                    "value": {
                        "type": "string",
                        "description": "The identifier value."
                    }
                }
            },
            "readOnly": true
        },
        "references": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string",
                "description": "URLs with more information regarding the advisory."
            }
        },
        "published_at": {
            "type": "string",
            "description": "The date and time of when the advisory was published, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "updated_at": {
            "type": "string",
            "description": "The date and time of when the advisory was last updated, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "github_reviewed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time of when the advisory was reviewed by GitHub, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "nvd_published_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time when the advisory was published in the National Vulnerability Database, in ISO 8601 format.\\nThis field is only populated when the advisory is imported from the National Vulnerability Database.",
            "format": "date-time",
            "readOnly": true
        },
        "withdrawn_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time of when the advisory was withdrawn, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "vulnerabilities": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "package",
                    "vulnerable_version_range",
                    "first_patched_version",
                    "vulnerable_functions"
                ],
                "type": "object",
                "properties": {
                    "package": {
                        "required": [
                            "ecosystem",
                            "name"
                        ],
                        "type": [
                            "object",
                            "null"
                        ],
                        "properties": {
                            "ecosystem": {
                                "enum": [
                                    "rubygems",
                                    "npm",
                                    "pip",
                                    "maven",
                                    "nuget",
                                    "composer",
                                    "go",
                                    "rust",
                                    "erlang",
                                    "actions",
                                    "pub",
                                    "other",
                                    "swift"
                                ],
                                "type": "string",
                                "description": "The package\'s language or package management ecosystem."
                            },
                            "name": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "description": "The unique package name within its ecosystem."
                            }
                        },
                        "description": "The name of the package affected by the vulnerability."
                    },
                    "vulnerable_version_range": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The range of the package versions affected by the vulnerability."
                    },
                    "first_patched_version": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The package version that resolves the vulnerability."
                    },
                    "vulnerable_functions": {
                        "type": [
                            "array",
                            "null"
                        ],
                        "items": {
                            "type": "string"
                        },
                        "description": "The functions in the package that are affected by the vulnerability.",
                        "readOnly": true
                    }
                },
                "description": "A vulnerability describing the product and its affected versions within a GitHub Security Advisory."
            },
            "description": "The products and respective version ranges affected by the advisory."
        },
        "cvss": {
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
                    "description": "The CVSS vector."
                },
                "score": {
                    "maximum": 10,
                    "minimum": 0,
                    "type": [
                        "number",
                        "null"
                    ],
                    "description": "The CVSS score.",
                    "readOnly": true
                }
            }
        },
        "cwes": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "cwe_id",
                    "name"
                ],
                "type": "object",
                "properties": {
                    "cwe_id": {
                        "type": "string",
                        "description": "The Common Weakness Enumeration (CWE) identifier."
                    },
                    "name": {
                        "type": "string",
                        "description": "The name of the CWE.",
                        "readOnly": true
                    }
                }
            }
        },
        "credits": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "user",
                    "type"
                ],
                "type": "object",
                "properties": {
                    "user": {
                        "title": "Simple User",
                        "required": [
                            "avatar_url",
                            "events_url",
                            "followers_url",
                            "following_url",
                            "gists_url",
                            "gravatar_id",
                            "html_url",
                            "id",
                            "node_id",
                            "login",
                            "organizations_url",
                            "received_events_url",
                            "repos_url",
                            "site_admin",
                            "starred_url",
                            "subscriptions_url",
                            "type",
                            "url"
                        ],
                        "type": "object",
                        "properties": {
                            "name": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "email": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "login": {
                                "type": "string",
                                "examples": [
                                    "octocat"
                                ]
                            },
                            "id": {
                                "type": "integer",
                                "format": "int64",
                                "examples": [
                                    1
                                ]
                            },
                            "node_id": {
                                "type": "string",
                                "examples": [
                                    "MDQ6VXNlcjE="
                                ]
                            },
                            "avatar_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"
                                ]
                            },
                            "gravatar_id": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "examples": [
                                    "41d064eb2195891e12d0413f63227ea7"
                                ]
                            },
                            "url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat"
                                ]
                            },
                            "html_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/github.com\\/octocat"
                                ]
                            },
                            "followers_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/followers"
                                ]
                            },
                            "following_url": {
                                "type": "string",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"
                                ]
                            },
                            "gists_url": {
                                "type": "string",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"
                                ]
                            },
                            "starred_url": {
                                "type": "string",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"
                                ]
                            },
                            "subscriptions_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"
                                ]
                            },
                            "organizations_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"
                                ]
                            },
                            "repos_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/repos"
                                ]
                            },
                            "events_url": {
                                "type": "string",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"
                                ]
                            },
                            "received_events_url": {
                                "type": "string",
                                "format": "uri",
                                "examples": [
                                    "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"
                                ]
                            },
                            "type": {
                                "type": "string",
                                "examples": [
                                    "User"
                                ]
                            },
                            "site_admin": {
                                "type": "boolean"
                            },
                            "starred_at": {
                                "type": "string",
                                "examples": [
                                    "\\"2020-07-09T00:17:55Z\\""
                                ]
                            }
                        },
                        "description": "A GitHub user."
                    },
                    "type": {
                        "enum": [
                            "analyst",
                            "finder",
                            "reporter",
                            "coordinator",
                            "remediation_developer",
                            "remediation_reviewer",
                            "remediation_verifier",
                            "tool",
                            "sponsor",
                            "other"
                        ],
                        "type": "string",
                        "description": "The type of credit the user is receiving."
                    }
                }
            },
            "description": "The users who contributed to the advisory.",
            "readOnly": true
        }
    },
    "description": "A GitHub Security Advisory.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A GitHub Security Advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ghsa_id": "generated",
    "cve_id": "generated",
    "url": "generated",
    "html_url": "https:\\/\\/example.com\\/",
    "repository_advisory_url": "https:\\/\\/example.com\\/",
    "summary": "generated",
    "description": "generated",
    "type": "malware",
    "severity": "unknown",
    "source_code_location": "https:\\/\\/example.com\\/",
    "identifiers": null,
    "references": null,
    "published_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "github_reviewed_at": "1970-01-01T00:00:00+00:00",
    "nvd_published_at": "1970-01-01T00:00:00+00:00",
    "withdrawn_at": "1970-01-01T00:00:00+00:00",
    "vulnerabilities": null,
    "cvss": {
        "vector_string": "generated",
        "score": 0.5
    },
    "cwes": null,
    "credits": null
}';

    /**
     * ghsaId: The GitHub Security Advisory ID.
     * cveId: The Common Vulnerabilities and Exposures (CVE) ID.
     * url: The API URL for the advisory.
     * htmlUrl: The URL for the advisory.
     * repositoryAdvisoryUrl: The API URL for the repository advisory.
     * summary: A short summary of the advisory.
     * description: A detailed description of what the advisory entails.
     * type: The type of advisory.
     * severity: The severity of the advisory.
     * sourceCodeLocation: The URL of the advisory's source code.
     * publishedAt: The date and time of when the advisory was published, in ISO 8601 format.
     * updatedAt: The date and time of when the advisory was last updated, in ISO 8601 format.
     * githubReviewedAt: The date and time of when the advisory was reviewed by GitHub, in ISO 8601 format.
     * nvdPublishedAt: The date and time when the advisory was published in the National Vulnerability Database, in ISO 8601 format.
    This field is only populated when the advisory is imported from the National Vulnerability Database.
     * withdrawnAt: The date and time of when the advisory was withdrawn, in ISO 8601 format.
     * vulnerabilities: The products and respective version ranges affected by the advisory.
     * credits: The users who contributed to the advisory.
     */
    public function __construct(#[MapFrom('ghsa_id')]
    public string $ghsaId, #[MapFrom('cve_id')]
    public string|null $cveId, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, #[MapFrom('repository_advisory_url')]
    public string|null $repositoryAdvisoryUrl, public string $summary, public string|null $description, public string $type, public string $severity, #[MapFrom('source_code_location')]
    public string|null $sourceCodeLocation, public array|null $identifiers, public array|null $references, #[MapFrom('published_at')]
    public string $publishedAt, #[MapFrom('updated_at')]
    public string $updatedAt, #[MapFrom('github_reviewed_at')]
    public string|null $githubReviewedAt, #[MapFrom('nvd_published_at')]
    public string|null $nvdPublishedAt, #[MapFrom('withdrawn_at')]
    public string|null $withdrawnAt, public array|null $vulnerabilities, public Schema\GlobalAdvisory\Cvss|null $cvss, public array|null $cwes, public array|null $credits,)
    {
    }
}
