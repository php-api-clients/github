<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\CodeScanningVariantAnalysis;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SkippedRepositories
{
    public const SCHEMA_JSON         = '{
    "required": [
        "access_mismatch_repos",
        "not_found_repos",
        "no_codeql_db_repos",
        "over_limit_repos"
    ],
    "type": "object",
    "properties": {
        "access_mismatch_repos": {
            "required": [
                "repository_count",
                "repositories"
            ],
            "type": "object",
            "properties": {
                "repository_count": {
                    "type": "integer",
                    "description": "The total number of repositories that were skipped for this reason.",
                    "examples": [
                        2
                    ]
                },
                "repositories": {
                    "type": "array",
                    "items": {
                        "title": "Repository Identifier",
                        "required": [
                            "full_name",
                            "id",
                            "name",
                            "private",
                            "stargazers_count",
                            "updated_at"
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
                            "private": {
                                "type": "boolean",
                                "description": "Whether the repository is private."
                            },
                            "stargazers_count": {
                                "type": "integer",
                                "examples": [
                                    80
                                ]
                            },
                            "updated_at": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "date-time",
                                "examples": [
                                    "2011-01-26T19:14:43Z"
                                ]
                            }
                        },
                        "description": "Repository Identifier"
                    },
                    "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
                }
            }
        },
        "not_found_repos": {
            "required": [
                "repository_count",
                "repository_full_names"
            ],
            "type": "object",
            "properties": {
                "repository_count": {
                    "type": "integer",
                    "description": "The total number of repositories that were skipped for this reason.",
                    "examples": [
                        2
                    ]
                },
                "repository_full_names": {
                    "type": "array",
                    "items": {
                        "type": "string"
                    },
                    "description": "A list of full repository names that were skipped. This list may not include all repositories that were skipped."
                }
            }
        },
        "no_codeql_db_repos": {
            "required": [
                "repository_count",
                "repositories"
            ],
            "type": "object",
            "properties": {
                "repository_count": {
                    "type": "integer",
                    "description": "The total number of repositories that were skipped for this reason.",
                    "examples": [
                        2
                    ]
                },
                "repositories": {
                    "type": "array",
                    "items": {
                        "title": "Repository Identifier",
                        "required": [
                            "full_name",
                            "id",
                            "name",
                            "private",
                            "stargazers_count",
                            "updated_at"
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
                            "private": {
                                "type": "boolean",
                                "description": "Whether the repository is private."
                            },
                            "stargazers_count": {
                                "type": "integer",
                                "examples": [
                                    80
                                ]
                            },
                            "updated_at": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "date-time",
                                "examples": [
                                    "2011-01-26T19:14:43Z"
                                ]
                            }
                        },
                        "description": "Repository Identifier"
                    },
                    "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
                }
            }
        },
        "over_limit_repos": {
            "required": [
                "repository_count",
                "repositories"
            ],
            "type": "object",
            "properties": {
                "repository_count": {
                    "type": "integer",
                    "description": "The total number of repositories that were skipped for this reason.",
                    "examples": [
                        2
                    ]
                },
                "repositories": {
                    "type": "array",
                    "items": {
                        "title": "Repository Identifier",
                        "required": [
                            "full_name",
                            "id",
                            "name",
                            "private",
                            "stargazers_count",
                            "updated_at"
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
                            "private": {
                                "type": "boolean",
                                "description": "Whether the repository is private."
                            },
                            "stargazers_count": {
                                "type": "integer",
                                "examples": [
                                    80
                                ]
                            },
                            "updated_at": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "date-time",
                                "examples": [
                                    "2011-01-26T19:14:43Z"
                                ]
                            }
                        },
                        "description": "Repository Identifier"
                    },
                    "description": "A list of repositories that were skipped. This list may not include all repositories that were skipped. This is only available when the repository was found and the user has access to it."
                }
            }
        }
    },
    "description": "Information about repositories that were skipped from processing. This information is only available to the user that initiated the variant analysis."
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'Information about repositories that were skipped from processing. This information is only available to the user that initiated the variant analysis.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "access_mismatch_repos": {
        "repository_count": 2,
        "repositories": [
            {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            },
            {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            }
        ]
    },
    "not_found_repos": {
        "repository_count": 2,
        "repository_full_names": [
            "generated",
            "generated"
        ]
    },
    "no_codeql_db_repos": {
        "repository_count": 2,
        "repositories": [
            {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            },
            {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            }
        ]
    },
    "over_limit_repos": {
        "repository_count": 2,
        "repositories": [
            {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            },
            {
                "id": 1296269,
                "name": "Hello-World",
                "full_name": "octocat\\/Hello-World",
                "private": false,
                "stargazers_count": 80,
                "updated_at": "2011-01-26T19:14:43Z"
            }
        ]
    }
}';

    public function __construct(#[MapFrom('access_mismatch_repos')]
    public Schema\CodeScanningVariantAnalysisSkippedRepoGroup $accessMismatchRepos, #[MapFrom('not_found_repos')]
    public Schema\CodeScanningVariantAnalysis\SkippedRepositories\NotFoundRepos $notFoundRepos, #[MapFrom('no_codeql_db_repos')]
    public Schema\CodeScanningVariantAnalysisSkippedRepoGroup $noCodeqlDbRepos, #[MapFrom('over_limit_repos')]
    public Schema\CodeScanningVariantAnalysisSkippedRepoGroup $overLimitRepos,)
    {
    }
}
