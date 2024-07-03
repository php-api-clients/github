<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Operations\Search\Users\Response\ApplicationJson;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Ok
{
    public const SCHEMA_JSON         = '{
    "required": [
        "total_count",
        "incomplete_results",
        "items"
    ],
    "type": "object",
    "properties": {
        "total_count": {
            "type": "integer"
        },
        "incomplete_results": {
            "type": "boolean"
        },
        "items": {
            "type": "array",
            "items": {
                "title": "User Search Result Item",
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
                    "url",
                    "score"
                ],
                "type": "object",
                "properties": {
                    "login": {
                        "type": "string"
                    },
                    "id": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "avatar_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "gravatar_id": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "html_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "followers_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "subscriptions_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "organizations_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "repos_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "received_events_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "type": {
                        "type": "string"
                    },
                    "score": {
                        "type": "number"
                    },
                    "following_url": {
                        "type": "string"
                    },
                    "gists_url": {
                        "type": "string"
                    },
                    "starred_url": {
                        "type": "string"
                    },
                    "events_url": {
                        "type": "string"
                    },
                    "public_repos": {
                        "type": "integer"
                    },
                    "public_gists": {
                        "type": "integer"
                    },
                    "followers": {
                        "type": "integer"
                    },
                    "following": {
                        "type": "integer"
                    },
                    "created_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "updated_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "name": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "bio": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "email": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "email"
                    },
                    "location": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "site_admin": {
                        "type": "boolean"
                    },
                    "hireable": {
                        "type": [
                            "boolean",
                            "null"
                        ]
                    },
                    "text_matches": {
                        "title": "Search Result Text Matches",
                        "type": "array",
                        "items": {
                            "type": "object",
                            "properties": {
                                "object_url": {
                                    "type": "string"
                                },
                                "object_type": {
                                    "type": [
                                        "string",
                                        "null"
                                    ]
                                },
                                "property": {
                                    "type": "string"
                                },
                                "fragment": {
                                    "type": "string"
                                },
                                "matches": {
                                    "type": "array",
                                    "items": {
                                        "type": "object",
                                        "properties": {
                                            "text": {
                                                "type": "string"
                                            },
                                            "indices": {
                                                "type": "array",
                                                "items": {
                                                    "type": "integer"
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "blog": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "company": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "suspended_at": {
                        "type": [
                            "string",
                            "null"
                        ],
                        "format": "date-time"
                    }
                },
                "description": "User Search Result Item"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "total_count": 11,
    "incomplete_results": false,
    "items": [
        {
            "login": "generated",
            "id": 2,
            "node_id": "generated",
            "avatar_url": "https:\\/\\/example.com\\/",
            "gravatar_id": "generated",
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/",
            "followers_url": "https:\\/\\/example.com\\/",
            "subscriptions_url": "https:\\/\\/example.com\\/",
            "organizations_url": "https:\\/\\/example.com\\/",
            "repos_url": "https:\\/\\/example.com\\/",
            "received_events_url": "https:\\/\\/example.com\\/",
            "type": "generated",
            "score": 0.5,
            "following_url": "generated",
            "gists_url": "generated",
            "starred_url": "generated",
            "events_url": "generated",
            "public_repos": 12,
            "public_gists": 12,
            "followers": 9,
            "following": 9,
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00",
            "name": "generated",
            "bio": "generated",
            "email": "hi@example.com",
            "location": "generated",
            "site_admin": false,
            "hireable": false,
            "text_matches": [
                {
                    "object_url": "generated",
                    "object_type": "generated",
                    "property": "generated",
                    "fragment": "generated",
                    "matches": [
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        },
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        }
                    ]
                },
                {
                    "object_url": "generated",
                    "object_type": "generated",
                    "property": "generated",
                    "fragment": "generated",
                    "matches": [
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        },
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        }
                    ]
                }
            ],
            "blog": "generated",
            "company": "generated",
            "suspended_at": "1970-01-01T00:00:00+00:00"
        },
        {
            "login": "generated",
            "id": 2,
            "node_id": "generated",
            "avatar_url": "https:\\/\\/example.com\\/",
            "gravatar_id": "generated",
            "url": "https:\\/\\/example.com\\/",
            "html_url": "https:\\/\\/example.com\\/",
            "followers_url": "https:\\/\\/example.com\\/",
            "subscriptions_url": "https:\\/\\/example.com\\/",
            "organizations_url": "https:\\/\\/example.com\\/",
            "repos_url": "https:\\/\\/example.com\\/",
            "received_events_url": "https:\\/\\/example.com\\/",
            "type": "generated",
            "score": 0.5,
            "following_url": "generated",
            "gists_url": "generated",
            "starred_url": "generated",
            "events_url": "generated",
            "public_repos": 12,
            "public_gists": 12,
            "followers": 9,
            "following": 9,
            "created_at": "1970-01-01T00:00:00+00:00",
            "updated_at": "1970-01-01T00:00:00+00:00",
            "name": "generated",
            "bio": "generated",
            "email": "hi@example.com",
            "location": "generated",
            "site_admin": false,
            "hireable": false,
            "text_matches": [
                {
                    "object_url": "generated",
                    "object_type": "generated",
                    "property": "generated",
                    "fragment": "generated",
                    "matches": [
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        },
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        }
                    ]
                },
                {
                    "object_url": "generated",
                    "object_type": "generated",
                    "property": "generated",
                    "fragment": "generated",
                    "matches": [
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        },
                        {
                            "text": "generated",
                            "indices": [
                                8,
                                9
                            ]
                        }
                    ]
                }
            ],
            "blog": "generated",
            "company": "generated",
            "suspended_at": "1970-01-01T00:00:00+00:00"
        }
    ]
}';

    public function __construct(#[MapFrom('total_count')]
    public int $totalCount, #[MapFrom('incomplete_results')]
    public bool $incompleteResults, public array $items,)
    {
    }
}
