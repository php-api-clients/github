<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Apps
{
    public const SCHEMA_JSON         = '{
    "type": "object",
    "properties": {
        "id": {
            "type": "integer"
        },
        "slug": {
            "type": "string"
        },
        "node_id": {
            "type": "string"
        },
        "owner": {
            "type": "object",
            "properties": {
                "login": {
                    "type": "string"
                },
                "id": {
                    "type": "integer"
                },
                "node_id": {
                    "type": "string"
                },
                "url": {
                    "type": "string"
                },
                "repos_url": {
                    "type": "string"
                },
                "events_url": {
                    "type": "string"
                },
                "hooks_url": {
                    "type": "string"
                },
                "issues_url": {
                    "type": "string"
                },
                "members_url": {
                    "type": "string"
                },
                "public_members_url": {
                    "type": "string"
                },
                "avatar_url": {
                    "type": "string"
                },
                "description": {
                    "type": "string"
                },
                "gravatar_id": {
                    "type": "string",
                    "examples": [
                        "\\"\\""
                    ]
                },
                "html_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""
                    ]
                },
                "followers_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""
                    ]
                },
                "following_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""
                    ]
                },
                "gists_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""
                    ]
                },
                "starred_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""
                    ]
                },
                "subscriptions_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""
                    ]
                },
                "organizations_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""
                    ]
                },
                "received_events_url": {
                    "type": "string",
                    "examples": [
                        "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""
                    ]
                },
                "type": {
                    "type": "string",
                    "examples": [
                        "\\"Organization\\""
                    ]
                },
                "site_admin": {
                    "type": "boolean",
                    "examples": [
                        false
                    ]
                }
            }
        },
        "name": {
            "type": "string"
        },
        "client_id": {
            "type": "string"
        },
        "description": {
            "type": "string"
        },
        "external_url": {
            "type": "string"
        },
        "html_url": {
            "type": "string"
        },
        "created_at": {
            "type": "string"
        },
        "updated_at": {
            "type": "string"
        },
        "permissions": {
            "type": "object",
            "properties": {
                "metadata": {
                    "type": "string"
                },
                "contents": {
                    "type": "string"
                },
                "issues": {
                    "type": "string"
                },
                "single_file": {
                    "type": "string"
                }
            }
        },
        "events": {
            "type": "array",
            "items": {
                "type": "string"
            }
        }
    }
}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{
    "id": 2,
    "slug": "generated",
    "node_id": "generated",
    "owner": {
        "login": "generated",
        "id": 2,
        "node_id": "generated",
        "url": "generated",
        "repos_url": "generated",
        "events_url": "generated",
        "hooks_url": "generated",
        "issues_url": "generated",
        "members_url": "generated",
        "public_members_url": "generated",
        "avatar_url": "generated",
        "description": "generated",
        "gravatar_id": "\\"\\"",
        "html_url": "\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\"",
        "followers_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\"",
        "following_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\"",
        "gists_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\"",
        "starred_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\"",
        "subscriptions_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\"",
        "organizations_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\"",
        "received_events_url": "\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\"",
        "type": "\\"Organization\\"",
        "site_admin": false
    },
    "name": "generated",
    "client_id": "generated",
    "description": "generated",
    "external_url": "generated",
    "html_url": "generated",
    "created_at": "generated",
    "updated_at": "generated",
    "permissions": {
        "metadata": "generated",
        "contents": "generated",
        "issues": "generated",
        "single_file": "generated"
    },
    "events": [
        "generated",
        "generated"
    ]
}';

    public function __construct(public int|null $id, public string|null $slug, #[MapFrom('node_id')]
    public string|null $nodeId, public Schema\BranchRestrictionPolicy\Apps\Owner|null $owner, public string|null $name, #[MapFrom('client_id')]
    public string|null $clientId, public string|null $description, #[MapFrom('external_url')]
    public string|null $externalUrl, #[MapFrom('html_url')]
    public string|null $htmlUrl, #[MapFrom('created_at')]
    public string|null $createdAt, #[MapFrom('updated_at')]
    public string|null $updatedAt, public Schema\BranchRestrictionPolicy\Apps\Permissions|null $permissions, public array|null $events,)
    {
    }
}
