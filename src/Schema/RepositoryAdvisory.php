<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryAdvisory
{
    public const SCHEMA_JSON         = '{
    "required": [
        "ghsa_id",
        "cve_id",
        "url",
        "html_url",
        "summary",
        "description",
        "severity",
        "author",
        "publisher",
        "identifiers",
        "state",
        "created_at",
        "updated_at",
        "published_at",
        "closed_at",
        "withdrawn_at",
        "submission",
        "vulnerabilities",
        "cvss",
        "cwes",
        "cwe_ids",
        "credits",
        "credits_detailed",
        "collaborating_users",
        "collaborating_teams",
        "private_fork"
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
            "description": "The Common Vulnerabilities and Exposures (CVE) ID."
        },
        "url": {
            "type": "string",
            "description": "The API URL for the advisory.",
            "format": "uri",
            "readOnly": true
        },
        "html_url": {
            "type": "string",
            "description": "The URL for the advisory.",
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
        "severity": {
            "enum": [
                "critical",
                "high",
                "medium",
                "low",
                null
            ],
            "type": [
                "string",
                "null"
            ],
            "description": "The severity of the advisory."
        },
        "author": {
            "type": [
                "null"
            ],
            "allOf": [
                {
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
                }
            ],
            "description": "The author of the advisory.",
            "readOnly": true
        },
        "publisher": {
            "type": [
                "null"
            ],
            "allOf": [
                {
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
                }
            ],
            "description": "The publisher of the advisory.",
            "readOnly": true
        },
        "identifiers": {
            "type": "array",
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
        "state": {
            "enum": [
                "published",
                "closed",
                "withdrawn",
                "draft",
                "triage"
            ],
            "type": "string",
            "description": "The state of the advisory."
        },
        "created_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time of when the advisory was created, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "updated_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time of when the advisory was last updated, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "published_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time of when the advisory was published, in ISO 8601 format.",
            "format": "date-time",
            "readOnly": true
        },
        "closed_at": {
            "type": [
                "string",
                "null"
            ],
            "description": "The date and time of when the advisory was closed, in ISO 8601 format.",
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
        "submission": {
            "required": [
                "accepted"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "accepted": {
                    "type": "boolean",
                    "description": "Whether a private vulnerability report was accepted by the repository\'s administrators.",
                    "readOnly": true
                }
            },
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
                    "patched_versions",
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
                    "patched_versions": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "description": "The package version(s) that resolve the vulnerability."
                    },
                    "vulnerable_functions": {
                        "type": [
                            "array",
                            "null"
                        ],
                        "items": {
                            "type": "string"
                        },
                        "description": "The functions in the package that are affected."
                    }
                },
                "description": "A product affected by the vulnerability detailed in a repository security advisory.",
                "additionalProperties": false
            }
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
            },
            "readOnly": true
        },
        "cwe_ids": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "string"
            },
            "description": "A list of only the CWE IDs."
        },
        "credits": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "object",
                "properties": {
                    "login": {
                        "type": "string",
                        "description": "The username of the user credited."
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
            }
        },
        "credits_detailed": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "required": [
                    "user",
                    "type",
                    "state"
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
                    },
                    "state": {
                        "enum": [
                            "accepted",
                            "declined",
                            "pending"
                        ],
                        "type": "string",
                        "description": "The state of the user\'s acceptance of the credit."
                    }
                },
                "description": "A credit given to a user for a repository security advisory.",
                "additionalProperties": false
            },
            "readOnly": true
        },
        "collaborating_users": {
            "type": [
                "array",
                "null"
            ],
            "items": {
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
            "description": "A list of users that collaborate on the advisory."
        },
        "collaborating_teams": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "title": "Team",
                "required": [
                    "id",
                    "node_id",
                    "url",
                    "members_url",
                    "name",
                    "description",
                    "permission",
                    "html_url",
                    "repositories_url",
                    "slug",
                    "parent"
                ],
                "type": "object",
                "properties": {
                    "id": {
                        "type": "integer"
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "name": {
                        "type": "string"
                    },
                    "slug": {
                        "type": "string"
                    },
                    "description": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "privacy": {
                        "type": "string"
                    },
                    "notification_setting": {
                        "type": "string"
                    },
                    "permission": {
                        "type": "string"
                    },
                    "permissions": {
                        "required": [
                            "pull",
                            "triage",
                            "push",
                            "maintain",
                            "admin"
                        ],
                        "type": "object",
                        "properties": {
                            "pull": {
                                "type": "boolean"
                            },
                            "triage": {
                                "type": "boolean"
                            },
                            "push": {
                                "type": "boolean"
                            },
                            "maintain": {
                                "type": "boolean"
                            },
                            "admin": {
                                "type": "boolean"
                            }
                        }
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "html_url": {
                        "type": "string",
                        "format": "uri",
                        "examples": [
                            "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
                        ]
                    },
                    "members_url": {
                        "type": "string"
                    },
                    "repositories_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "parent": {
                        "anyOf": [
                            {
                                "type": "null"
                            },
                            {
                                "title": "Team Simple",
                                "required": [
                                    "id",
                                    "node_id",
                                    "url",
                                    "members_url",
                                    "name",
                                    "description",
                                    "permission",
                                    "html_url",
                                    "repositories_url",
                                    "slug"
                                ],
                                "type": "object",
                                "properties": {
                                    "id": {
                                        "type": "integer",
                                        "description": "Unique identifier of the team",
                                        "examples": [
                                            1
                                        ]
                                    },
                                    "node_id": {
                                        "type": "string",
                                        "examples": [
                                            "MDQ6VGVhbTE="
                                        ]
                                    },
                                    "url": {
                                        "type": "string",
                                        "description": "URL for the team",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"
                                        ]
                                    },
                                    "members_url": {
                                        "type": "string",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"
                                        ]
                                    },
                                    "name": {
                                        "type": "string",
                                        "description": "Name of the team",
                                        "examples": [
                                            "Justice League"
                                        ]
                                    },
                                    "description": {
                                        "type": [
                                            "string",
                                            "null"
                                        ],
                                        "description": "Description of the team",
                                        "examples": [
                                            "A great team."
                                        ]
                                    },
                                    "permission": {
                                        "type": "string",
                                        "description": "Permission that the team will have for its repositories",
                                        "examples": [
                                            "admin"
                                        ]
                                    },
                                    "privacy": {
                                        "type": "string",
                                        "description": "The level of privacy this team should have",
                                        "examples": [
                                            "closed"
                                        ]
                                    },
                                    "notification_setting": {
                                        "type": "string",
                                        "description": "The notification setting the team has set",
                                        "examples": [
                                            "notifications_enabled"
                                        ]
                                    },
                                    "html_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"
                                        ]
                                    },
                                    "repositories_url": {
                                        "type": "string",
                                        "format": "uri",
                                        "examples": [
                                            "https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"
                                        ]
                                    },
                                    "slug": {
                                        "type": "string",
                                        "examples": [
                                            "justice-league"
                                        ]
                                    },
                                    "ldap_dn": {
                                        "type": "string",
                                        "description": "Distinguished Name (DN) that team maps to within LDAP environment",
                                        "examples": [
                                            "uid=example,ou=users,dc=github,dc=com"
                                        ]
                                    }
                                },
                                "description": "Groups of organization members that gives permissions on specified repositories."
                            }
                        ]
                    }
                },
                "description": "Groups of organization members that gives permissions on specified repositories."
            },
            "description": "A list of teams that collaborate on the advisory."
        },
        "private_fork": {
            "type": [
                "null"
            ],
            "allOf": [
                {
                    "title": "Simple Repository",
                    "required": [
                        "archive_url",
                        "assignees_url",
                        "blobs_url",
                        "branches_url",
                        "collaborators_url",
                        "comments_url",
                        "commits_url",
                        "compare_url",
                        "contents_url",
                        "contributors_url",
                        "deployments_url",
                        "description",
                        "downloads_url",
                        "events_url",
                        "fork",
                        "forks_url",
                        "full_name",
                        "git_commits_url",
                        "git_refs_url",
                        "git_tags_url",
                        "hooks_url",
                        "html_url",
                        "id",
                        "node_id",
                        "issue_comment_url",
                        "issue_events_url",
                        "issues_url",
                        "keys_url",
                        "labels_url",
                        "languages_url",
                        "merges_url",
                        "milestones_url",
                        "name",
                        "notifications_url",
                        "owner",
                        "private",
                        "pulls_url",
                        "releases_url",
                        "stargazers_url",
                        "statuses_url",
                        "subscribers_url",
                        "subscription_url",
                        "tags_url",
                        "teams_url",
                        "trees_url",
                        "url"
                    ],
                    "type": "object",
                    "properties": {
                        "id": {
                            "type": "integer",
                            "description": "A unique identifier of the repository.",
                            "examples": [
                                1296269
                            ]
                        },
                        "node_id": {
                            "type": "string",
                            "description": "The GraphQL identifier of the repository.",
                            "examples": [
                                "MDEwOlJlcG9zaXRvcnkxMjk2MjY5"
                            ]
                        },
                        "name": {
                            "type": "string",
                            "description": "The name of the repository.",
                            "examples": [
                                "Hello-World"
                            ]
                        },
                        "full_name": {
                            "type": "string",
                            "description": "The full, globally unique, name of the repository.",
                            "examples": [
                                "octocat\\/Hello-World"
                            ]
                        },
                        "owner": {
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
                        "private": {
                            "type": "boolean",
                            "description": "Whether the repository is private."
                        },
                        "html_url": {
                            "type": "string",
                            "description": "The URL to view the repository on GitHub.com.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/github.com\\/octocat\\/Hello-World"
                            ]
                        },
                        "description": {
                            "type": [
                                "string",
                                "null"
                            ],
                            "description": "The repository description.",
                            "examples": [
                                "This your first repo!"
                            ]
                        },
                        "fork": {
                            "type": "boolean",
                            "description": "Whether the repository is a fork."
                        },
                        "url": {
                            "type": "string",
                            "description": "The URL to get more information about the repository from the GitHub API.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"
                            ]
                        },
                        "archive_url": {
                            "type": "string",
                            "description": "A template for the API URL to download the repository as an archive.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"
                            ]
                        },
                        "assignees_url": {
                            "type": "string",
                            "description": "A template for the API URL to list the available assignees for issues in the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"
                            ]
                        },
                        "blobs_url": {
                            "type": "string",
                            "description": "A template for the API URL to create or retrieve a raw Git blob in the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"
                            ]
                        },
                        "branches_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about branches in the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"
                            ]
                        },
                        "collaborators_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about collaborators of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"
                            ]
                        },
                        "comments_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about comments on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"
                            ]
                        },
                        "commits_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about commits on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"
                            ]
                        },
                        "compare_url": {
                            "type": "string",
                            "description": "A template for the API URL to compare two commits or refs.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"
                            ]
                        },
                        "contents_url": {
                            "type": "string",
                            "description": "A template for the API URL to get the contents of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"
                            ]
                        },
                        "contributors_url": {
                            "type": "string",
                            "description": "A template for the API URL to list the contributors to the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"
                            ]
                        },
                        "deployments_url": {
                            "type": "string",
                            "description": "The API URL to list the deployments of the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"
                            ]
                        },
                        "downloads_url": {
                            "type": "string",
                            "description": "The API URL to list the downloads on the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"
                            ]
                        },
                        "events_url": {
                            "type": "string",
                            "description": "The API URL to list the events of the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"
                            ]
                        },
                        "forks_url": {
                            "type": "string",
                            "description": "The API URL to list the forks of the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"
                            ]
                        },
                        "git_commits_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about Git commits of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"
                            ]
                        },
                        "git_refs_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about Git refs of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"
                            ]
                        },
                        "git_tags_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about Git tags of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"
                            ]
                        },
                        "issue_comment_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about issue comments on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"
                            ]
                        },
                        "issue_events_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about issue events on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"
                            ]
                        },
                        "issues_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about issues on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"
                            ]
                        },
                        "keys_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about deploy keys on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"
                            ]
                        },
                        "labels_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about labels of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"
                            ]
                        },
                        "languages_url": {
                            "type": "string",
                            "description": "The API URL to get information about the languages of the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"
                            ]
                        },
                        "merges_url": {
                            "type": "string",
                            "description": "The API URL to merge branches in the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"
                            ]
                        },
                        "milestones_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about milestones of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"
                            ]
                        },
                        "notifications_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about notifications on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"
                            ]
                        },
                        "pulls_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about pull requests on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"
                            ]
                        },
                        "releases_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about releases on the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"
                            ]
                        },
                        "stargazers_url": {
                            "type": "string",
                            "description": "The API URL to list the stargazers on the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"
                            ]
                        },
                        "statuses_url": {
                            "type": "string",
                            "description": "A template for the API URL to get information about statuses of a commit.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"
                            ]
                        },
                        "subscribers_url": {
                            "type": "string",
                            "description": "The API URL to list the subscribers on the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"
                            ]
                        },
                        "subscription_url": {
                            "type": "string",
                            "description": "The API URL to subscribe to notifications for this repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"
                            ]
                        },
                        "tags_url": {
                            "type": "string",
                            "description": "The API URL to get information about tags on the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"
                            ]
                        },
                        "teams_url": {
                            "type": "string",
                            "description": "The API URL to list the teams on the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"
                            ]
                        },
                        "trees_url": {
                            "type": "string",
                            "description": "A template for the API URL to create or retrieve a raw Git tree of the repository.",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"
                            ]
                        },
                        "hooks_url": {
                            "type": "string",
                            "description": "The API URL to list the hooks on the repository.",
                            "format": "uri",
                            "examples": [
                                "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
                            ]
                        }
                    },
                    "description": "A GitHub repository."
                }
            ],
            "description": "A temporary private fork of the advisory\'s repository for collaborating on a fix.",
            "readOnly": true
        }
    },
    "description": "A repository security advisory.",
    "additionalProperties": false
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A repository security advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "ghsa_id": "generated",
    "cve_id": "generated",
    "url": "https:\\/\\/example.com\\/",
    "html_url": "https:\\/\\/example.com\\/",
    "summary": "generated",
    "description": "generated",
    "severity": "low",
    "author": {
        "name": "generated",
        "email": "generated",
        "login": "octocat",
        "id": 1,
        "node_id": "MDQ6VXNlcjE=",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
        "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
        "url": "https:\\/\\/api.github.com\\/users\\/octocat",
        "html_url": "https:\\/\\/github.com\\/octocat",
        "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
        "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
        "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
        "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
        "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
        "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
        "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
        "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
        "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
        "type": "User",
        "site_admin": false,
        "starred_at": "\\"2020-07-09T00:17:55Z\\""
    },
    "publisher": {
        "name": "generated",
        "email": "generated",
        "login": "octocat",
        "id": 1,
        "node_id": "MDQ6VXNlcjE=",
        "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
        "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
        "url": "https:\\/\\/api.github.com\\/users\\/octocat",
        "html_url": "https:\\/\\/github.com\\/octocat",
        "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
        "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
        "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
        "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
        "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
        "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
        "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
        "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
        "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
        "type": "User",
        "site_admin": false,
        "starred_at": "\\"2020-07-09T00:17:55Z\\""
    },
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
    "state": "published",
    "created_at": "1970-01-01T00:00:00+00:00",
    "updated_at": "1970-01-01T00:00:00+00:00",
    "published_at": "1970-01-01T00:00:00+00:00",
    "closed_at": "1970-01-01T00:00:00+00:00",
    "withdrawn_at": "1970-01-01T00:00:00+00:00",
    "submission": {
        "accepted": false
    },
    "vulnerabilities": null,
    "cvss": {
        "vector_string": "generated",
        "score": 0.5
    },
    "cwes": null,
    "cwe_ids": null,
    "credits": null,
    "credits_detailed": null,
    "collaborating_users": null,
    "collaborating_teams": null,
    "private_fork": {
        "id": 1296269,
        "node_id": "MDEwOlJlcG9zaXRvcnkxMjk2MjY5",
        "name": "Hello-World",
        "full_name": "octocat\\/Hello-World",
        "owner": {
            "name": "generated",
            "email": "generated",
            "login": "octocat",
            "id": 1,
            "node_id": "MDQ6VXNlcjE=",
            "avatar_url": "https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif",
            "gravatar_id": "41d064eb2195891e12d0413f63227ea7",
            "url": "https:\\/\\/api.github.com\\/users\\/octocat",
            "html_url": "https:\\/\\/github.com\\/octocat",
            "followers_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/followers",
            "following_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}",
            "gists_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}",
            "starred_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}",
            "subscriptions_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions",
            "organizations_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/orgs",
            "repos_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/repos",
            "events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}",
            "received_events_url": "https:\\/\\/api.github.com\\/users\\/octocat\\/received_events",
            "type": "User",
            "site_admin": false,
            "starred_at": "\\"2020-07-09T00:17:55Z\\""
        },
        "private": false,
        "html_url": "https:\\/\\/github.com\\/octocat\\/Hello-World",
        "description": "This your first repo!",
        "fork": false,
        "url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World",
        "archive_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}",
        "assignees_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}",
        "blobs_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}",
        "branches_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}",
        "collaborators_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}",
        "comments_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}",
        "commits_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}",
        "compare_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}",
        "contents_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}",
        "contributors_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors",
        "deployments_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments",
        "downloads_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads",
        "events_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events",
        "forks_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks",
        "git_commits_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}",
        "git_refs_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}",
        "git_tags_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}",
        "issue_comment_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}",
        "issue_events_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}",
        "issues_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}",
        "keys_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}",
        "labels_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}",
        "languages_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages",
        "merges_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges",
        "milestones_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}",
        "notifications_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}",
        "pulls_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}",
        "releases_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}",
        "stargazers_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers",
        "statuses_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}",
        "subscribers_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers",
        "subscription_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription",
        "tags_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags",
        "teams_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams",
        "trees_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}",
        "hooks_url": "https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"
    }
}';

    /**
     * ghsaId: The GitHub Security Advisory ID.
     * cveId: The Common Vulnerabilities and Exposures (CVE) ID.
     * url: The API URL for the advisory.
     * htmlUrl: The URL for the advisory.
     * summary: A short summary of the advisory.
     * description: A detailed description of what the advisory entails.
     * severity: The severity of the advisory.
     * author: The author of the advisory.
     * publisher: The publisher of the advisory.
     * state: The state of the advisory.
     * createdAt: The date and time of when the advisory was created, in ISO 8601 format.
     * updatedAt: The date and time of when the advisory was last updated, in ISO 8601 format.
     * publishedAt: The date and time of when the advisory was published, in ISO 8601 format.
     * closedAt: The date and time of when the advisory was closed, in ISO 8601 format.
     * withdrawnAt: The date and time of when the advisory was withdrawn, in ISO 8601 format.
     * cweIds: A list of only the CWE IDs.
     * collaboratingUsers: A list of users that collaborate on the advisory.
     * collaboratingTeams: A list of teams that collaborate on the advisory.
     * privateFork: A temporary private fork of the advisory's repository for collaborating on a fix.
     */
    public function __construct(#[MapFrom('ghsa_id')]
    public string $ghsaId, #[MapFrom('cve_id')]
    public string|null $cveId, public string $url, #[MapFrom('html_url')]
    public string $htmlUrl, public string $summary, public string|null $description, public string|null $severity, public Schema\SimpleUser $author, public Schema\SimpleUser $publisher, public array $identifiers, public string $state, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, #[MapFrom('published_at')]
    public string|null $publishedAt, #[MapFrom('closed_at')]
    public string|null $closedAt, #[MapFrom('withdrawn_at')]
    public string|null $withdrawnAt, public Schema\RepositoryAdvisory\Submission|null $submission, public array|null $vulnerabilities, public Schema\RepositoryAdvisory\Cvss|null $cvss, public array|null $cwes, #[MapFrom('cwe_ids')]
    public array|null $cweIds, public array|null $credits, #[MapFrom('credits_detailed')]
    public array|null $creditsDetailed, #[MapFrom('collaborating_users')]
    public array|null $collaboratingUsers, #[MapFrom('collaborating_teams')]
    public array|null $collaboratingTeams, #[MapFrom('private_fork')]
    public Schema\SimpleRepository $privateFork,)
    {
    }
}
