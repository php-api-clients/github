<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WebhooksRelease1
{
    public const SCHEMA_JSON         = '{
    "title": "Release",
    "required": [
        "assets",
        "assets_url",
        "author",
        "body",
        "created_at",
        "draft",
        "html_url",
        "id",
        "name",
        "node_id",
        "prerelease",
        "published_at",
        "tag_name",
        "tarball_url",
        "target_commitish",
        "upload_url",
        "url",
        "zipball_url"
    ],
    "type": "object",
    "properties": {
        "assets": {
            "type": "array",
            "items": {
                "title": "Release Asset",
                "required": [
                    "url",
                    "browser_download_url",
                    "id",
                    "node_id",
                    "name",
                    "label",
                    "state",
                    "content_type",
                    "size",
                    "download_count",
                    "created_at",
                    "updated_at"
                ],
                "type": [
                    "object",
                    "null"
                ],
                "properties": {
                    "browser_download_url": {
                        "type": "string",
                        "format": "uri"
                    },
                    "content_type": {
                        "type": "string"
                    },
                    "created_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "download_count": {
                        "type": "integer"
                    },
                    "id": {
                        "type": "integer"
                    },
                    "label": {
                        "type": [
                            "string",
                            "null"
                        ]
                    },
                    "name": {
                        "type": "string",
                        "description": "The file name of the asset."
                    },
                    "node_id": {
                        "type": "string"
                    },
                    "size": {
                        "type": "integer"
                    },
                    "state": {
                        "enum": [
                            "uploaded"
                        ],
                        "type": "string",
                        "description": "State of the release asset."
                    },
                    "updated_at": {
                        "type": "string",
                        "format": "date-time"
                    },
                    "uploader": {
                        "title": "User",
                        "required": [
                            "login",
                            "id"
                        ],
                        "type": [
                            "object",
                            "null"
                        ],
                        "properties": {
                            "avatar_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "deleted": {
                                "type": "boolean"
                            },
                            "email": {
                                "type": [
                                    "string",
                                    "null"
                                ]
                            },
                            "events_url": {
                                "type": "string",
                                "format": "uri-template"
                            },
                            "followers_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "following_url": {
                                "type": "string",
                                "format": "uri-template"
                            },
                            "gists_url": {
                                "type": "string",
                                "format": "uri-template"
                            },
                            "gravatar_id": {
                                "type": "string"
                            },
                            "html_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "id": {
                                "type": "integer"
                            },
                            "login": {
                                "type": "string"
                            },
                            "name": {
                                "type": "string"
                            },
                            "node_id": {
                                "type": "string"
                            },
                            "organizations_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "received_events_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "repos_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "site_admin": {
                                "type": "boolean"
                            },
                            "starred_url": {
                                "type": "string",
                                "format": "uri-template"
                            },
                            "subscriptions_url": {
                                "type": "string",
                                "format": "uri"
                            },
                            "type": {
                                "enum": [
                                    "Bot",
                                    "User",
                                    "Organization"
                                ],
                                "type": "string"
                            },
                            "url": {
                                "type": "string",
                                "format": "uri"
                            }
                        }
                    },
                    "url": {
                        "type": "string",
                        "format": "uri"
                    }
                },
                "description": "Data related to a release."
            }
        },
        "assets_url": {
            "type": "string",
            "format": "uri"
        },
        "author": {
            "title": "User",
            "required": [
                "login",
                "id"
            ],
            "type": [
                "object",
                "null"
            ],
            "properties": {
                "avatar_url": {
                    "type": "string",
                    "format": "uri"
                },
                "deleted": {
                    "type": "boolean"
                },
                "email": {
                    "type": [
                        "string",
                        "null"
                    ]
                },
                "events_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "followers_url": {
                    "type": "string",
                    "format": "uri"
                },
                "following_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gists_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "gravatar_id": {
                    "type": "string"
                },
                "html_url": {
                    "type": "string",
                    "format": "uri"
                },
                "id": {
                    "type": "integer"
                },
                "login": {
                    "type": "string"
                },
                "name": {
                    "type": "string"
                },
                "node_id": {
                    "type": "string"
                },
                "organizations_url": {
                    "type": "string",
                    "format": "uri"
                },
                "received_events_url": {
                    "type": "string",
                    "format": "uri"
                },
                "repos_url": {
                    "type": "string",
                    "format": "uri"
                },
                "site_admin": {
                    "type": "boolean"
                },
                "starred_url": {
                    "type": "string",
                    "format": "uri-template"
                },
                "subscriptions_url": {
                    "type": "string",
                    "format": "uri"
                },
                "type": {
                    "enum": [
                        "Bot",
                        "User",
                        "Organization"
                    ],
                    "type": "string"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                },
                "user_view_type": {
                    "type": "string"
                }
            }
        },
        "body": {
            "type": [
                "string",
                "null"
            ]
        },
        "created_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "discussion_url": {
            "type": "string",
            "format": "uri"
        },
        "draft": {
            "type": "boolean",
            "description": "Whether the release is a draft or published"
        },
        "html_url": {
            "type": "string",
            "format": "uri"
        },
        "id": {
            "type": "integer"
        },
        "name": {
            "type": [
                "string",
                "null"
            ]
        },
        "node_id": {
            "type": "string"
        },
        "prerelease": {
            "type": "boolean",
            "description": "Whether the release is identified as a prerelease or a full release."
        },
        "published_at": {
            "type": [
                "string",
                "null"
            ],
            "format": "date-time"
        },
        "reactions": {
            "title": "Reactions",
            "required": [
                "url",
                "total_count",
                "+1",
                "-1",
                "laugh",
                "confused",
                "heart",
                "hooray",
                "eyes",
                "rocket"
            ],
            "type": "object",
            "properties": {
                "+1": {
                    "type": "integer"
                },
                "-1": {
                    "type": "integer"
                },
                "confused": {
                    "type": "integer"
                },
                "eyes": {
                    "type": "integer"
                },
                "heart": {
                    "type": "integer"
                },
                "hooray": {
                    "type": "integer"
                },
                "laugh": {
                    "type": "integer"
                },
                "rocket": {
                    "type": "integer"
                },
                "total_count": {
                    "type": "integer"
                },
                "url": {
                    "type": "string",
                    "format": "uri"
                }
            }
        },
        "tag_name": {
            "type": "string",
            "description": "The name of the tag."
        },
        "tarball_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        },
        "target_commitish": {
            "type": "string",
            "description": "Specifies the commitish value that determines where the Git tag is created from."
        },
        "upload_url": {
            "type": "string",
            "format": "uri-template"
        },
        "url": {
            "type": "string",
            "format": "uri"
        },
        "zipball_url": {
            "type": [
                "string",
                "null"
            ],
            "format": "uri"
        }
    },
    "description": "The [release](https:\\/\\/docs.github.com\\/rest\\/releases\\/releases\\/#get-a-release) object."
}';
    public const SCHEMA_TITLE        = 'Release';
    public const SCHEMA_DESCRIPTION  = 'The [release](https://docs.github.com/rest/releases/releases/#get-a-release) object.';
    public const SCHEMA_EXAMPLE_DATA = '{
    "assets": [
        {
            "browser_download_url": "https:\\/\\/example.com\\/",
            "content_type": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "download_count": 14,
            "id": 2,
            "label": "generated",
            "name": "generated",
            "node_id": "generated",
            "size": 4,
            "state": "uploaded",
            "updated_at": "1970-01-01T00:00:00+00:00",
            "uploader": {
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Organization",
                "url": "https:\\/\\/example.com\\/"
            },
            "url": "https:\\/\\/example.com\\/"
        },
        {
            "browser_download_url": "https:\\/\\/example.com\\/",
            "content_type": "generated",
            "created_at": "1970-01-01T00:00:00+00:00",
            "download_count": 14,
            "id": 2,
            "label": "generated",
            "name": "generated",
            "node_id": "generated",
            "size": 4,
            "state": "uploaded",
            "updated_at": "1970-01-01T00:00:00+00:00",
            "uploader": {
                "avatar_url": "https:\\/\\/example.com\\/",
                "deleted": false,
                "email": "generated",
                "events_url": "generated",
                "followers_url": "https:\\/\\/example.com\\/",
                "following_url": "generated",
                "gists_url": "generated",
                "gravatar_id": "generated",
                "html_url": "https:\\/\\/example.com\\/",
                "id": 2,
                "login": "generated",
                "name": "generated",
                "node_id": "generated",
                "organizations_url": "https:\\/\\/example.com\\/",
                "received_events_url": "https:\\/\\/example.com\\/",
                "repos_url": "https:\\/\\/example.com\\/",
                "site_admin": false,
                "starred_url": "generated",
                "subscriptions_url": "https:\\/\\/example.com\\/",
                "type": "Organization",
                "url": "https:\\/\\/example.com\\/"
            },
            "url": "https:\\/\\/example.com\\/"
        }
    ],
    "assets_url": "https:\\/\\/example.com\\/",
    "author": {
        "avatar_url": "https:\\/\\/example.com\\/",
        "deleted": false,
        "email": "generated",
        "events_url": "generated",
        "followers_url": "https:\\/\\/example.com\\/",
        "following_url": "generated",
        "gists_url": "generated",
        "gravatar_id": "generated",
        "html_url": "https:\\/\\/example.com\\/",
        "id": 2,
        "login": "generated",
        "name": "generated",
        "node_id": "generated",
        "organizations_url": "https:\\/\\/example.com\\/",
        "received_events_url": "https:\\/\\/example.com\\/",
        "repos_url": "https:\\/\\/example.com\\/",
        "site_admin": false,
        "starred_url": "generated",
        "subscriptions_url": "https:\\/\\/example.com\\/",
        "type": "Organization",
        "url": "https:\\/\\/example.com\\/",
        "user_view_type": "generated"
    },
    "body": "generated",
    "created_at": "1970-01-01T00:00:00+00:00",
    "discussion_url": "https:\\/\\/example.com\\/",
    "draft": false,
    "html_url": "https:\\/\\/example.com\\/",
    "id": 2,
    "name": "generated",
    "node_id": "generated",
    "prerelease": false,
    "published_at": "1970-01-01T00:00:00+00:00",
    "reactions": {
        "+1": 11,
        "-1": 10,
        "confused": 8,
        "eyes": 4,
        "heart": 5,
        "hooray": 6,
        "laugh": 5,
        "rocket": 6,
        "total_count": 11,
        "url": "https:\\/\\/example.com\\/"
    },
    "tag_name": "generated",
    "tarball_url": "https:\\/\\/example.com\\/",
    "target_commitish": "generated",
    "upload_url": "generated",
    "url": "https:\\/\\/example.com\\/",
    "zipball_url": "https:\\/\\/example.com\\/"
}';

    /**
     * draft: Whether the release is a draft or published
     * prerelease: Whether the release is identified as a prerelease or a full release.
     * tagName: The name of the tag.
     * targetCommitish: Specifies the commitish value that determines where the Git tag is created from.
     */
    public function __construct(public array $assets, #[MapFrom('assets_url')]
    public string $assetsUrl, public Schema\WebhooksRelease1\Author|null $author, public string|null $body, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('discussion_url')]
    public string|null $discussionUrl, public bool $draft, #[MapFrom('html_url')]
    public string $htmlUrl, public int $id, public string|null $name, #[MapFrom('node_id')]
    public string $nodeId, public bool $prerelease, #[MapFrom('published_at')]
    public string|null $publishedAt, public Schema\WebhooksRelease1\Reactions|null $reactions, #[MapFrom('tag_name')]
    public string $tagName, #[MapFrom('tarball_url')]
    public string|null $tarballUrl, #[MapFrom('target_commitish')]
    public string $targetCommitish, #[MapFrom('upload_url')]
    public string $uploadUrl, public string $url, #[MapFrom('zipball_url')]
    public string|null $zipballUrl,)
    {
    }
}
