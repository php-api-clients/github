<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class GistSimple
{
    public const SCHEMA_JSON         = '{
    "title": "Gist Simple",
    "type": "object",
    "properties": {
        "forks": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "type": "object",
                "properties": {
                    "id": {
                        "type": "string"
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "user": {
                        "title": "Public User",
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
                            "bio",
                            "blog",
                            "company",
                            "email",
                            "followers",
                            "following",
                            "hireable",
                            "location",
                            "name",
                            "public_gists",
                            "public_repos",
                            "created_at",
                            "updated_at"
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
                            "following_url": {
                                "type": "string"
                            },
                            "gists_url": {
                                "type": "string"
                            },
                            "starred_url": {
                                "type": "string"
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
                            "events_url": {
                                "type": "string"
                            },
                            "received_events_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "type": {
                                "type": "string"
                            },
                            "site_admin": {
                                "type": "boolean"
                            },
                            "name": {
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
                            "blog": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "location": {
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
                            "notification_email": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "email"
                            },
                            "hireable": {
                                "type": [
                                    "boolean",
                                    "null"
                                ]
                            },
                            "bio": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "twitter_username": {
                                "type": [
                                    "string",
                                    "null"
                                ]
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
                            "plan": {
                                "required": [
                                    "collaborators",
                                    "name",
                                    "space",
                                    "private_repos"
                                ],
                                "type": "object",
                                "properties": {
                                    "collaborators": {
                                        "type": "integer"
                                    },
                                    "name": {
                                        "type": "string"
                                    },
                                    "space": {
                                        "type": "integer"
                                    },
                                    "private_repos": {
                                        "type": "integer"
                                    }
                                }
                            },
                            "suspended_at": {
                                "type": [
                                    "string",
                                    "null"
                                ],
                                "format": "date-time"
                            },
                            "private_gists": {
                                "type": "integer",
                                "examples": [
                                    1
                                ]
                            },
                            "total_private_repos": {
                                "type": "integer",
                                "examples": [
                                    2
                                ]
                            },
                            "owned_private_repos": {
                                "type": "integer",
                                "examples": [
                                    2
                                ]
                            },
                            "disk_usage": {
                                "type": "integer",
                                "examples": [
                                    1
                                ]
                            },
                            "collaborators": {
                                "type": "integer",
                                "examples": [
                                    3
                                ]
                            }
                        },
                        "description": "Public User",
                        "additionalProperties": false
                    },
                    "created_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "updated_at": {
                        "type": "string",
                        "format": "date-time"
                    }
                }
            },
            "deprecated": true
        },
        "history": {
            "type": [
                "array",
                "null"
            ],
            "items": {
                "title": "Gist History",
                "type": "object",
                "properties": {
                    "user": {
                        "anyOf": [
                            {
                                "type": "null"
                            },
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
                            }
                        ]
                    },
                    "version": {
                        "type": "string"
                    },
                    "committed_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "change_status": {
                        "type": "object",
                        "properties": {
                            "total": {
                                "type": "integer"
                            },
                            "additions": {
                                "type": "integer"
                            },
                            "deletions": {
                                "type": "integer"
                            }
                        }
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    }
                },
                "description": "Gist History"
            },
            "deprecated": true
        },
        "fork_of": {
            "title": "Gist",
            "required": [
                "id",
                "node_id",
                "url",
                "forks_url",
                "commits_url",
                "git_pull_url",
                "git_push_url",
                "html_url",
                "comments_url",
                "public",
                "description",
                "comments",
                "user",
                "files",
                "created_at",
                "updated_at"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "forks_url": {
                    "type": "string",
                    "format": "uri"
                },
                "commits_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "git_pull_url": {
                    "type": "string",
                    "format": "uri"
                },
                "git_push_url": {
                    "type": "string",
                    "format": "uri"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "files": {
                    "type": "object",
                    "additionalProperties": {
                        "type": "object",
                        "properties": {
                            "filename": {
                                "type": "string"
                            },
                            "type": {
                                "type": "string"
                            },
                            "language": {
                                "type": "string"
                            },
                            "raw_url": {
                                "type": "string"
                            },
                            "size": {
                                "type": "integer"
                            }
                        }
                    }
                },
                "public": {
                    "type": "boolean"
                },
                "created_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "updated_at": {
                    "type": "string",
                    "format": "date-time"
                },
                "description": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "comments": {
                    "type": "integer"
                },
                "user": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
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
                        }
                    ]
                },
                "comments_url": {
                    "type": "string",
                    "format": "uri"
                },
                "owner": {
                    "anyOf": [
                        {
                            "type": "null"
                        },
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
                        }
                    ]
                },
                "truncated": {
                    "type": "boolean"
                },
                "forks": {
                    "type": "array",
                    "items": {}
                },
                "history": {
                    "type": "array",
                    "items": {}
                }
            },
            "description": "Gist"
        },
        "url": {
            "type": "string"
        },
        "forks_url": {
            "type": "string"
        },
        "commits_url": {
            "type": "string"
        },
        "id": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "git_pull_url": {
            "type": "string"
        },
        "git_push_url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "files": {
            "type": "object",
            "additionalProperties": {
                "type": [
                    "object",
                    "null"
                ],
                "properties": {
                    "filename": {
                        "type": "string"
                    },
                    "type": {
                        "type": "string"
                    },
                    "language": {
                        "type": "string"
                    },
                    "raw_url": {
                        "type": "string"
                    },
                    "size": {
                        "type": "integer"
                    },
                    "truncated": {
                        "type": "boolean"
                    },
                    "content": {
                        "type": "string"
                    }
                }
            }
        },
        "public": {
            "type": "boolean"
        },
        "created_at": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "description": {
            "type": [
                "string",
                "null"
            ]
        },
        "comments": {
            "type": "integer"
        },
        "user": {
            "type": [
                "string",
                "null"
            ]
        },
        "comments_url": {
            "type": "string"
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
        "truncated": {
            "type": "boolean"
        }
    },
    "description": "Gist Simple"
}';
    public const SCHEMA_TITLE        = 'Gist Simple';
    public const SCHEMA_DESCRIPTION  = 'Gist Simple';
    public const SCHEMA_EXAMPLE_DATA = '{
    "forks": null,
    "history": null,
    "fork_of": {
        "url": "https:\\/\\/example.com\\/",
        "forks_url": "https:\\/\\/example.com\\/",
        "commits_url": "https:\\/\\/example.com\\/",
        "id": "generated",
        "node_id": "generated",
        "git_pull_url": "https:\\/\\/example.com\\/",
        "git_push_url": "https:\\/\\/example.com\\/",
        "html_url": "https:\\/\\/example.com\\/",
        "files": [],
        "public": false,
        "created_at": "1970-01-01T00:00:00+00:00",
        "updated_at": "1970-01-01T00:00:00+00:00",
        "description": "generated",
        "comments": 8,
        "user": {
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
        "comments_url": "https:\\/\\/example.com\\/",
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
        "truncated": false,
        "forks": [
            "generated",
            "generated"
        ],
        "history": [
            "generated",
            "generated"
        ]
    },
    "url": "generated",
    "forks_url": "generated",
    "commits_url": "generated",
    "id": "generated",
    "node_id": "generated",
    "git_pull_url": "generated",
    "git_push_url": "generated",
    "html_url": "generated",
    "files": [],
    "public": false,
    "created_at": "generated",
    "updated_at": "generated",
    "description": "generated",
    "comments": 8,
    "user": "generated",
    "comments_url": "generated",
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
    "truncated": false
}';

    /**
     * forkOf: Gist
     * owner: A GitHub user.
     */
    public function __construct(public array|null $forks, public array|null $history, #[MapFrom('fork_of')]
    public Schema\GistSimple\ForkOf|null $forkOf, public string|null $url, #[MapFrom('forks_url')]
    public string|null $forksUrl, #[MapFrom('commits_url')]
    public string|null $commitsUrl, public string|null $id, #[MapFrom('node_id')]
    public string|null $nodeId, #[MapFrom('git_pull_url')]
    public string|null $gitPullUrl, #[MapFrom('git_push_url')]
    public string|null $gitPushUrl, #[MapFrom('html_url')]
    public string|null $htmlUrl, public Schema\GistSimple\Files|null $files, public bool|null $public, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, public string|null $description, public int|null $comments, public string|null $user, #[MapFrom('comments_url')]
    public string|null $commentsUrl, public Schema\SimpleUser|null $owner, public bool|null $truncated,)
    {
    }
}
